 
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Book Details</h2>
                            <nav class="bradcaump-content"> 
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Book Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
      
        <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-12">
        				<?php if ($bookDetails) {
                    foreach ($bookDetails as $row) { 
											$salt="BOOK_COVER";
											$encrypted_id = base64_encode($row['bookid'] . $salt);?>
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
		        							  <a href="1.jpg"><img src="<?php echo $admin.$row['path'];?>" alt=""></a>
		        							  
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1><?php echo $row['bookname'];?></h1>
												<p class="author-name">Author: </p><p><?php echo $row['authorname'];?></p>
        								
        								<div class="product-info-stock-sku d-flex">
        									<p>Availability:<span> In stock</span></p>
        									
        								</div>
        								<div class="product">
													<div class="product__content2">
														<ul class="price d-flex">
															<li class="rate"><?php echo $row['rating'];?>
															<img src="<?php echo base_url()?>assets/images/icons/star.png"/> </li>
														</ul>	
													</div>
       									</div>
        								<div class="price-box">
        									<span>₹ <?php echo $row['price'];?></span>
												</div>
       									<div class="price-box_save">
        									<span class="old_price_save" >₹ <?php echo $row['mrp'];?></span> You Save: 
        									<span class="discount" >₹ <?php echo $row['mrp']- $row['price'];?></span><span><?php echo " (".round($row['discount'])."%)"; ?></span>
        								</div>
        								<div class="price-box_save">
        									<span class="" >Delivery: <span class="delivery" > Free </span></span> 
        								</div>
        								<div class="box-tocart d-flex">
        									<form class="form-inline" method="post" action="<?php echo base_url()?>View/BuyBooks/<?php echo $encrypted_id;?>">
														<span>Qty</span>
														<input id="qty" class="input-text " name="qty" min="1" value="1" title="Qty" type="number">
														<div class="buy__actions">
															<button class="tocart" type="submit" <?php if ($found == 1){ ?>title="disabled" disabled <?php   } ?> >Buy</button>
														</div>
       										</form>
												
       										<form id="addtoCart" method="post" action="<?php echo base_url()?>View/addToCart">
														<div class="addtocart__actions">
															<button 
																id="submit"  
																class="tocart" 
																type="submit" 
																<?php if ($found == 1){ ?>
																	title="disabled" 
																	disabled 
																<?php   } ?> >Add to Cart
															</button>
															<input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url();?>" />
															<input type="hidden" id="bookid" name="bookid" value="<?php echo $row['bookid'];?>" />
															<input type="hidden" id="cid" name="customerid" value="<?php echo $this->session->userdata('id');?>" />
														</div>
													</form>
        								</div>
        								<div class="product-info-stock-sku d-flex">
													<p>Please<span><a data-toggle="modal" href="#myModal" id="login-form-link"> Log in</a></span></p>
        								</div>
        								<div class="product-addto-links clearfix">
        									<a class="wishlist" href="#"></a>
        									<a class="compare" href="#"></a>
        									<a class="email" href="#"></a>
        								</div>
        								
        							</div>
        						</div>
        					</div>
        				</div>
        				
        			<div class="product__info__detailed">
								<div class="pro_details_nav nav justify-content-start" role="tablist">
										<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
										<a class="nav-item nav-link" data-toggle="tab" href="" role="tab">Reviews</a>
								</div>
	              <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	               <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p><?php echo $row['description'];?></p>
										<ul>
											<li><strong>Edition:  &nbsp;</strong> <?php echo $row['editionname'];?></li>
											<li><strong>Publisher:  &nbsp;</strong> <?php echo $row['publishername'];?></li>
											<li><strong>Pages:  &nbsp;</strong> <?php echo $row['pages'];?> pages</li>
											
										</ul>
									</div>
	                </div>
									<!-- End Single Tab Content -->
									<!-- Start Single Tab Content -->
									<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
										<div class="review__attribute">
											<h1>Customer Reviews</h1>
											<h2>Hastech</h2>
											<div class="review__ratings__type d-flex">
												<div class="review-ratings">
													<div class="rating-summary d-flex">
														<span>Quality</span>
															<ul class="rating d-flex">
															<li><i class="zmdi zmdi-star"></i></li>
															<li><i class="zmdi zmdi-star"></i></li>
															<li><i class="zmdi zmdi-star"></i></li>
															<li class="off"><i class="zmdi zmdi-star"></i></li>
															<li class="off"><i class="zmdi zmdi-star"></i></li>
															</ul>
													</div>
												</div>
												<div class="review-content">
													<p>Hastech</p>
													<p>Review by Hastech</p>
													<p>Posted on 11/6/2018</p>
												</div>
											</div>
										</div>
										<div class="review-fieldset">
										<h2>You're reviewing:</h2>
										<h3>Chaz Kangeroo Hoodie</h3>
										<div class="review-field-ratings">
											<div class="product-review-table">
												<div class="review-field-rating d-flex">
													<span>Quality</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>												
											</div>
										</div>
										<div class="review_form_field">
											<div class="input__box">
												<span>Nickname</span>
												<input id="nickname_field" type="text" name="nickname">
											</div>
											<div class="input__box">
												<span>Summary</span>
												<input id="summery_field" type="text" name="summery">
											</div>
											<div class="input__box">
												<span>Review</span>
												<textarea name="review"></textarea>
											</div>
											<div class="review-form-actions">
												<button>Submit Review</button>
											</div>
										</div>
									</div>
										</div>
										<!-- End Single Tab Content -->
									</div>
        				</div>
        				
						<?php
							}
						} ?>
       				
        				<!-- related products -->
						<div class="wn__related__product pt--80 pb--50">
							<div class="section__title text-center">
								<h2 class="title__be--2">Related Products</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
									
									<?php if ($recommBooks) {
                    foreach ($recommBooks as $row) { 
											$salt="BOOK_COVER";
											$encrypted_id = base64_encode($row['id'] . $salt);
											?>
									<!-- Start Single Product -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product">
											<div class="product__thumb">
												<a class="first__img" href="<?php echo base_url()?>View/BookDetails/<?php echo $encrypted_id;?>"><img src="<?php echo $admin.$row['path'];?>" alt="product image"></a>
												
												<div class="new__box">
													<span class="new-label">For You</span>
												</div>
												<ul class="prize position__right__bottom d-flex">
													<li>₹ <?php echo $row['price'];?></li>
													<li class="old_prize">₹ <?php echo $row['mrp'];?></li>
												</ul>												
											</div>
											<div class="product__content2">
												<h4><a href="<?php echo base_url()?>View/BookDetails/<?php echo $encrypted_id;?>"><?php echo $row['bookname'];?></a></h4>
												<ul class="price d-flex">
															<li class="rate"><?php echo $row['rating'];?>
													</li></ul>
											</div>
										</div>
									</div>
									<!-- Start Single Product -->
									<?php } } ?>
								</div>
							</div>
						</div>
						
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>
        						<ul>
									<li><a href="<?php echo base_url()?>View/Category/Educational">Educational</a></li>
								 	<li><a href="<?php echo base_url()?>View/Category/Science Fiction">Science Fiction</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Biography">Biography</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Business">Business</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Cookbooks">Cookbooks</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Health">Health</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Thriller">Thriller</a></li>
									<li><a href="<?php echo base_url()?>View/Category/History">History</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Inspiration">Inspiration</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Business">Business</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Fiction/Sports">Sports</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Society">Society</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Exam">Exam</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Science">Science </a></li>
									<li><a href="<?php echo base_url()?>View/Category/Comics">Comics</a></li>
									<li><a href="<?php echo base_url()?>View/Category/Children">Children</a></li>
        						</ul>
        					</aside>
        					
        					
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Product Tags</h3>
        						<ul>
        							<li><a href="#">Biography</a></li>
        							<li><a href="#">Business</a></li>
        							<li><a href="#">Cookbooks</a></li>
        							<li><a href="#">Health & Fitness</a></li>
        							<li><a href="#">History</a></li>
        							<li><a href="#">Mystery</a></li>
        							<li><a href="#">Inspiration</a></li>
        							<li><a href="#">Religion</a></li>
        							<li><a href="#">Fiction</a></li>
        							<li><a href="#">Fantasy</a></li>
        							<li><a href="#">Music</a></li>
        							<li><a href="#">Toys</a></li>
        							<li><a href="#">Hoodies</a></li>
        						</ul>
        					</aside>
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End main Content -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form--2" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
	
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
		    <!-- Modal -->
		    <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
		                        <!-- Start product images -->
		                        <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="images/product/big-img/1.jpg">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                        <div class="product-info">
		                            <h1>Simple Fabric Bags</h1>
		                            <div class="rating__and__review">
		                                <ul class="rating">
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                </ul>
		                                <div class="review">
		                                    <a href="#">4 customer reviews</a>
		                                </div>
		                            </div>
		                            <div class="price-box-3">
		                                <div class="s-price-box">
		                                    <span class="new-price">$17.20</span>
		                                    <span class="old-price">$45.00</span>
		                                </div>
		                            </div>
		                            <div class="quick-desc">
		                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
		                            </div>
		                            <div class="select__color">
		                                <h2>Select color</h2>
		                                <ul class="color__list">
		                                    <li class="red"><a title="Red" href="#">Red</a></li>
		                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                </ul>
		                            </div>
		                            <div class="select__size">
		                                <h2>Select size</h2>
		                                <ul class="color__list">
		                                    <li class="l__size"><a title="L" href="#">L</a></li>
		                                    <li class="m__size"><a title="M" href="#">M</a></li>
		                                    <li class="s__size"><a title="S" href="#">S</a></li>
		                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
		                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
		                                </ul>
		                            </div>
		                            <div class="social-sharing">
		                                <div class="widget widget_socialsharing_widget">
		                                    <h3 class="widget-title-modal">Share this product</h3>
		                                    <ul class="social__net social__net--2 d-flex justify-content-start">
		                                        <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
		                                        <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
		                                        <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
		                                        <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                            <div class="addtocart-btn">
		                                <a href="#">Add to cart</a>
		                            </div>
		                        </div><!-- .product-info -->
		                    </div><!-- .modal-product -->
		                </div><!-- .modal-body -->
		            </div><!-- .modal-content -->
		        </div><!-- .modal-dialog -->
		    </div>
		    <!-- END Modal -->
		</div>
		<!-- END QUICKVIEW PRODUCT -->

	</div>
	<!-- //Main wrapper -->

	

	<!-- JS Files -->
		<script src="<?php echo base_url()?>assets/js/vendor/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/plugins.js"></script>
		<script src="<?php echo base_url()?>assets/js/active.js"></script>
		<script src="<?php echo base_url()?>assets/js/index.js"></script>
		<script src="<?php echo base_url()?>assets/js/addCart.js"></script>
			<script src="<?php echo base_url()?>assets/js/index.js"></script>

	<script>
		
	</script>