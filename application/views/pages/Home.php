
		
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Let's <span>have </span></h2>
		            				<h2>a date  <span>with </span></h2>
		            				<h2>a Good <span>Book. </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--4 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
            
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<p>Here are some new books added this month.</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					
					<?php {
                    foreach ($topFive as $row) { 
											$salt="BOOK_COVER"; 
											$encrypted_id = base64_encode($row['bookid'] . $salt);?>

					<!-- Start Single Product -->
					<div class="product product__style--3 ">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12 overflow-wrap">
							<div class="product__thumb">
								<a class="first__img" href="<?php echo base_url()?>View/BookDetails/<?php echo $encrypted_id;?>">
									<img src="<?php echo $admin.$row['path'];?>" alt="product image"></a>
								
								<div class="hot__box">
									<span class="hot-label">BEST SELLER</span>
								</div>
							</div>
							<div class="product__content2">
								<h4><a href="#"><?php echo $row['bookname'];?></a></h4>
								<ul class="price d-flex">
									<li>₹<?php echo $row['price'];?></li>
									<li class="rate"><?php echo $row['rating'];?>
									<img src="<?php echo base_url()?>assets/images/icons/star.png"/> </li>
								</ul>							
								
							</div>
						</div>
					</div>
					<!-- Start Single Product -->

					<?php } 
                        }
                    ?> 
					
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->

		<!-- Start BEst Seller Area -->
		<section class="wrapper">
			<div class="container-fluid ">
				<div class="section__title text-center">
							<h2>Editor's Choice</h2>
						</div>
				<div class="row category-cards" >
					<div class="col-md-4 ">
						<a href="<?php echo base_url()?>View/Category/Business"><img src="<?php echo base_url()?>assets/images/Category/5.jpg" alt="product image"></a>
					</div>
					<div class="col-md-4">
						<a href="<?php echo base_url()?>View/Category/Thriller"><img src="<?php echo base_url()?>assets/images/Category/2.jpg" alt="product image"></a>
					</div>
					<div class="col-md-4">
						<a href="<?php echo base_url()?>View/Category/Educational"><img src="<?php echo base_url()?>assets/images/Category/6.jpg" alt="product image"></a>
					</div>
					<div class="col-md-4">
						<a href="<?php echo base_url()?>View/Category/Comics"><img src="<?php echo base_url()?>assets/images/Category/4.jpg" alt="product image"></a>
					</div>
					<div class="col-md-4">
						<a href="<?php echo base_url()?>View/Category/Children"><img src="<?php echo base_url()?>assets/images/Category/3.jpg" alt="product image"></a>
					</div>
					<div class="col-md-4">
						<a href="<?php echo base_url()?>View/Category/Sports"><img src="<?php echo base_url()?>assets/images/Category/8.jpg" alt="product image"></a>
					</div>
				</div>				
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		
		<!-- Start BEst Seller Area -->
		<section class="wrapper">
			<div class="container-fluid ">				
				<div class="row">
					<div class="col-md-6">
						<a href="<?php echo base_url()?>View/Category/Exam"><img src="<?php echo base_url()?>assets/images/Category/7.jpg" alt="product image"></a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo base_url()?>View/BookGrid"><img src="<?php echo base_url()?>assets/images/Category/10.jpg" alt="product image"></a>
					</div>
				</div>
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		
			
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container ">
				<div class="section__title text-center">
					<h2 class="title__be--2">Shop By  <span class="color--theme">Category</span></h2>							
				</div>
				<div class="row category-cards" >
					<div class="col-md-1 ">	</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/History">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/1.jpg" alt="product image"></a>
							<p>History</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Business">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/2.jpg" alt="product image"></a>
							<p>Business & Economics</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Biography">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/3.jpg" alt="product image"></a>
							<p>Biographies, Diaries</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Educational">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/4.jpg" alt="product image"></a>
							<p>Textbooks & Study Guides</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Society">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/5.jpg" alt="product image"></a>
							<p>Society & Social Sciences</p>
						</a>						
					</div>
				</div>
				<div class="row category-cards" >
					<div class="col-md-1 ">	</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Health">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/6.jpg" alt="product image"></a>
							<p>Health, Family</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Sciences">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/7.jpg" alt="product image"></a>
							<p>Sciences, Technology & Medicine</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Sports">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/8.jpg" alt="product image"></a>
							<p>Sports</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Children">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/9.jpg" alt="product image"></a>
							<p>Children's & Young Adult</p>
						</a>						
					</div>
					<div class="col-md-2 ">
						<a href="<?php echo base_url()?>View/Category/Thriller">
							<img src="<?php echo base_url()?>assets/images/Category/thumb/10.jpg" alt="product image"></a>
							<p>Crime, Thriller & Mystery</p>
						</a>						
					</div>
					
				</div>				
			</div>
		</section>

		
	
	
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
		                                <img alt="big images" src="<?php echo base_url()?>assets/images/product/big-img/1.jpg">
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
		                                    <a href="#">10 customer reviews</a>
		                                </div>
		                            </div>
		                            <div class="price-box-3">
		                                <div class="s-price-box">
		                                    <span class="new-price"> ₹17.20</span>
		                                    <span class="old-price"> ₹45.00</span>
		                                </div>
		                            </div>
		                            <div class="quick-desc">
		                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
		                            </div>
		                            <!--<div class="select__color">
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
		                            </div>-->
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
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
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
	<script src="<?php echo base_url()?>assets/js/rating.js"></script>
