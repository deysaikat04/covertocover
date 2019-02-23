<!doctype html> 
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cover To Cover | Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo/logo.png">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/images/logo/logo.png">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

    <!-- Cusom css -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
    

    <!-- Modernizer js -->
    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script>
			function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
							x.type = "text";
					} else {
							x.type = "password";
					}
			}
	</script>
    
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <header id="wn__header" class="header__area header__absolute sticky__header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <div class="logo">
                            <a href="<?php echo base_url()?>">
                                <img src="<?php echo base_url()?>assets/images/logo/logo.png" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu__nav">
                            <ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item"><a href="<?php echo base_url()?>">Home</a>  
                                </li>
                                
                                <li class="drop"><a href="<?php echo base_url()?>View/bookGrid">Books</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                            <li><a href="<?php echo base_url()?>View/Category/Biography">Biography </a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Science Fiction">Science Fiction </a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Health">Health </a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/History">History </a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li><a href="<?php echo base_url()?>View/Category/Adventure">Adventure</a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Thriller">Thriller</a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Comics">Comics</a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Literature">Literature</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li><a href="<?php echo base_url()?>View/Category/Science">Science </a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Society">Society</a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Sports">Sports</a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Educational">Educational</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li><a href="<?php echo base_url()?>View/Category/Business">Business</a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Exam">Exam</a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Cookbooks">Cookbooks </a></li>
                                            <li><a href="<?php echo base_url()?>View/Category/Children">Children</a></li>
                                        </ul>
                                    </div>
                                </li>
                                       
                                <li><a href="<?php echo base_url()?>Contact">Contact</a></li>
                                <li><a href="<?php echo base_url()?>FAQ">FAQs</a>  </li>
																<?php if($this->session->has_userdata('name')){ ?>
                                	<li class="drop"><a href="">Welcome </a>
                                    <div class="megamenu mega02">
                                        <ul class="item item03">
                                            <li class="title"><?php echo $this->session->userdata('name');?></li>
                                            <li><a href="#">Account </a></li>
                                            <li><a href="<?php echo base_url()?>View/Logout">Log Out</a></li>
                                        </ul>
                                       
                                    </div>
                                </li>
                                 <?php } else { ?>
                                 <li class="drop"><a data-toggle="modal" href="#myModal" id="link-signin">Login & Signup</a>
                                 <?php } ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="shop_search"><a class="search__active" href="#"></a></li>
                            <li class="wishlist"><a href="#"></a></li>
                            <?php $salt="BOOK_COVER";
														$encrypted_id = base64_encode($this->session->userdata('id') . $salt);?>
                            <li class="shopcart"><a class="" href="<?php echo base_url()?>View/Cart/<?php echo $encrypted_id  ;?>"><span class="product_qun"><?php echo $this->session->userdata('count'); ?></span></a>
                               
                                <!-- End Shopping Cart -->
                            </li>
                            
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                                <div class="searchbar__content setting__block">
                                    <div class="content-inner">                                        
                                        <div class="switcher-currency">                                           
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <div class="setting__menu">
                                                        <span><a href="http://seller.covertocover.cf/">Sell on Cover To Cover</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Start Mobile Menu -->
                <div class="row d-none">
                    <div class="col-lg-12 d-none">
                        <nav class="mobilemenu__nav">
                            <ul class="meninmenu">
                                <li><a href="<?php echo base_url()?>">Home</a>
                                   
                                </li>
                                <li><a href="<?php echo base_url()?>View/bookGrid">Books</a>
                                                                      
                                </li>
                                <li><a href="<?php echo base_url()?>FAQ">FAQs</a>
                                   
                                </li>
                                <li><a data-toggle="modal" href="#myModal" id="link-signin">Login & Signup</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none">
                </div>
                <!-- Mobile Menu -->    
            </div>   

        </header>
        <!-- //Header -->
 

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          
            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel panel-login">
                        <div  class="panel-heading">
                            <div class="row" id="panel-tabs">
                                <div class="col-md-6 login-tab ">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-md-6 register-tab ">
                                    <a href="#" id="register-form-link">Register</a> 
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="login-form" action="<?php echo base_url()?>View/LoginCustomer" method="post" role="form" style="display: block;">
                                        <div class="col-12">
                                            <input class="effect-2" type="text" placeholder="Email" name="mail" required autofocus>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="col-12">
                                            <input class="effect-2" type="password" id="myInput" placeholder="Password" name="pass1" required >
                                            <span class="focus-border"></span>
                                            
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" onclick="myFunction()">Show Password
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="#" tabindex="5" class="forgot-password" id="forgot-pass-link">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="register-form" action="<?php echo base_url()?>View/RegisterCustomer" method="post" role="form" style="display: none;">
                                        <div class="col-12">
                                            <input class="effect-2" type="text" placeholder="Name" name="name" required autofocus >
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="col-12">
                                            <input class="effect-2" type="text" placeholder="Mobile" name="mob" required autofocus >
                                            <span class="focus-border"></span>
                                        </div>
                                         <div class="col-12">
                                            <input class="effect-2" type="text" placeholder="Email"  name="mail" required >
                                            <span class="focus-border"></span>
                                        </div>
                                         <div class="col-12">
                                            <input class="effect-2" type="password" placeholder="Password" name="pass1" required >
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="col-12">
                                            <input class="effect-2" type="password" placeholder="Confirm Password" name="pass2" required >
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <form id="forgot-pass" action="" method="post" role="form" style="display: block;">
                                        <div class="col-12">
                                            <span class="forget-pass-span">Please give us your Mail id to reset your password.</span>
                                        </div>
                                        <div class="col-12">
                                            <input class="effect-2" type="text" placeholder="Email" required autofocus>
                                            <span class="focus-border"></span>
                                        </div>                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit2" tabindex="4" class="form-control btn btn-login" value="Send">
                                                </div>
                                            </div>
                                        </div>                                        
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
      </div>
      
    </div>
  </div>
  
 <!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" method="post" action="<?php echo base_url()?>View/Search">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here..." name="query"/>
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