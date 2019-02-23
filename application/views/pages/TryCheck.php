    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
      <form id="search_mini_form" class="minisearch" action="#">
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
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                          <h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Checkout Area -->
        <section class="wn__checkout__area section-padding--lg bg__white">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="wn_checkout_wrap">
                  <div class="checkout_info">
                    <span>Returning customer ?</span>
                    <a class="showlogin" href="#">Click here to login</a>
                  </div>
                  <div class="checkout_login">
                    <form class="wn__checkout__form" action="#">
                      <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>

                      <div class="input__box">
                        <label>Username or email <span>*</span></label>
                        <input type="text">
                      </div>

                      <div class="input__box">
                        <label>password <span>*</span></label>
                        <input type="password">
                      </div>
                      <div class="form__btn">
                        <button>Login</button>
                        <label class="label-for-checkbox">
                          <input id="rememberme" name="rememberme" value="forever" type="checkbox">
                          <span>Remember me</span>
                        </label>
                        <a href="#">Lost your password?</a>
                      </div>
                    </form>
                  </div>
                  
                  <div class="checkout_info">
                    <span>Have a coupon? </span>
                    <a class="showcoupon" href="#">Click here to enter your code</a>
                  </div>
                  <div class="checkout_coupon">
                    <form action="#">
                      <div class="form__coupon">
                        <input type="text" placeholder="Coupon code">
                        <button>Apply coupon</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-12">
              
               <form class="" method="post" action="<?php echo base_url()?>View/PlaceOrder">
                <div class="customer_details">
                  <h3>Billing details</h3>
                  <div class="customar__field">
                    <div class="input_box">
                      <label>Name <span>*</span></label>
                      <input type="text" value="<?php echo $customer[0]['name'];?>" readonly />
                    </div>
                    <div class="input_box">
                      <label>Address <span>*</span></label>
                      <input type="text" placeholder="Street address" value="<?php echo $customer[0]['address'];?>" name="address" required />
                    </div>
                    
                    <div class="margin_between">
	        						<div class="input_box space_between">
	        							<label>City <span>*</span></label>
	        							<input type="text" name="city" value="<?php echo $customer[0]['city'];?>" required />
	        						</div>
	        						<div class="input_box space_between">
	        							<label>State <span>*</span></label>
	        							<input type="text" name="state" value="<?php echo $customer[0]['state'];?>" required />
	        						</div>
        						</div>
                   
                     <div class="margin_between">
	        						<div class="input_box space_between">
	        							<label>Zip <span>*</span></label>
	        							<input type="text" name="zip" value="<?php echo $customer[0]['zip'];?>" required />
	        						</div>
	        						<div class="input_box space_between">
	        							 <label>Country<span>*</span></label>
                      	<select name="country" class="select__option">
                      		<option value="<?php echo $customer[0]['country'];?>"><?php echo $customer[0]['country'];?></option>
                      		<option value="AFG">Afghanistan</option>
													<option value="ALA">Åland Islands</option>
													<option value="ALB">Albania</option>
													<option value="DZA">Algeria</option>
													<option value="ASM">American Samoa</option>
													<option value="AND">Andorra</option>
													<option value="AGO">Angola</option>
													<option value="AIA">Anguilla</option>
													<option value="ATA">Antarctica</option>
													<option value="ATG">Antigua and Barbuda</option>
													<option value="ARG">Argentina</option>
													<option value="ARM">Armenia</option>
													<option value="ABW">Aruba</option>
													<option value="AUS">Australia</option>
													<option value="AUT">Austria</option>
													<option value="AZE">Azerbaijan</option>
													<option value="BHS">Bahamas</option>
													<option value="BHR">Bahrain</option>
													<option value="BGD">Bangladesh</option>
													<option value="BRB">Barbados</option>
													<option value="BLR">Belarus</option>
													<option value="BEL">Belgium</option>
													<option value="BLZ">Belize</option>
													<option value="BEN">Benin</option>
													<option value="BMU">Bermuda</option>
													<option value="BTN">Bhutan</option>
													<option value="BOL">Bolivia, Plurinational State of</option>
													<option value="BES">Bonaire, Sint Eustatius and Saba</option>
													<option value="BIH">Bosnia and Herzegovina</option>
													<option value="BWA">Botswana</option>
													<option value="BVT">Bouvet Island</option>
													<option value="BRA">Brazil</option>
													<option value="IOT">British Indian Ocean Territory</option>
													<option value="BRN">Brunei Darussalam</option>
													<option value="BGR">Bulgaria</option>
													<option value="BFA">Burkina Faso</option>
													<option value="BDI">Burundi</option>
													<option value="KHM">Cambodia</option>
													<option value="CMR">Cameroon</option>
													<option value="CAN">Canada</option>
													<option value="CPV">Cape Verde</option>
													<option value="CYM">Cayman Islands</option>
													<option value="CAF">Central African Republic</option>
													<option value="TCD">Chad</option>
													<option value="CHL">Chile</option>
													<option value="CHN">China</option>
													<option value="CXR">Christmas Island</option>
													<option value="CCK">Cocos (Keeling) Islands</option>
													<option value="COL">Colombia</option>
													<option value="COM">Comoros</option>
													<option value="COG">Congo</option>
													<option value="COD">Congo, the Democratic Republic of the</option>
													<option value="COK">Cook Islands</option>
													<option value="CRI">Costa Rica</option>
													<option value="CIV">Côte d'Ivoire</option>
													<option value="HRV">Croatia</option>
													<option value="CUB">Cuba</option>
													<option value="CUW">Curaçao</option>
													<option value="CYP">Cyprus</option>
													<option value="CZE">Czech Republic</option>
													<option value="DNK">Denmark</option>
													<option value="DJI">Djibouti</option>
													<option value="DMA">Dominica</option>
													<option value="DOM">Dominican Republic</option>
													<option value="ECU">Ecuador</option>
													<option value="EGY">Egypt</option>
													<option value="SLV">El Salvador</option>
													<option value="GNQ">Equatorial Guinea</option>
													<option value="ERI">Eritrea</option>
													<option value="EST">Estonia</option>
													<option value="ETH">Ethiopia</option>
													<option value="FLK">Falkland Islands (Malvinas)</option>
													<option value="FRO">Faroe Islands</option>
													<option value="FJI">Fiji</option>
													<option value="FIN">Finland</option>
													<option value="FRA">France</option>
													<option value="GUF">French Guiana</option>
													<option value="PYF">French Polynesia</option>
													<option value="ATF">French Southern Territories</option>
													<option value="GAB">Gabon</option>
													<option value="GMB">Gambia</option>
													<option value="GEO">Georgia</option>
													<option value="DEU">Germany</option>
													<option value="GHA">Ghana</option>
													<option value="GIB">Gibraltar</option>
													<option value="GRC">Greece</option>
													<option value="GRL">Greenland</option>
													<option value="GRD">Grenada</option>
													<option value="GLP">Guadeloupe</option>
													<option value="GUM">Guam</option>
													<option value="GTM">Guatemala</option>
													<option value="GGY">Guernsey</option>
													<option value="GIN">Guinea</option>
													<option value="GNB">Guinea-Bissau</option>
													<option value="GUY">Guyana</option>
													<option value="HTI">Haiti</option>
													<option value="HMD">Heard Island and McDonald Islands</option>
													<option value="VAT">Holy See (Vatican City State)</option>
													<option value="HND">Honduras</option>
													<option value="HKG">Hong Kong</option>
													<option value="HUN">Hungary</option>
													<option value="ISL">Iceland</option>
													<option value="IND">India</option>
													<option value="IDN">Indonesia</option>
													<option value="IRN">Iran, Islamic Republic of</option>
													<option value="IRQ">Iraq</option>
													<option value="IRL">Ireland</option>
													<option value="IMN">Isle of Man</option>
													<option value="ISR">Israel</option>
													<option value="ITA">Italy</option>
													<option value="JAM">Jamaica</option>
													<option value="JPN">Japan</option>
													<option value="JEY">Jersey</option>
													<option value="JOR">Jordan</option>
													<option value="KAZ">Kazakhstan</option>
													<option value="KEN">Kenya</option>
													<option value="KIR">Kiribati</option>
													<option value="PRK">Korea, Democratic People's Republic of</option>
													<option value="KOR">Korea, Republic of</option>
													<option value="KWT">Kuwait</option>
													<option value="KGZ">Kyrgyzstan</option>
													<option value="LAO">Lao People's Democratic Republic</option>
													<option value="LVA">Latvia</option>
													<option value="LBN">Lebanon</option>
													<option value="LSO">Lesotho</option>
													<option value="LBR">Liberia</option>
													<option value="LBY">Libya</option>
													<option value="LIE">Liechtenstein</option>
													<option value="LTU">Lithuania</option>
													<option value="LUX">Luxembourg</option>
													<option value="MAC">Macao</option>
													<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
													<option value="MDG">Madagascar</option>
													<option value="MWI">Malawi</option>
													<option value="MYS">Malaysia</option>
													<option value="MDV">Maldives</option>
													<option value="MLI">Mali</option>
													<option value="MLT">Malta</option>
													<option value="MHL">Marshall Islands</option>
													<option value="MTQ">Martinique</option>
													<option value="MRT">Mauritania</option>
													<option value="MUS">Mauritius</option>
													<option value="MYT">Mayotte</option>
													<option value="MEX">Mexico</option>
													<option value="FSM">Micronesia, Federated States of</option>
													<option value="MDA">Moldova, Republic of</option>
													<option value="MCO">Monaco</option>
													<option value="MNG">Mongolia</option>
													<option value="MNE">Montenegro</option>
													<option value="MSR">Montserrat</option>
													<option value="MAR">Morocco</option>
													<option value="MOZ">Mozambique</option>
													<option value="MMR">Myanmar</option>
													<option value="NAM">Namibia</option>
													<option value="NRU">Nauru</option>
													<option value="NPL">Nepal</option>
													<option value="NLD">Netherlands</option>
													<option value="NCL">New Caledonia</option>
													<option value="NZL">New Zealand</option>
													<option value="NIC">Nicaragua</option>
													<option value="NER">Niger</option>
													<option value="NGA">Nigeria</option>
													<option value="NIU">Niue</option>
													<option value="NFK">Norfolk Island</option>
													<option value="MNP">Northern Mariana Islands</option>
													<option value="NOR">Norway</option>
													<option value="OMN">Oman</option>
													<option value="PAK">Pakistan</option>
													<option value="PLW">Palau</option>
													<option value="PSE">Palestinian Territory, Occupied</option>
													<option value="PAN">Panama</option>
													<option value="PNG">Papua New Guinea</option>
													<option value="PRY">Paraguay</option>
													<option value="PER">Peru</option>
													<option value="PHL">Philippines</option>
													<option value="PCN">Pitcairn</option>
													<option value="POL">Poland</option>
													<option value="PRT">Portugal</option>
													<option value="PRI">Puerto Rico</option>
													<option value="QAT">Qatar</option>
													<option value="REU">Réunion</option>
													<option value="ROU">Romania</option>
													<option value="RUS">Russian Federation</option>
													<option value="RWA">Rwanda</option>
													<option value="BLM">Saint Barthélemy</option>
													<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
													<option value="KNA">Saint Kitts and Nevis</option>
													<option value="LCA">Saint Lucia</option>
													<option value="MAF">Saint Martin (French part)</option>
													<option value="SPM">Saint Pierre and Miquelon</option>
													<option value="VCT">Saint Vincent and the Grenadines</option>
													<option value="WSM">Samoa</option>
													<option value="SMR">San Marino</option>
													<option value="STP">Sao Tome and Principe</option>
													<option value="SAU">Saudi Arabia</option>
													<option value="SEN">Senegal</option>
													<option value="SRB">Serbia</option>
													<option value="SYC">Seychelles</option>
													<option value="SLE">Sierra Leone</option>
													<option value="SGP">Singapore</option>
													<option value="SXM">Sint Maarten (Dutch part)</option>
													<option value="SVK">Slovakia</option>
													<option value="SVN">Slovenia</option>
													<option value="SLB">Solomon Islands</option>
													<option value="SOM">Somalia</option>
													<option value="ZAF">South Africa</option>
													<option value="SGS">South Georgia and the South Sandwich Islands</option>
													<option value="SSD">South Sudan</option>
													<option value="ESP">Spain</option>
													<option value="LKA">Sri Lanka</option>
													<option value="SDN">Sudan</option>
													<option value="SUR">Suriname</option>
													<option value="SJM">Svalbard and Jan Mayen</option>
													<option value="SWZ">Swaziland</option>
													<option value="SWE">Sweden</option>
													<option value="CHE">Switzerland</option>
													<option value="SYR">Syrian Arab Republic</option>
													<option value="TWN">Taiwan, Province of China</option>
													<option value="TJK">Tajikistan</option>
													<option value="TZA">Tanzania, United Republic of</option>
													<option value="THA">Thailand</option>
													<option value="TLS">Timor-Leste</option>
													<option value="TGO">Togo</option>
													<option value="TKL">Tokelau</option>
													<option value="TON">Tonga</option>
													<option value="TTO">Trinidad and Tobago</option>
													<option value="TUN">Tunisia</option>
													<option value="TUR">Turkey</option>
													<option value="TKM">Turkmenistan</option>
													<option value="TCA">Turks and Caicos Islands</option>
													<option value="TUV">Tuvalu</option>
													<option value="UGA">Uganda</option>
													<option value="UKR">Ukraine</option>
													<option value="ARE">United Arab Emirates</option>
													<option value="GBR">United Kingdom</option>
													<option value="USA">United States</option>
													<option value="UMI">United States Minor Outlying Islands</option>
													<option value="URY">Uruguay</option>
													<option value="UZB">Uzbekistan</option>
													<option value="VUT">Vanuatu</option>
													<option value="VEN">Venezuela, Bolivarian Republic of</option>
													<option value="VNM">Viet Nam</option>
													<option value="VGB">Virgin Islands, British</option>
													<option value="VIR">Virgin Islands, U.S.</option>
													<option value="WLF">Wallis and Futuna</option>
													<option value="ESH">Western Sahara</option>
													<option value="YEM">Yemen</option>
													<option value="ZMB">Zambia</option>
													<option value="ZWE">Zimbabwe</option>
                      	</select>
	        						</div>
        						</div>   
										<div class="margin_between">
											<div class="input_box space_between">
												<label>Phone <span>*</span></label>
												<input type="text" value="+91 <?php echo $customer[0]['phone'];?>" readonly />
											</div>

											<div class="input_box space_between">
												<label>Email address <span>*</span></label>
												<input type="email" value="<?php echo $customer[0]['email'];?>" readonly />
											</div>
										</div>
                  </div>                  
                </div>
                <div class="checkout__actions">
									<input type="hidden" name="qnty" id="qnty" />                       				
									<input type="hidden" name="bprice" id="bprice" />                       				
									<input type="hidden" id="cid" name="customerid" value="<?php echo $this->session->userdata('id');?>" />
									<button class="tocart" type="submit" onclick="getQuantity()" >Confirm</button>
								</div>
							</form>
              </div>
              <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
              
                 <div class="wn__order__box">
                  <h3 class="onder__title">Your order</h3>
                  <ul class="order__total">
                    <li>Product</li>
                    <li>Total</li>
                  </ul>
                  
                <?php if ($bookCart) {
	 								foreach ($bookCart as $row) { ?>
                  
                   <ul class="order_product">
                    <li><?php echo $row['bookname'];?>   × <?php echo $row['qnty'];?><span>₹ <?php echo $row['totalprice'];?></span></li>                    
                  	</ul>
                   <?php }
								} ?>				
                  <ul class="shipping__method">
                    <li>Cart Subtotal <span>₹ <?php echo $grand;?></span></li>
                    <li>Shipping 
                      <ul>
                        <li>                          
                          <label>₹ 0</label>
                        </li>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="total__amount">
                    <li>Order Total <span>₹ <?php echo $grand;?></span></li>
                  </ul>
                </div>
              																			 
																							 
              <div id="accordion" class="checkout_accordion mt--30" role="tablist">
                <div class="payment">
                    <div class="che__header" role="tab" id="headingOne">
                        <a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>Direct Bank Transfer</span>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="payment-body">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</div>
                    </div>
                </div>
                <div class="payment">
                    <div class="che__header" role="tab" id="headingTwo">
                        <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span>Cheque Payment</span>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                    </div>
                </div>
                <div class="payment">
                    <div class="che__header" role="tab" id="headingThree">
                        <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span>Cash on Delivery</span>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="payment-body">Pay with cash upon delivery.</div>
                    </div>
                </div>
                <div class="payment">
                    <div class="che__header" role="tab" id="headingFour">
                        <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <span>PayPal <img src="<?php echo base_url()?>assets/images/icons/payment.png" alt="payment images"> </span>
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="payment-body">Pay with cash upon delivery.</div>
                    </div>
                </div>
              </div>

              </div>
            </div>
          </div>
        </section>
        <!-- End Checkout Area -->
    <!-- Footer Area -->
    <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
      <div class="footer-static-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer__widget footer__menu">
                <div class="ft__logo">
                  <a href="index.html">
                    <img src="<?php echo base_url()?>assets/images/logo/3.png" alt="logo">
                  </a>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
                </div>
                <div class="footer__content">
                  <ul class="social__net social__net--2 d-flex justify-content-center">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-google"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                  </ul>
                  <ul class="mainmenu d-flex justify-content-center">
                    <li><a href="index.html">Trending</a></li>
                    <li><a href="index.html">Best Seller</a></li>
                    <li><a href="index.html">All Product</a></li>
                    <li><a href="index.html">Wishlist</a></li>
                    <li><a href="index.html">Blog</a></li>
                    <li><a href="index.html">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright__wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="copyright">
                <div class="copy__right__inner text-left">
                  <p>Copyright <i class="fa fa-copyright"></i> <a href="#">Boighor.</a> All Rights Reserved</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="payment text-right">
                <img src="<?php echo base_url()?>assets/images/icons/payment.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- //Footer Area -->

  </div>
  <!-- //Main wrapper -->

  <!-- JS Files -->
  <script src="<?php echo base_url()?>assets/js/vendor/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
  <script src="<?php echo base_url()?>assets/js/active.js"></script>
	<script>
		function getQuantity(){
				var qnty = new Array();
				var price = new Array();
				
				<?php foreach($qnty as $key => $val){ ?>
						qnty.push('<?php echo $val; ?>');
				<?php } ?>
				document.getElementById("qnty").value = qnty;
				
				<?php foreach($bprice as $key => $val){ ?>
						price.push('<?php echo $val; ?>');
				<?php } ?>
				document.getElementById("bprice").value = price;
				
				//console.log(price);
			}
	</script>