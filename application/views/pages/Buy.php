
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Shopping Cart</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shopping Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-sm-12 ol-lg-9">
                        <div class="table table-responsive">
                           <table>
                           			<thead>
																	<tr class="title-top">
																			<th class="product-thumbnail">Cover</th>
																			<th class="product-name">Details</th>
																			<th class="product-quantity">Quantity</th>																			
																			<th class="product-price">Total</th>
																			<th class="product-price">Stars</th>
																	</tr>
                               </thead>
                                <tbody>
                                	<?php if ($books) {
	 																	 $count = 0;
                   									 //foreach ($books as $row) { 
																			 $count ++;	
																			 //$salt="BOOK_CART";
																			// $encrypted_id = base64_encode($row['bookid'] . $salt);
																	?>
																			<tr>
																				<td class="product-thumbnail"><a href="#"><img src="<?php echo $admin.$books['path'];?>" alt="product img"></a></td>
																				<td class="product-name" style="width:50%;">
																					<p class="book-name"><?php echo $books['bookname'];?> </p>
																					<p class="author-name"><strong>Author:</strong> <?php echo $books['authorname'];?> </p>
																					<p class="author-name"><strong>Price:</strong> ₹ <?php echo $books['price'];?></p>
																					<div class="remove_actions">
																						<a href="<?php echo base_url()?>View/RemoveCart/<?php// echo $encrypted_id;?>/<?php echo $this->session->userdata('id');?>" id="remove" class="tocart">Remove</a> 
																					</div>																				
																				</td>
																				
																				<td class="product-price"><span class="amount"><span class="total" id="total-<?php echo $count;?>"><?php echo $books['qty'];?></span></span></td>
																				
																				<td class="product-price"><span class="amount">₹ <span class="total" id="total-<?php echo $count;?>"><?php echo $books['price'];?></span></span></td>
																				<td class="rating-select">																					
																					<select name="rate" id="rate-<?php echo $count;?>">
																						<option value="1">1</option>
																						<option value="2">2</option>
																						<option value="3">3</option>
																						<option value="4">4</option>
																						<option value="5">5</option>
																					</select>
																						
																				</td>
																				<input type="hidden" value="<?php// echo $row['price'];?>" id="price" name="price"/>
																				<input type="hidden" value="<?php echo $count;?>" id="count"/>
																		</tr>  																		
																		<?php
																			//}
																		}else{  ?>
																		<tr>
																				<td class="center">No items to display.</td>
																		</tr>
																		<?php } ?>                          
														 		</tbody>
													</table>
												</div>
                                                                  
                    </div>
                    <?php if ($books) { ?>
                    <div class="col-md-4">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Subtotal (<p id="item-number"><?php echo $books['qty']; ?> item ) </li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>₹ <p id="grand-total"> <?php echo $total; ?></p></li>
                                </ul>
                            </div>
                            
                            <div class="checkout__actions">
                           		<form id="myform" method="post" action="<?php echo base_url()?>View/CheckoutBuy">
                          				<input type="hidden" name="id" id="qty" value="<?php echo $books['bookid']; ?> "/>
                          				<input type="hidden" name="qty" id="qty" value="<?php echo $books['qty']; ?> "/>
                          				<input type="hidden" name="price" id="bprice" value="<?php echo $books['price']; ?> "/>     <input type="hidden" name="name" id="bprice" value="<?php echo $books['bookname']; ?> "/>                          				
                          				<input type="hidden" name="rating" id="bprice" value="<?php echo $books['rating']; ?> "/>     <input type="hidden" name="total" id="bprice" value="<?php echo $total; ?> "/>                                    				
                           				<input type="hidden" id="cid" name="customerid" value="<?php echo $this->session->userdata('id');?>" />
        													<button class="tocart" type="submit" onclick="getQuantity()" >Proceed to Checkout</button>
															</form>
        									</div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->
		

	</div>
	<!-- //Main wrapper -->

<!-- JS Files -->
		<script src="<?php echo base_url()?>assets/js/vendor/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/plugins.js"></script>
		<script src="<?php echo base_url()?>assets/js/active.js"></script>
		<script src="<?php echo base_url()?>assets/js/addCart.js"></script>
		<script src="<?php echo base_url()?>assets/js/index.js"></script>

		<script>
			/*function callSubtotal(){
				var base_price = document.getElementsByName("price[]");
				console.log(document.getElementById("count").value);
				
				
				var q = 0, x = 0, total = 0, base = 0;
				q = document.getElementById("qnty").value;
				if(q < 1){
					alert("Quantity must be greater than or equal to 1");
				}else{
					x = parseFloat(document.getElementsByTagName('p')[1].innerHTML);
					
					base = document.getElementById("base-price").value;
					total = q * base;
					//console.log("q:"+q+ " x: "+x+" total: "+total);
					document.getElementsByTagName('p')[1].innerHTML = total;
					document.getElementById("item-number").innerHTML = q + " items";
				}
			}*/
			function getQuantity(){
				var myArray = new Array();
				var price = new Array();
				var ratearr = new Array();
				
				<?php foreach($baseprice as $key => $val){ ?>
						price.push('<?php echo $val; ?>');
				<?php } ?>
			//	document.getElementById("bprice").value = price;
				
				for( var i = 1; i <= <?php echo count($baseprice); ?>; i++){					
					myArray[i-1] = parseFloat(document.getElementById(i).value);
				//	document.getElementById("qty").value = myArray;
					
					var rate = "rate-"+i;
					ratearr[i-1] = parseFloat(document.getElementById(rate).value);
					document.getElementById("rate").value = ratearr;
				}
				//console.log(price);
			}
			function calculation(id, price, qnty){
				
				var getQty = parseFloat(document.getElementById('item-number').innerHTML);
				var getSum = parseFloat(document.getElementById('grand-total').innerHTML);
				var grand = 0, qnty = 0;
				var myArray = new Array();
				
				var text = "total-"+id;
				document.getElementById(text).innerHTML = price;	
				//console.log( );
				for( var i = 1; i <= <?php echo count($baseprice); ?>; i++){
					var str = "total-"+i;
					grand += parseFloat(document.getElementById(str).innerHTML);	
					qnty += parseFloat(document.getElementById(i).value);	
					myArray[i-1] = parseFloat(document.getElementById(i).value);
					//console.log("i: "+ i + parseFloat(document.getElementById(str).innerHTML));
					//console.log(str +" "+ parseFloat(document.getElementById(str).innerHTML));
				}		
				document.getElementById('item-number').innerHTML = qnty+ " items";	
				document.getElementById('grand-total').innerHTML = grand;	
			}
		</script>
		<script>
			$(function(){
  
				$('input[name="input-1"]').on('keyup change paste keydown', function(){

					var grand = 0, total = 0;
					var $this = $(this); 
					var id =$this.attr('id');
					var qnty = $this.val();
					
					if( qnty == 0 ){	
						 $($this).val("1");
						alert("You must have atleast one unit of item!");
					} else	{
						//console.log($this.val()); // value of this input
						var price = <?php echo json_encode($baseprice); ?>;
						var getSum = parseFloat(document.getElementById('grand-total').innerHTML);

						var sum = qnty * price[(id-1)];

						total = getSum - price[id-1];
						//grand = total +sum;
						//alert($('#price').val());

						calculation(id, sum, qnty);
					}					

				});

			})
		</script>