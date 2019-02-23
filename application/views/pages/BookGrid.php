		
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area bg-image--6">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
										<div class="bradcaump__inner text-center">
											<h2 class="bradcaump-title">Shop Grid</h2>
												<nav class="bradcaump-content">
													<a class="breadcrumb_item" href="index.html">Home</a>
													<span class="brd-separetor">/</span>
													<span class="breadcrumb_item active">Shop Grid</span>
												</nav>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- End Bradcaump area -->

		<!-- Start Shop Page -->
		<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
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
							<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
						
							</aside>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-12 order-1 order-lg-2">
						<div class="row">
							<div class="col-lg-12">
						<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
							<div class="shop__list nav justify-content-center" role="tablist">
															<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
															<a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
													</div>
													<p>Showing 1–<?php echo count($bookDetails); ?> results</p>
													<div class="orderby__wrapper">
														<span>Sort By</span>
														<select class="shot__byselect">
															<option>Default sorting</option>
															
														</select>
													</div>
												</div>
							</div>
						</div>
						<div class="tab__container">
						
						<!-- nav-grid -->
							<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
								<div class="row">
									
									<?php if ($bookDetails) {
                    foreach ($bookDetails as $row) { 
											$salt="BOOK_COVER"; 
											$encrypted_id = base64_encode($row['bookid'] . $salt);?>
									<!-- Start Single Product -->
									<div class="col-lg-3 col-md-2 col-sm-3 col-12">
										<div class="product">
											<div class="product__thumb">
											
												<a class="first__img" href="<?php echo base_url()?>View/BookDetails/<?php echo $encrypted_id;?>"><img src="<?php echo $admin.$row['path'];?>" alt="product image"></a>
												<!-- <a class="second__img animation1" href="single-product.html"><img src="<?php //echo base_url()?>assets/images/product/2.jpg" alt="product image"></a> -->
												
												
												<div class="action">
													<div class="actions_inner">
														<ul class="add_to_links">
															<li><a class="cart" href="cart.html"></a></li>
															<li><a class="wishlist" href="wishlist.html"></a></li>
															<li><a class="compare" href="compare.html"></a></li>
															<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="product__content2">
												<h4><a href="<?php echo base_url()?>View/BookDetails/<?php echo $encrypted_id;?>"><?php echo $row['bookname'];?></a></h4>											
												
												<div class="product__content2">
													
													<ul class="price d-flex">
														<li>₹<?php echo $row['price'];?></li>
														<li class="rate"><?php echo $row['rating'];?>
														<img src="<?php echo base_url()?>assets/images/icons/star.png"/> </li>
													</ul>							

												</div>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									
									<?php } 
                        }
                    ?>

									
								</div>
								<!--<ul class="wn__pagination">
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
								</ul>-->
							</div>
							<!-- nav-grid ends -->
							
						
	        		</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Shop Page -->
		
	

		</div>
		<!-- //Main wrapper -->

		<!-- JS Files -->
		<script src="<?php echo base_url()?>assets/js/vendor/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/plugins.js"></script>
		<script src="<?php echo base_url()?>assets/js/active.js"></script>
			<script src="<?php echo base_url()?>assets/js/index.js"></script>
