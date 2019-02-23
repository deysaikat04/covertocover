<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
				// load Session Library
		$this->load->library('session');
		$this->load->model("BookModel");
		$this->load->library("pagination");
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->library('pdf');
		$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
		date_default_timezone_set("Asia/Kolkata");
	}
	
	public function RegisterCustomer()	
	{
		$this->form_validation->set_rules('name','name', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('mob','mob', 'trim|required|min_length[10]');
		$this->form_validation->set_rules('mail','mail', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('pass','pass1', 'trim|min_length[6]');
		
		$hash = password_hash($this->input->post('pass1'), PASSWORD_DEFAULT);
		$customerData = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('mob'),
            'email' => $this->input->post('mail'),
            'password' => $hash,
            'toc' => date('Y-m-d H:i:s'),
						'status' => 1,
            'emailVerified' => 0
        );
        if ($this->form_validation->run() == FALSE) {
            $valERR = validation_errors();
            $this->session->set_flashdata('addFromValErr', $valERR);
						print "<script type=\"text/javascript\">alert('Error! Please try again.');window.location.href='";
								echo base_url(); 
						print "';</script>";
           //
        } else {
						// Insert form data in table
						if($this->BookModel->checkUserExist($this->input->post('mail'))){
							$this->session->set_flashdata('regSellerErr', 'Please give another mail id. This mail id is already used.');
								redirect(base_url());
						}else{
							$lastInsertedId = $this->BookModel->addCustomer($customerData);	
						}
            
            if($lastInsertedId){
            	$this->session->set_flashdata('regSellerSucc', 'Registered Successfully.');
							$data['customerInfo']= array(
								'id' => $lastInsertedId,
								'name' => $this->input->post('name'),
								'mail' => $this->input->post('mail')
							);
							$this->session->set_userdata($data['customerInfo']); 
								
            	print "<script type=\"text/javascript\">alert('Registration Successful!');window.location.href='";
								echo base_url(); 
						print "';</script>";
            }else {
                    $this->session->set_flashdata('regSellerErr', 'Encountered an Error While Saving Data.');
                    redirect(base_url());
                }
        }
	}
	
	
	public function LoginCustomer()	
	{		
		$this->form_validation->set_rules('mail','mail', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('pass1','pass1', 'trim|min_length[3]');
		
		
		$mail = $this->input->post('mail');  
		$pass = $this->input->post('pass1');  
       /**/
				
		
        if ($this->form_validation->run() == FALSE) {
            $valERR = validation_errors();
            $this->session->set_flashdata('addFromValErr', $valERR);
						print "<script type=\"text/javascript\">alert('Error! Please try again.');window.location.href='";
								echo base_url(); 
						print "';</script>";
           // redirect(base_url() );
        } else {						
							$getCustomerData = $this->BookModel->getRows($mail);	
					
							$hash = $getCustomerData[0]['password'];
							if (password_verify($pass, $hash)) {
									$customerInfo= array(
										'id' => $getCustomerData[0]['id'],
										'name' => $getCustomerData[0]['name'],
										'mail' => $this->input->post('mail')
									);
									$this->session->set_userdata($customerInfo);
									redirect(base_url());
							} else {
									redirect(base_url());
							}
						}
		
        }
	
	public function Search()	
	{
		$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
		$text = $this->input->post('query'); 
		$bookId = $this->BookModel->getBooksSearch($text);
		//echo "<pre>";
		//print_r($bookId); exit;
			if($bookId){
				for($i = 0; $i < count($bookId); $i++){
					
					$allBookId[] = $this->BookModel->getSellerIdByBookId($bookId[$i]['id']);
				
		
					//echo $allBookId[$i][0]['bookid'];
		
					// getting edition id by book id
					$editionId[] = $this->BookModel->getEditionIdByBook($allBookId[$i][0]['bookid']);						
					$edId[$i] = $editionId[$i][0]['editionid'];							


					// getting authorid, publisherid BY editionid
					$authorPublisherId[] = $this->BookModel->geAuthPubIdByEdition($editionId[$i][0]['editionid']);					

					// get book data
					$bookData[] = $this->BookModel->getBookData($allBookId[$i][0]['bookid']);	

					// get edition name
					$editionData[] = $this->BookModel->getEditionData($editionId[$i][0]['editionid']);	

					$data['authorMultiple'] = array();
					$authornames = " ";
					if(count($authorPublisherId[$i]) > 1){
						for($z=0; $z < count($authorPublisherId[$i]); $z++){

								$data['authorMultiple'][$z] = $this->BookModel->getAuthorData($authorPublisherId[$i][$z]['authorid']);
								$authornames = $authornames.', '.$data['authorMultiple'][$z][0]['name'] ;
						}
					} else{
						$data['authorSingle'] = $this->BookModel->getAuthorData($authorPublisherId[$i][0]['authorid']);
						$authornames = $data['authorSingle'][0]['name'];
					}
					//print_r($data['authorSingle']);
					//print_r($authornames);							

					// get publisher name
					$publisherData[] = $this->BookModel->getPublisherData($authorPublisherId[$i][0]['pid']);
					// get image
					$getImage = $this->BookModel->getImageData($allBookId[$i][0]['bookid']);
					// price
					$price = round( $bookData[$i][0]['mrp'] - ( $bookData[$i][0]['mrp'] * ( $allBookId[$i][0]['discount'] / 100 ) ) );
					$mrp = round( $bookData[$i][0]['mrp'] );

						$bookDetails[] = array(
							'bookid' => $allBookId[$i][0]['bookid'],
							'bookname' => $bookData[$i][0]['name'],
							'description' => $bookData[$i][0]['description'],
							'mrp' => $mrp,
							'category' => $bookData[$i][0]['category'],
							'rating' => $bookData[$i][0]['rating'],
							'status' => $bookData[$i][0]['status'],

							'sellerid' => $allBookId[$i][0]['sellerid'],
							'discount' => $allBookId[$i][0]['discount'],

							'editionid' => $editionId[$i][0]['editionid'],
							'editionname' => $editionData[$i][0]['ename'],
							'pages' => $editionData[$i][0]['pages'],

							//'authorid' => $authorPublisherId[$i][0]['authorid'],
							'authorname' => $authornames,

							'publisherid' => $authorPublisherId[$i][0]['pid'],
							'publishername' => $publisherData[$i][0]['pname'],

							'price' => $price,
							'path' => $getImage[0]['path']

						);
    			}// end of for
					$data['bookDetails'] = $bookDetails;	
				//print_r($bookDetails);
			//exit;
				} // end of if
				else{
					redirect(base_url());
				}	
		
			shuffle($data['bookDetails']);
			$this->load->view('common/header/Header');
			$this->load->view('pages/BookGrid', $data);
			$this->load->view('common/footer/Footer');
	}
	
	public function bookGrid()	 
	{
			$this->load->model('BookModel'); 
			$this->load->library('pagination');
			$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
			// get data of book id from seller id
			//$allBookId = $this->BookModel->getBookIdBySeller(5);
			$bookId = $this->BookModel->getBooks();
		//echo "<pre>";
		//print_r($bookId); exit;
			if($bookId){
				for($i = 0; $i < count($bookId); $i++){
					
					$allBookId[] = $this->BookModel->getSellerIdByBookId($bookId[$i]['id']);
				
		
					//echo $allBookId[$i][0]['bookid'];
		
					// getting edition id by book id
					$editionId[] = $this->BookModel->getEditionIdByBook($allBookId[$i][0]['bookid']);						
					$edId[$i] = $editionId[$i][0]['editionid'];							


					// getting authorid, publisherid BY editionid
					$authorPublisherId[] = $this->BookModel->geAuthPubIdByEdition($editionId[$i][0]['editionid']);					

					// get book data
					$bookData[] = $this->BookModel->getBookData($allBookId[$i][0]['bookid']);	

					// get edition name
					$editionData[] = $this->BookModel->getEditionData($editionId[$i][0]['editionid']);	

					$data['authorMultiple'] = array();
					$authornames = " ";
					if(count($authorPublisherId[$i]) > 1){
						for($z=0; $z < count($authorPublisherId[$i]); $z++){

								$data['authorMultiple'][$z] = $this->BookModel->getAuthorData($authorPublisherId[$i][$z]['authorid']);
								$authornames = $authornames.', '.$data['authorMultiple'][$z][0]['name'] ;
						}
					} else{
						$data['authorSingle'] = $this->BookModel->getAuthorData($authorPublisherId[$i][0]['authorid']);
						$authornames = $data['authorSingle'][0]['name'];
					}
					//print_r($data['authorSingle']);
					//print_r($authornames);							

					// get publisher name
					$publisherData[] = $this->BookModel->getPublisherData($authorPublisherId[$i][0]['pid']);
					// get image
					$getImage = $this->BookModel->getImageData($allBookId[$i][0]['bookid']);
					// price
					$price = round( $bookData[$i][0]['mrp'] - ( $bookData[$i][0]['mrp'] * ( $allBookId[$i][0]['discount'] / 100 ) ) );
					$mrp = round( $bookData[$i][0]['mrp'] );

						$bookDetails[] = array(
							'bookid' => $allBookId[$i][0]['bookid'],
							'bookname' => $bookData[$i][0]['name'],
							'description' => $bookData[$i][0]['description'],
							'mrp' => $mrp,
							'category' => $bookData[$i][0]['category'],
							'rating' => $bookData[$i][0]['rating'],
							'status' => $bookData[$i][0]['status'],

							'sellerid' => $allBookId[$i][0]['sellerid'],
							'discount' => $allBookId[$i][0]['discount'],

							'editionid' => $editionId[$i][0]['editionid'],
							'editionname' => $editionData[$i][0]['ename'],
							'pages' => $editionData[$i][0]['pages'],

							//'authorid' => $authorPublisherId[$i][0]['authorid'],
							'authorname' => $authornames,

							'publisherid' => $authorPublisherId[$i][0]['pid'],
							'publishername' => $publisherData[$i][0]['pname'],

							'price' => $price,
							'path' => $getImage[0]['path']

						);
    			}// end of for
					$data['bookDetails'] = $bookDetails;	
				//print_r($bookDetails);
			//exit;
				} // end of if
				else{
					redirect(base_url());
				}	
		
			shuffle($data['bookDetails']);
			$this->load->view('common/header/Header');
			$this->load->view('pages/BookGrid', $data);
			$this->load->view('common/footer/Footer');
	}
	
	public function BookDetails($encrypted_id)	
	{
		if(!$this->session->userdata('id'))
		{
			print "<script type=\"text/javascript\">alert('Please Log in to continue.');window.location.href='";
								echo base_url(); 
						print "';</script>";
		}
			$salt="BOOK_COVER";
			$decrypted_id_raw = base64_decode($encrypted_id);
			$id = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
			$this->load->model('BookModel'); 
			$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
			// get data of book id from seller id
			
			if($id){
				
					// getting edition id by book id
					$editionId = $this->BookModel->getEditionIdByBook($id);						
					//$edId[$i] = $editionId[$i][0]['editionid'];	
				if(!$editionId){redirect(base_url());}
				
					// getting authorid, publisherid BY editionid
					$authorPublisherId = $this->BookModel->geAuthPubIdByEdition($editionId[0]['editionid']);					

					// get book data
					$bookData = $this->BookModel->getBookData($id);	
				
					// get discount
				$discountData = $this->BookModel->getBookDiscount($id);	

					// get edition name
					$editionData = $this->BookModel->getEditionData($editionId[0]['editionid']);	

					$data['authorMultiple'] = array();
					$authornames = " ";
					if(count($authorPublisherId) > 1){
						for($z=0; $z < count($authorPublisherId); $z++){

								$data['authorMultiple'][$z] = $this->BookModel->getAuthorData($authorPublisherId[$z]['authorid']);
								$authornames = $authornames.', '.$data['authorMultiple'][$z][0]['name'] ;
						}
					} else{
						$data['authorSingle'] = $this->BookModel->getAuthorData($authorPublisherId[0]['authorid']);
						$authornames = $data['authorSingle'][0]['name'];
					}
					
				

					// get publisher name
					$publisherData = $this->BookModel->getPublisherData($authorPublisherId[0]['pid']);
					// get image
					$getImage = $this->BookModel->getImageData($id);
				
					$data['found'] = 0;
					if($this->session->userdata('id')){
						// To check the book is already exixts in Cart
						$getCart = $this->BookModel->getCartByUser( $this->session->userdata('id'));
						
						for($k =0; $k < count($getCart); $k++)
						{						
							if($bookData[0]['id'] == $getCart[$k]['bookid']){
									$data['found'] = 1; 
									break;
							}
						}
					} else{
						//$data['found'] = 1; 
					}

					// price
					$price = round( $bookData[0]['mrp'] - ( $bookData[0]['mrp'] * ( $discountData[0]['discount'] / 100 ) ) );

						$bookDetails[] = array(
							'bookid' => $id,
							'bookname' => $bookData[0]['name'],
							'description' => $bookData[0]['description'],
							'mrp' => $bookData[0]['mrp'],
							'category' => $bookData[0]['category'],
							'rating' => $bookData[0]['rating'],
							'status' => $bookData[0]['status'],
							
							'discount' => $discountData[0]['discount'],

							'editionid' => $editionId[0]['editionid'],
							'editionname' => $editionData[0]['ename'],
							'pages' => $editionData[0]['pages'],

							//'authorid' => $authorPublisherId[$i][0]['authorid'],
							'authorname' => $authornames,

							'publisherid' => $authorPublisherId[0]['pid'],
							'publishername' => $publisherData[0]['pname'],

							'price' => $price,
							'path' => $getImage[0]['path'] 

						);
    			
					$data['bookDetails'] = $bookDetails;	
					$data['cartItems'] = $bookDetails;	
				
				// recommendation part
					{
						$customerIdInCart = $this->BookModel->getCusFromCart();		
		
						for($i = 0; $i < count($customerIdInCart); $i++)
						{
							$booksByCustomer[] = $this->BookModel->getAllCartByUser($customerIdInCart[$i]['customerid']);		
							for($j = 0; $j < count($booksByCustomer[$i]); $j++)
							{

								$bookset[$i][] = array(
									'customerid' =>  $booksByCustomer[$i][0]['customerid'],
									'bookid' => $booksByCustomer[$i][$j]['bookid']
								);				
							}
						}
						$k = 0;
						$map = array();
						for($i = 0; $i < count($bookset); $i++)
						{	

							for($j = 0; $j < count($bookset[$i]); $j++)
							{
								$getBookData[] = $this->BookModel->getBookDataRecomm($bookset[$i][$j]['bookid']);
								$c = count($getBookData);
								if($k < $c){
									$booksArray[$bookset[$i][$j]['customerid']][] = array(
										$getBookData[$k][0]['name'] => $getBookData[$k][0]['rating']

									);
								}
								$k++;


							} // end of inner for loop1		


						} // end of outer for loop

						//$cartItemsPerCus = $this->BookModel->getRecommendations($books, "phil");
						for($i = 0; $i < count($booksArray); $i++ )
						{
							$books = array();
							for($j = 0; $j < count($booksArray[$bookset[$i][0]['customerid']]); $j++)
								{					
									$books = array_merge($books,$booksArray[$bookset[$i][0]['customerid']][$j] );
								}
							$map[$bookset[$i][0]['customerid']] = $books;
						}

						$salt="BOOK_COVER";

						// get the recommended books by user
						//$lastUpdatedId = $this->BookModel->getRecommendations($map, $bookset[0][0]['customerid']);		
						//$lastUpdatedId = $this->BookModel->getRecommendations($map, $bookset[1][0]['customerid']);		
						$lastUpdatedId = $this->BookModel->getRecommendations($map, $this->session->userdata('id'));		
						// get the recommended books details
						for($i =0; $i < count($lastUpdatedId); $i++)
						{	
							$bookname = array_keys($lastUpdatedId)[$i];
							$bookrating = $lastUpdatedId[$bookname];
							$getRecommBookData[] = $this->BookModel->getRecommBookData($bookname, $bookrating);	
							// get image
							$getRecommImageData[] = $this->BookModel->getImageData($getRecommBookData[$i][0]['id']);
							
							// get discount
							$discountData[] = $this->BookModel->getBookDiscount($getRecommBookData[$i][0]['id']);	
							// price
							$price = round( $getRecommBookData[$i][0]['mrp'] - ( $getRecommBookData[$i][0]['mrp'] * ( $discountData[0]['discount'] / 100 ) ) );

							
							$recommBooks[] = array(
								'id' => $getRecommBookData[$i][0]['id'],
								'bookname' => $getRecommBookData[$i][0]['name'],
								'rating' => $getRecommBookData[$i][0]['rating'],
								'mrp' => $getRecommBookData[$i][0]['mrp'],
								'price' => $price,
								'path' => $getRecommImageData[$i][0]['path']
								
							);
						}
						
						$data['recommBooks'] = $recommBooks;
					}				
				} // end of if
				else{
					redirect(base_url());
			}
			$this->load->view('common/header/Header');
			$this->load->view('pages/BookDetails',$data);
			$this->load->view('common/footer/Footer');
	}
	
	public function BuyBooks($encrypted_id)	
	{
			$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
			$salt="BOOK_COVER";
			$decrypted_id_raw = base64_decode($encrypted_id);
			$id = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
			$this->load->model('BookModel'); 
			$qty = $this->input->post('qty');  
			$cid = $this->session->userdata('id');
		
			$data['books'] = array();
			//if($cid)$getcartByUser = $this->BookModel->getCartByUser($id);
			//else redirect(base_url());
			if($id){
					
						$getDiscount = $this->BookModel->getDiscountData($id);
						$getBookData = $this->BookModel->getBookData($id);
						$getImage = $this->BookModel->getImageData($id);

						/*-------------------------------------------*/
						$editionId = $this->BookModel->getEditionIdByBook($id);	 
						// getting authorid, publisherid BY editionid
						$authorPublisherId = $this->BookModel->geAuthPubIdByEdition($editionId[0]['editionid']);					

						// get edition name
						//$editionData[] = $this->BookModel->getEditionData($editionId[$i][0]['editionid']);	

						$data['authorMultiple'] = array();
						$authornames = " ";
						if(count($authorPublisherId) > 1){
								for($z=0; $z < count($authorPublisherId); $z++){

									$data['authorMultiple'][$z] = $this->BookModel->getAuthorData($authorPublisherId[$z]['authorid']);
									$authornames = $authornames.', '.$data['authorMultiple'][$z][0]['name'] ;
							}
						} else{
							$data['authorSingle'] = $this->BookModel->getAuthorData($authorPublisherId[0]['authorid']);
							$authornames = $data['authorSingle'][0]['name'];
						}
						$price = round( $getBookData[0]['mrp'] - ( $getBookData[0]['mrp'] * ( $getDiscount[0]['discount'] / 100 ) ) );
						/*---------------------------------------------*/
						$bookCart = array(
							'bookid' => $id,
							'bookname' => $getBookData[0]['name'],
							'description' => $getBookData[0]['description'],
							'rating' => $getBookData[0]['rating'],
							'discount' => $getDiscount[0]['discount'],
							'authorname' => $authornames,
							'price' => $price,
							'qty' => $qty,
							'path' => $getImage[0]['path']
						);
					$data['total'] = $qty * $price;
					/*for($z=0; $z < count($bookCart); $z++){
						$data['baseprice'][]=$bookCart[$z]['price'];
					}*/
					$data['books'] = $bookCart;
				
							
			}
		/*echo "<pre>";
							print_r($bookCart);
							exit;*/
			$this->load->view('common/header/Header');
			$this->load->view('pages/Buy',$data);
			$this->load->view('common/footer/Footer');

	}
	
	public function CheckoutBuy()
	{
		$this->load->model('BookModel'); 
		$id = $this->input->post('id');  
		$qty = $this->input->post('qty');  
		$name = $this->input->post('name');  
		$price = $this->input->post('price');  
		$rating = $this->input->post('rating');  
		$total = $this->input->post('total');  
		$cid = $this->session->userdata('id');
		$found = 0;
		
		$bookCart = array(
								'bookid' => $id,
								'bookname' => $name,
								'rating' => $rating,
								'qnty' => $qty,
								'totalprice' => $total
							);
		$ratingData = array(
								'cid' => $cid,
								'bookid' => $id,
								'rating' => $rating,
								'toc' => date('Y-m-d H:i:s')							
							);
		$InsertRating = $this->BookModel->InsertRating($ratingData);	
		
		// insert order data and set 0 to cart
		$orderData = array(
			'bookid' => $id,
			'customerid' => $cid,
			'price' => $price,
			'qty' => $qty,
			'toc' => date('Y-m-d H:i:s'),
			'status' => 1,
			'paymentStatus' => 0
		);
		$InsertOrder = $this->BookModel->InsertOrder($orderData);	
		
		$where2 = array(
								'id' => $id,
								'status' => 1
							);
		$update = array(
			'status' => 0
		);
		$lastUpdatedIdBook = $this->BookModel->updateBooksAfterOrder($where2, $update);	
		
		
		//$lastUpdatedId = $this->BookModel->updateCartAfterOrder($where, $update);	
		//echo $id;
		$getCart = $this->BookModel->getAllCartByUser($cid);
		
		$flag = 0;
		for($k =0; $k < count($getCart); $k++)
		{						
			if($id == $getCart[$k]['bookid']){		
				$flag = 1;				
				break;
			}
		}	
		if($flag == 1){
			$where= array('bookid' => $id, 'customerid' => $cid, 'status' => "0");
				$Data = array(
					"status" => "1"
				);
				$lastInsertedId = $this->BookModel->updateCart($where, $Data);
		} else {
			$cartData = array(
					'bookid' => $id,
					'customerid' => $cid, 
					'toc' => date('Y-m-d H:i:s'),
					'status' => 0
				);

				$lastInsertedId = $this->BookModel->addToCart($cartData);
		}
	
		
		$cartData = array(
					'bookid' => $id,
					'customerid' => $cid,
					'toc' => date('Y-m-d H:i:s'),
					'status' => 0
				);

		$lastInsertedId = $this->BookModel->addToCart($cartData);
		
		$getAllBooksAfterOrder = $this->BookModel->allBooksRateAfterOrder($id);	
		
		$avgRatingPerBook = array(
				'bookid' => $id,
				'avg' => number_format($getAllBooksAfterOrder[0]['sum'] / $getAllBooksAfterOrder[0]['no'], 1)
			);
		$bookidwhere = array(
			'id' => $id
		);

		$updateRating = array(
			'rating' => number_format($getAllBooksAfterOrder[0]['sum'] / $getAllBooksAfterOrder[0]['no'], 1),
			'tou' => date('Y-m-d H:i:s')
		);

		$lastUpdatedRating = $this->BookModel->updateRatingAfterOrder($bookidwhere, $updateRating);	
		$getCustomerData = $this->BookModel->getCustomerData($cid);
					$data['customer'] = $getCustomerData;
					$data['bookCart'] = $bookCart;
					$data['grand'] = $total;					
					$data['qnty'] = $qty;
					$data['bprice'] = $price;
			
		
			$this->load->view('common/header/Header');
			$this->load->view('pages/CheckoutBuy',$data);
			$this->load->view('common/footer/Footer');
		
	}
	
	public function addToCart()
	{		
		$this->load->model('BookModel'); 

		$bookid = $this->input->post('bookid');  
		$customerid = $this->input->post('cid');  
		
		$getCart = $this->BookModel->getCartByUserZero($customerid);
		
		
		$flag = 0;
		for($k =0; $k < count($getCart); $k++)
		{						
			if($bookid == $getCart[$k]['bookid']){		
				$flag = 1;				
				break;
			}
		}	
		if($flag == 1){
			$where= array('bookid' => $bookid, 'customerid' => $customerid, 'status' => "0");
				$Data = array(
					"status" => "1"
				);
				$lastInsertedId = $this->BookModel->updateCart($where, $Data);
		} else {
			$cartData = array(
					'bookid' => $bookid,
					'customerid' => $customerid,
					'toc' => date('Y-m-d H:i:s'),
					'status' => 1
				);

				$lastInsertedId = $this->BookModel->addToCart($cartData);
		}
		if($lastInsertedId){
			$c = $this->session->userdata('count');
			$c += 1;
			$this->session->set_userdata('count', $c);
			echo "Item is added successfully in your cart";
			
		}else{
			echo "Error while adding item in your cart!";
		}
	}
	
	public function Cart($encrypted_id)
	{			
			$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
			$salt="BOOK_COVER";
			$decrypted_id_raw = base64_decode($encrypted_id);
			$id = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
			
			$data['bookCart'] = array();
			if($id)$getcartByUser = $this->BookModel->getCartByUser($id);
			else redirect(base_url());
			if($getcartByUser)
			{
					for($i = 0; $i < count($getcartByUser); $i++)
					{
						$getDiscount[] = $this->BookModel->getDiscountData($getcartByUser[$i]['bookid']);
						$getBookData[] = $this->BookModel->getBookData($getcartByUser[$i]['bookid']);
						$getImage = $this->BookModel->getImageData($getcartByUser[$i]['bookid']);

						/*-------------------------------------------*/
						$editionId[] = $this->BookModel->getEditionIdByBook($getcartByUser[$i]['bookid']);	 
						// getting authorid, publisherid BY editionid
						$authorPublisherId[] = $this->BookModel->geAuthPubIdByEdition($editionId[$i][0]['editionid']);					

						// get edition name
						//$editionData[] = $this->BookModel->getEditionData($editionId[$i][0]['editionid']);	

						$data['authorMultiple'] = array();
						$authornames = " ";
						if(count($authorPublisherId[$i]) > 1){
								for($z=0; $z < count($authorPublisherId[$i]); $z++){

									$data['authorMultiple'][$z] = $this->BookModel->getAuthorData($authorPublisherId[$i][$z]['authorid']);
									$authornames = $authornames.', '.$data['authorMultiple'][$z][0]['name'] ;
							}
						} else{
							$data['authorSingle'] = $this->BookModel->getAuthorData($authorPublisherId[$i][0]['authorid']);
							$authornames = $data['authorSingle'][0]['name'];
						}
						$price = round( $getBookData[$i][0]['mrp'] - ( $getBookData[$i][0]['mrp'] * ( $getDiscount[$i][0]['discount'] / 100 ) ) );
						/*---------------------------------------------*/
						$bookCart[] = array(
							'bookid' => $getcartByUser[$i]['bookid'],
							'bookname' => $getBookData[$i][0]['name'],
							'description' => $getBookData[$i][0]['description'],
							'rating' => $getBookData[$i][0]['rating'],
							'discount' => $getDiscount[$i][0]['discount'],
							'authorname' => $authornames,
							'price' => $price,
							'path' => $getImage[0]['path']
						);
					}
					for($z=0; $z < count($bookCart); $z++){
						$data['baseprice'][]=$bookCart[$z]['price'];
					}
				$data['bookCart'] = $bookCart;
				
						
			}
			
			$this->load->view('common/header/Header');
			$this->load->view('pages/Cart',$data);
			$this->load->view('common/footer/Footer');
	}
	
	public function RemoveCart($encrypted_id,$uid)	
	{
			
			$salt="BOOK_CART";
			
			$decrypted_id_raw = base64_decode($encrypted_id);
			$id = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
			
			$remove = $this->BookModel->removeFromCart($id,$uid);
		  if($remove){
				$c = $this->session->userdata('count');
				$c = $c - 1;
				$this->session->set_userdata('count', $c);
				$salt2="BOOK_COVER";
				$u_id = base64_encode($this->session->userdata('id') . $salt2);
				header("Location: " . base_url('View/Cart/'.$u_id));

			}
	}
	
	public function Checkout()
	{
			$qnty = array();
			$grand = 0;
			$id = $this->input->post('customerid'); 
			$qnty = explode(",",$this->input->post('qty')); 
			$bprice = explode(",",$this->input->post('bprice')); 
			$rate = explode(",",$this->input->post('rate')); 
		
		

				$getCustomerData = $this->BookModel->getCustomerData($id);
				$data['customer'] = $getCustomerData;
				$data['bookCart'] = array();
					

				if($id)$getcartByUser = $this->BookModel->getCartByUser($id);
				else redirect(base_url());

				if($getcartByUser){
						for($i = 0; $i < count($getcartByUser); $i++)
						{

							$getDiscount[] = $this->BookModel->getDiscountData($getcartByUser[$i]['bookid']);
							$getBookData[] = $this->BookModel->getBookData($getcartByUser[$i]['bookid']);
							$getImage = $this->BookModel->getImageData($getcartByUser[$i]['bookid']);

							$bookCart[] = array(
								'bookid' => $getcartByUser[$i]['bookid'],
								'sellerid' => $getDiscount[$i][0]['sellerid'],
								'bookname' => $getBookData[$i][0]['name'],

								'rating' => $getBookData[$i][0]['rating'],
								'path' => $getImage[0]['path'],
								'qnty' => $qnty[$i],
								'totalprice' => $bprice[$i] * $qnty[$i]
							);
							$grand += $bookCart[$i]['totalprice'];

							//insert rating
							$ratingData[] = array(
								'cid' => $id,
								'bookid' => $getcartByUser[$i]['bookid'],
								'rating' => $rate[$i],
								'toc' => date('Y-m-d H:i:s')							
							);
							$InsertRating = $this->BookModel->InsertRating($ratingData[$i]);	
							// insert order data and set 0 to cart
							$orderData[] = array(
								'bookid' => $getcartByUser[$i]['bookid'],
								'customerid' => $id,
								'price' => $bprice[$i],
								'qty' => $qnty[$i],
								'toc' => date('Y-m-d H:i:s'),
								'status' => 1,
								'paymentStatus' => 0
							);

							$InsertOrder = $this->BookModel->InsertOrder($orderData[$i]);	

							$where = array(
								'bookid' => $getcartByUser[$i]['bookid'],
								'status' => 1
							);
							$where2 = array(
								'id' => $getcartByUser[$i]['bookid'],
								'status' => 1
							);

							$update = array(
								'status' => 0
							);
							$lastUpdatedId = $this->BookModel->updateCartAfterOrder($where, $update);	
							$lastUpdatedIdBook = $this->BookModel->updateBooksAfterOrder($where2, $update);		
							//--------------------------------------------------------
							
							// rating statictics
							if($InsertOrder)
							{
								$getAllBooksAfterOrder = $this->BookModel->allBooksRateAfterOrder($getcartByUser[$i]['bookid']);	
								$avgRatingPerBook = array(
									'bookid' => $getcartByUser[$i]['bookid'],
									'avg' => number_format($getAllBooksAfterOrder[0]['sum'] / $getAllBooksAfterOrder[0]['no'], 1)
								);
							$bookidwhere = array(
								'id' => $getcartByUser[$i]['bookid']
							);

							$updateRating = array(
								'rating' => number_format($getAllBooksAfterOrder[0]['sum'] / $getAllBooksAfterOrder[0]['no'], 1),
								'tou' => date('Y-m-d H:i:s')
							);
								
							$lastUpdatedRating = $this->BookModel->updateRatingAfterOrder($bookidwhere, $updateRating);	
															
								
							}
							
						}
					
					$data['bookCart'] = $bookCart;
					$data['grand'] = $grand;					
					$data['qnty'] = $qnty;
					$data['bprice'] = $bprice;
				}
		
			$this->load->view('common/header/Header');
			$this->load->view('pages/Checkout',$data);
			$this->load->view('common/footer/Footer');
	}
	
	public function PlaceOrder()
	{
			$qnty = array();
			$flag = 0;
			$id = $this->input->post('customerid'); 
			$qnty = explode(",",$this->input->post('qnty')); 
			$bprice = explode(",",$this->input->post('bprice')); 
		
			$this->form_validation->set_rules('city', 'city', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('state', 'state', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('country', 'country', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[3]');
			$this->form_validation->set_rules('zip', 'zip', 'trim|required|min_length[6]');
		
			$customerData = array(
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'country' => $this->input->post('country'),
				'address' => $this->input->post('address'),
				'zip' => $this->input->post('zip')
			);
			
		$where = array( 'id' => $id);
		$updateCustomerData = $this->BookModel->updateCustomerData($where, $customerData);
		
		$orderSummary = $this->BookModel->getOrderSummary($this->session->userdata('id'));
		$grand = 0;
		$bookid = "";
		for($i = 0; $i < count($orderSummary); $i++)
		{
			$bookid = $bookid.",". $orderSummary[$i]['bookid'] ;
			$grand += $orderSummary[$i]['qty'] * $orderSummary[$i]['price'] ;
			/*$product[] = array(				
				'total' => $orderSummary[$i]['qty'] * $orderSummary[$i]['price'],
				'qnty' =>  $orderSummary[$i]['qty']
			);*/
			
				$where= array('id' => $orderSummary[$i]['id']);
				$Data = array(
					"paymentStatus" => "1"
				);
				$lastInsertedId = $this->BookModel->updateOrderPayment($where, $Data);
		} 
		$product = array(
			'descr' => $bookid,
			'total' => $grand,
			'qnty' =>  count($orderSummary)
		);
		
		//echo "<pre>";
		//print_r($orderSummary);
		//print_r($lastInsertedId);
		//exit;
		
		
		$this->buy($product);
		/*if($updateCustomerData){
			
			if($id){
				$getcartByUser = $this->BookModel->getCartByUser($id);
				
				for($i = 0; $i < count($getcartByUser); $i++)
				{
					
					$orderData[] = array(
						'bookid' => $getcartByUser[$i]['bookid'],
						'customerid' => $getcartByUser[$i]['customerid'],
						'price' => $bprice[$i],
						'qty' => $qnty[$i],
						'toc' => date('Y-m-d H:i:s'),
						'status' => 1,
						'paymentStatus' => 0
					);
				
					
					$InsertOrder = $this->BookModel->InsertOrder($orderData[$i]);	
				
					$where = array(
						'bookid' => $getcartByUser[$i]['bookid'],
						'status' => 1
					);
					
					$where2 = array(
						'id' => $getcartByUser[$i]['bookid'],
						'status' => 1
					);
					
					$update = array(
						'status' => 0
					);
					
					$lastUpdatedId = $this->BookModel->updateCartAfterOrder($where, $update);					
								
				}// end of for			
				
			}
			else redirect(base_url());
			
		} else {*/
		
			
	}
	
	function buy($product)
	{
		 		$this->load->library('paypal_lib');
        // Set variables for paypal form
        $returnURL = base_url().'paypal/success';
        $cancelURL = base_url().'paypal/cancel';
        $notifyURL = base_url().'paypal/ipn';
        
        // Get product data from the database
        //$product = $this->product->getRows($id);	
			/*$product = array
				(
						'id' => 1,
						'name' => "ASUS",
						'image' => "1.jpg",
						'price' => "100.00",
						'status' => 1
				);*/
        // Get current user ID from the session
       //$userID = $_SESSION['userID'];
        
        // Add fields to paypal form
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        //$this->paypal_lib->add_field('item_name', $product['name']);
       // $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $product['qnty']);
        $this->paypal_lib->add_field('amount',  $product['total']);
        
        // Render paypal form
        $this->paypal_lib->paypal_auto_form();
		
    }
	
	public function Logout(){
		$this->session->unset_userdata('name');
    $this->session->unset_userdata('password');
    $this->session->unset_userdata('id');
    $this->session->sess_destroy();
    	
    	redirect(base_url());
	}
	
	function mypdf()
	{
		echo "<pre>";
		$this->load->library('pdf');

		$customerIdInCart = $this->BookModel->getOrderOfCustomer($this->session->userdata('id'));		
		print_r($customerIdInCart);
		exit;
		$content = "<h2>Welcome in CoverToCover</h2>";
  	//$this->pdf->load_view('mypdf');
		$this->pdf->loadHtml($content);
  	$this->pdf->render();


  	$this->pdf->stream("welcome.pdf");
   }
	
	function Recommendation()
	{
		
		$customerIdInCart = $this->BookModel->getCusFromCart();		
		
		for($i = 0; $i < count($customerIdInCart); $i++)
		{
			$booksByCustomer[] = $this->BookModel->getAllCartByUser($customerIdInCart[$i]['customerid']);		
			for($j = 0; $j < count($booksByCustomer[$i]); $j++)
			{
				
				$bookset[$i][] = array(
					'customerid' =>  $booksByCustomer[$i][0]['customerid'],
					'bookid' => $booksByCustomer[$i][$j]['bookid']
				);				
			}
		}
		$k = 0;
		$map = array();
		for($i = 0; $i < count($bookset); $i++)
		{	
			
			for($j = 0; $j < count($bookset[$i]); $j++)
			{
				$getBookData[] = $this->BookModel->getBookDataRecomm($bookset[$i][$j]['bookid']);
				$c = count($getBookData);
				if($k < $c){
					$booksArray[$bookset[$i][$j]['customerid']][] = array(
						$getBookData[$k][0]['name'] => $getBookData[$k][0]['rating']
						
					);
				}
				$k++;
				
				
			} // end of inner for loop1		
			
			
		} // end of outer for loop
		
		//$cartItemsPerCus = $this->BookModel->getRecommendations($books, "phil");
		for($i = 0; $i < count($booksArray); $i++ )
		{
			$books = array();
			for($j = 0; $j < count($booksArray[$bookset[$i][0]['customerid']]); $j++)
				{					
					$books = array_merge($books,$booksArray[$bookset[$i][0]['customerid']][$j] );
				}
			$map[$bookset[$i][0]['customerid']] = $books;
		}
		
		$salt="BOOK_COVER";
		
		// get the recommended books by user
		$lastUpdatedId = $this->BookModel->getRecommendations($map, $bookset[2][0]['customerid']);		
		// get the recommended books details
		for($i =0; $i < count($lastUpdatedId); $i++)
		{	
			$bookname = array_keys($lastUpdatedId)[$i];
			$bookrating = $lastUpdatedId[$bookname];
			$getRecommBookData = $this->BookModel->getRecommBookData($bookname, $bookrating);	
			$encrypted_id = base64_encode($getRecommBookData[0]['id'] . $salt);
			print_r($encrypted_id);
		}
		
		echo "<pre>";
		print_r($lastUpdatedId);
		print_r($this->session->userdata('id'));
		print_r($bookset[2][0]['customerid']);
		
		exit;

		
	}
	
	function category($name)
	{
		$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
		if(!empty($name))
		{
			$categoryName = $this->BookModel->categoryName($name);
		
			
			if(!empty($categoryName[0]['id']))
			{
				$bookId = $this->BookModel->bookDataByCat($categoryName[0]['id']);			
				if($bookId){
					for($i = 0; $i < count($bookId); $i++){

						$allBookId[] = $this->BookModel->getSellerIdByBookId($bookId[$i]['id']);

						// getting edition id by book id
						$editionId[] = $this->BookModel->getEditionIdByBook($allBookId[$i][0]['bookid']);						
						$edId[$i] = $editionId[$i][0]['editionid'];							


						// getting authorid, publisherid BY editionid
						$authorPublisherId[] = $this->BookModel->geAuthPubIdByEdition($editionId[$i][0]['editionid']);					

						// get book data
						$bookData[] = $this->BookModel->getBookData($allBookId[$i][0]['bookid']);	

						// get edition name
						$editionData[] = $this->BookModel->getEditionData($editionId[$i][0]['editionid']);	

						$data['authorMultiple'] = array();
						$authornames = " ";
						if(count($authorPublisherId[$i]) > 1){
							for($z=0; $z < count($authorPublisherId[$i]); $z++){

									$data['authorMultiple'][$z] = $this->BookModel->getAuthorData($authorPublisherId[$i][$z]['authorid']);
									$authornames = $authornames.', '.$data['authorMultiple'][$z][0]['name'] ;
							}
						} else{
							$data['authorSingle'] = $this->BookModel->getAuthorData($authorPublisherId[$i][0]['authorid']);
							$authornames = $data['authorSingle'][0]['name'];
						}
						//print_r($data['authorSingle']);
						//print_r($authornames);							

						// get publisher name
						$publisherData[] = $this->BookModel->getPublisherData($authorPublisherId[$i][0]['pid']);
						// get image
						$getImage = $this->BookModel->getImageData($allBookId[$i][0]['bookid']);
						// price
						$price = round( $bookData[$i][0]['mrp'] - ( $bookData[$i][0]['mrp'] * ( $allBookId[$i][0]['discount'] / 100 ) ) );
						$mrp = round( $bookData[$i][0]['mrp'] );

							$bookDetails[] = array(
								'bookid' => $allBookId[$i][0]['bookid'],
								'bookname' => $bookData[$i][0]['name'],
								'description' => $bookData[$i][0]['description'],
								'mrp' => $mrp,
								'category' => $bookData[$i][0]['category'],
								'rating' => $bookData[$i][0]['rating'],
								'status' => $bookData[$i][0]['status'],

								'sellerid' => $allBookId[$i][0]['sellerid'],
								'discount' => $allBookId[$i][0]['discount'],

								'editionid' => $editionId[$i][0]['editionid'],
								'editionname' => $editionData[$i][0]['ename'],
								'pages' => $editionData[$i][0]['pages'],

								//'authorid' => $authorPublisherId[$i][0]['authorid'],
								'authorname' => $authornames,

								'publisherid' => $authorPublisherId[$i][0]['pid'],
								'publishername' => $publisherData[$i][0]['pname'],

								'price' => $price,
								'path' => $getImage[0]['path']

							);
						}// end of for
						$data['bookDetails'] = $bookDetails;	
					//print_r($bookDetails);
				//exit;
					} // end of if
					else{
						redirect(base_url().'Empty');
					}	

				shuffle($data['bookDetails']);
				$this->load->view('common/header/Header');
				$this->load->view('pages/BookGrid', $data);
				$this->load->view('common/footer/Footer');
			}
			else{
				$this->load->view('common/header/Header');
				$this->load->view('pages/Empty');
				$this->load->view('common/footer/Footer');
			}
			
		} else {
			 redirect(base_url() );
		}
	}
	
}