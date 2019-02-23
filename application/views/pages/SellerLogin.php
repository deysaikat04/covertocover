<div class="container">
	<section id="content">
		<form action="">
			<div class="sell-logo">
				<a href="<?php echo base_url()?>">
			        <img src="<?php echo base_url()?>assets/images/logo/logo.png" alt="logo images">
			    </a>
			</div>
			<h3>Login to your account</h3>
			<div>
				<input type="text" placeholder="Mail" required="" id="mail" autofocus required />
				<p id="mailErr"></p>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" required />
			</div>
			<div>
				<input type="submit" value="Log in" onclick="return (validate());" />
				<a href="<?php echo base_url()?>SellerForgetPass">Lost your password?</a>
			</div>
		</form><!-- form -->
		<div class="register-button">
			<span>New to Cover To Cover? <a href="<?php echo base_url()?>Register">Register</a></span>
		</div><!-- button -->


	</section><!-- content -->
</div><!-- container -->

<div class="seller-footer">
    © <script>document.write((new Date()).getFullYear());</script> Cover To Cover. All right reserved. <a href="#"></a>
</div>