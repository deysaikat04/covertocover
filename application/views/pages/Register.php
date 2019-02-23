<div class="container">
	<div class="errorMsg">
            <?php if ($this->session->flashdata('regSellerSucc')) { ?>
                <div class="col-md-12">
                    <div class="alert alert-success no-border">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span
                                    class="sr-only">Close</span>
                        </button>
                        <div class="alert_wrapper"><span
                                    class="text-semibold">Success!&nbsp;&nbsp;</span> <?php echo $this->session->flashdata('regSellerSucc'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('regSellerErr')) { ?>
                <div class="col-md-12">
                    <div class="alert alert-danger no-border">
                        <button type="button" class="close" data-dismiss="alert"><span></span><span
                                    class="sr-only"></span>
                        </button>
                        <div class="alert_wrapper"><span
                                    class="text-semibold">Error!&nbsp</span> <?php echo $this->session->flashdata('regSellerErr'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
	<section id="content">
		
		<form action="<?php echo base_url()?>View/RegisterSeller" method="post">
			<div class="sell-logo">
				<a href="<?php echo base_url()?>">
			        <img src="<?php echo base_url()?>assets/images/logo/logo.png" alt="logo images">
			    </a>
			</div>
			<h3>Create A Seller's Account</h3>
			<div>
				<input type="text" placeholder="Your name" required="" id="name" name="name" autofocus/>
				<p id="nameErr"></p>
			</div>
			<div>
				<input type="text" placeholder="Mobile number" required="" name="mob" id="mob"  />
				<p id="mobErr"></p>
				<!--<span class="unit">+91 </span>-->
			</div>
			<div>
				<input type="text" placeholder="Email" required id="mail" name="mail" />
				<p id="mailErr"></p>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="pass" />
				<p id="passErr"></p>
			</div>
			<div>
				<span class="header-text">By continuing I agree to the Terms & Conditions</span>
			</div>	
			<div>
				<input type="hidden" name="role" value="seller">
				<input type="submit" value="Continue" onclick="return (validate());" />
			</div>			
		</form><!-- form -->
		<div class="register-button">
			<span>Already have an account? <a href="<?php echo base_url()?>SellerLogin">Sign in</a></span>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->  
  
 <div class="seller-footer">
    © <script>document.write((new Date()).getFullYear());</script> Cover To Cover. All right reserved. <a href="#"></a>
</div>

<script src="<?php echo base_url()?>assets/js/vendor/jquery-3.2.1.min.js">
	
</script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

