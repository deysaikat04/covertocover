<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Pages extends CI_Controller {

    public function view($page = 'Home')
    {
				$data['admin'] = 'http://127.0.0.1/seller.ctoc/';
				$this->load->model('BookModel');  
				if($this->session->userdata('id')){
					$id = $this->session->userdata('id');
					$cartCount = $this->BookModel->getCartCountByUser($id);  
					$data['cartCount']= array(								
						'count' => $cartCount[0]['no']
					);
					$this->session->set_userdata($data['cartCount']); 							
				}
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }
        if($page === 'Home'){
            $this->load->model('BookModel');  

            $data['admin'] = 'http://127.0.0.1/seller.ctoc/';
            
						$bookId = array();
            $topTenId = $this->BookModel->getToptenId();  
            if($topTenId){
                for($i = 0; $i < count($topTenId); $i++ ){
                    $getDiscount[] = $this->BookModel->getDiscount($topTenId[$i]['discountid']);  
                   // $bookId[$i] = $getDiscount[$i][0]['bookid'];
                    $getBookData[] = $this->BookModel->getBookData($getDiscount[$i][0]['bookid']);  
                    $getCover[] =  $this->BookModel->getCoverImage($getDiscount[$i][0]['bookid']);  
                    // price
                    $price = round( $getBookData[$i][0]['mrp'] - ( $getBookData[$i][0]['mrp'] * ( $getDiscount[$i][0]['discount'] / 100 ) ) );

                    $bookDetails[] = array(
                        'bookid' => $getDiscount[$i][0]['bookid'],
                        'bookname' => $getBookData[$i][0]['name'],                        
                        'rating' => $getBookData[$i][0]['rating'],                        
                        'price' => $price,
                        'path' => $getCover[$i][0]['path']
                        
                    );
                }
            }
						
            $data['topFive'] = $bookDetails;
						
						// 
						
            //$data['topFive'] = $this->BookModel->get_new();  
					
						/*$data['bio'] = $this->BookModel->get_bio();  
						$data['adventure'] = $this->BookModel->get_adventure();  
						$data['comics'] = $this->BookModel->get_comics();  
						$data['cookbooks'] = $this->BookModel->get_cookbooks();  */

           /* echo "<pre>";
            print_r( $bookDetails ); exit;*/
					
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
        } 
		else if($page === 'Contact'){
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
		} else if(($page === 'Register') || ($page === 'SellerLogin') || ($page === 'SellerForgetPass') ){
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/HeaderSeller');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/FooterSeller');
    } 
		else if($page === 'BookGrid')
		{
					$this->load->model('BookModel'); 
					// get data of book id from seller id
					$allBookId = $this->BookModel->getBookIdBySeller(5);
					if($allBookId){
    				for($i = 0; $i < count($allBookId); $i++){
    					// getting edition id by book id
    					$editionId[] = $this->BookModel->getEditionIdByBook($allBookId[$i]['bookid']);						
    					$edId[$i] = $editionId[$i][0]['editionid'];							
							
 
    					// getting authorid, publisherid BY editionid
    					$authorPublisherId[] = $this->BookModel->geAuthPubIdByEdition($editionId[$i][0]['editionid']);					

    					// get book data
    					$bookData[] = $this->BookModel->getBookData($allBookId[$i]['bookid']);	

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
							$getImage = $this->BookModel->getImageData($allBookId[$i]['bookid']);
    					// price
    					$price = round( $bookData[$i][0]['mrp'] - ( $bookData[$i][0]['mrp'] * ( $allBookId[$i]['discount'] / 100 ) ) );
							
    					$bookDetails[] = array(
    						'bookid' => $allBookId[$i]['bookid'],
    						'bookname' => $bookData[$i][0]['name'],
    						'description' => $bookData[$i][0]['description'],
    						'mrp' => $bookData[$i][0]['mrp'],
    						'category' => $bookData[$i][0]['category'],
    						'rating' => $bookData[$i][0]['rating'],
    						'status' => $bookData[$i][0]['status'],

    						'sellerid' => $allBookId[$i]['sellerid'],
    						'discount' => $allBookId[$i]['discount'],

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
				} // end of if
				else{
					redirect(base_url());
				}
			shuffle($data['bookDetails']);
			//echo "<pre>";
			//print_r($data['bookDetails']);
			//exit;
			$data['title'] = ucfirst($page);
			$this->load->view('common/header/Header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('common/footer/Footer');
		}
		else {
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
        }
    }
}
