<!--
Author: Designmaz
Author URL: https://www.designmaz.net
License URL: https://www.designmaz.net/licence/
-->
<!DOCTYPE html>
<html>
<head>
<title>Home | Travelad - Free HTML5 CSS3 Travel Hotel Template | Designmaz</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="<?php echo base_url();?>asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url();?>asset/css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>asset/css/JFFormStyle-1.css" />
<!-- js -->
<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="<?php echo base_url();?>asset/js/menu_jquery.js"></script>
<!--//pop-up-->	
<!--Google Analytics Designmaz-->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script></head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="<?php echo base_url();?>Welcome"><span>Travelad</span></a></h1>
				</div>
				<!--navbar-header-->
				<div class="header-dropdown">
					<div class="emergency-grid">
						<ul>
							<li>Toll Free : </li>
							<li class="call">+1 234 567 8901</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="<?php echo base_url();?>asset/images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li class="active"><a href="#">Flights</a></li>
						<li><a href="#">Abouts</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Deals</a></li>
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							<div id="loginBox">                
								<form id="loginForm" method="post" action=<?php echo base_url('login/aksi_login') ?>>
									<div class="login-grids">
										<div class="login-grid-left">
											<fieldset id="body">
												<fieldset>
													<label for="email">Username</label>
													<input type="text" name="username">
												</fieldset>
												<fieldset>
													<label for="password">Password</label>
													<input type="password" name="password" id="password">
												</fieldset>
												<input type="submit" id="login" value="Sign in">
											</fieldset>
											<span><a href="#">Forgot your password?</a></span>
											<div class="or-grid">
												<p>OR</p>
											</div>
											<div class="social-sits">
												<div class="facebook-button">
													<a href="#">Connect with Facebook</a>
												</div>
												<div class="chrome-button">
													<a href="#">Connect with Google</a>
												</div>
												<div class="button-bottom">
													<p>New account? <a href="<?php echo base_url()?>signup">Signup</a></p>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="<?php echo base_url();?>asset/images/1.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="<?php echo base_url();?>asset/images/2.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="<?php echo base_url();?>asset/images/3.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="<?php echo base_url();?>asset/images/4.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="<?php echo base_url();?>asset/images/2.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info">
						<h2>Book Domestic & International Flight Tickets</h2>
					</div>
					 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Return</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>One way</span></li>
							  <div class="clearfix"></div>
						  </ul>		
						  <!---->		  	 
						 <div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->
											
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti">
																		 <h5>Flying from</h5>
																		 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<input type="text" placeholder="Type Departure City" class="typeahead1 input-md form-control tt-input" required="">
																			 </form>
																		 </div>					
																	 </li>
																	 <li  class="span1_of_1 left desti">
																		 <h5>Flying to</h5>
																		 <div class="book_date">
																		 <form>
																			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			<input type="text" placeholder="Type Destination City" class="typeahead1 input-md form-control tt-input" required="">
																		 </form>
																		 </div>		
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li  class="span1_of_1">
																		 <h5>Departure</h5>
																		 <div class="book_date">
																		 <form>
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																		 </form>
																		 </div>		
																	 </li>
																	 <li  class="span1_of_1 left">
																		 <h5>Return</h5>
																		 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																				<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																			</form>
																		 </div>					
																	 </li>
																	 <li class="span1_of_1 left adult">
																		 <h5>Adults (18+)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 left children">
																		 <h5>Children (0-17)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 economy">
																		 <h5>Class</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">Economy</option>
																					<option value="null">Business</option>     
																			  </select>
																		 </div>	
																	</li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li class="span1_of_3">
																			<div class="date_btn">
																				<form>
																					<input type="submit" value="Search" />
																				</form>
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
							</div>		
							<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery-ui.css" />
											<script src="<?php echo base_url();?>asset/js/jquery-ui.js"></script>
													  <script>
															  $(function() {
																$( "#datepicker,#datepicker1" ).datepicker();
															  });
													  </script>

											<!---/End-date-piker---->
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti">
																		 <h5>Flying from</h5>
																		 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<input type="text" placeholder="Type Departure City" class="typeahead1 input-md form-control tt-input" required="">
																			 </form>
																		 </div>					
																	 </li>
																	 <li  class="span1_of_1 left desti">
																		 <h5>Flying to</h5>
																		 <div class="book_date">
																		 <form>
																			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			<input type="text" placeholder="Type Destination City" class="typeahead1 input-md form-control tt-input" required="">
																		 </form>
																		 </div>		
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li  class="span1_of_1">
																		 <h5>Departure</h5>
																		 <div class="book_date">
																		 <form>
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																		</form>
																		 </div>		
																	 </li>
																	 <li class="span1_of_1 left">
																		 <h5>Adults (18+)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 left tab-children">
																		 <h5>Children (0-17)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 economy">
																		 <h5>Class</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">Economy</option>
																					<option value="null">Business</option>     
																			  </select>
																		 </div>	
																	</li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li class="span1_of_3">
																			<div class="date_btn">
																				<form>
																					<input type="submit" value="Search" />
																				</form>
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>	
								</div>
							</div> 			        					            	      
						  </div>	
					  </div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
		<div class="marquee">Ayo Bergabung Bersama Kami.<a href=<?php echo base_url("signup");?>>Here</a></div>
		<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.marquee.min.js"></script>
        <script>
		  $('.marquee').marquee({ pauseOnHover: true });
		  //@ sourceURL=pen.js
		</script>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Today's Top Deals</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="destinations">
						 <ul>
							<li class="button"><a href="#">Goa Popular Hotels</a>
								<li class="dropdown active">
									<a href="#">
										<div class="destinations-grid">
											<img src="<?php echo base_url();?>asset/images/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Goa</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Bangalore Popular Hotels</a>
								<li class="dropdown">
									<a href="#">
										<div class="destinations-grid">
											<img src="<?php echo base_url();?>asset/images/a4.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangalore</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>							
							<li class="button"><a href="#">Bangkok Popular Hotels</a>
								 <li class="dropdown">
									<a href="#">
										<div class="destinations-grid">
											<img src="<?php echo base_url();?>asset/images/a3.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangkok</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$240</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Malaysia Popular Hotels</a>
								 <li class="dropdown">
									<a href="#">
										<div class="destinations-grid">
											<img src="<?php echo base_url();?>asset/images/a1.jpg" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Malaysia</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$320</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							 </li>							 
						 </ul>
					</div>
					<div class="choose">
						<div class="choose-info">
							<h4>Why Choose Us</h4>
						</div>
						<div class="choose-grids">
							<div class="choose-grids-info">
								<div class="choose-left">
									<h5>09</h5>
									<span>Million</span>
								</div>
								<div class="choose-right">
									<a href="#">Aliquam faucibus vehicula vulputate</a>
									<p>Maecenas euismod tortor a tristique convallis diam eros aliquam.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								</div>
								<div class="choose-right">
									<a href="#">Sed tincidunt consectetur augue</a>
									<p>Nulla bibendum libero in nunc eleifend tincidunt. Aliquam quis molestie lectus</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<h6>$</h6>
								</div>
								<div class="choose-right">
									<a href="#">Nullam et arcu interdum, accumsan justo</a>
									<p>Maecenas dapibus eu purus vel imperdiet. Maecenas cursus, arcu sed tempus </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="#">
							<img src="<?php echo base_url();?>asset/images/a2.jpg" alt="" />
							<div class="destinations-grid-info tours">
								<h5>Book your next Malaysia holiday!</h5>
								<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
								<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Top Destinations</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo base_url();?>asset/images/t1.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="#">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$190</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo base_url();?>asset/images/t2.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="#">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$213</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo base_url();?>asset/images/t3.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="#">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$176</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="<?php echo base_url();?>asset/images/t4.jpg" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="#">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$490</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-right">
						<a href="#">
							<img src="<?php echo base_url();?>asset/images/a3.jpg" alt="" />
							<div class="destinations-grid-info tours">
									<h5>New Hotel Experiences at Your Favourite Destinations</h5>
									<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
									<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="news-grids">
						<div class="news-grids-info">
							<h4>Latest News</h4>
						</div>
						<div class="news-grids-bottom">
							<!-- date -->
							<div id="design" class="date">
								<div id="cycler">   
									<div class="date-text">
										<a href="#">August 15,2015</a>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
									<div class="date-text">
										<a href="#">July 08,2015</a>
										<p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
									</div>
									<div class="date-text">
										<a href="#">February 15,2015</a>
										<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
									</div>
									<div class="date-text">
										<a href="#">January 15,2015</a>
										<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
									</div>
									<div class="date-text">
										<a href="#">September 24,2014</a>
										<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
									</div>
								</div>
								<script>
									function cycle($item, $cycler){
										setTimeout(cycle, 2000, $item.next(), $cycler);
										
										$item.slideUp(1000,function(){
											$item.appendTo($cycler).show();        
										});
						
										}
									cycle($('#cycler div:first'),  $('#cycler'));
								</script>
							</div>
							<!-- //date -->
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="#"><img src="<?php echo base_url();?>asset/images/a3.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="#"><img src="<?php echo base_url();?>asset/images/a2.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="#"><img src="<?php echo base_url();?>asset/images/a4.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="#"><img src="<?php echo base_url();?>asset/images/a1.jpg" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Our Products</h4>
						<ul>
							<li><a href="#">Flight Schedule</a></li>
							<li><a href="#">City Airline Routes</a></li>
							<li><a href="#">International Flights</a></li>
							<li><a href="#">International Hotels</a></li>
							<li><a href="#">Bus Booking</a></li>
							<li><a href="#">Domestic Airlines</a></li>
							<li><a href="#">Holidays Trip</a></li>
							<li><a href="#">Hotel Booking</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Company</h4>
						<ul>
							<li><a href="<?php echo base_url();?>about">About Us</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy </a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Feedback</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Travel Resources</h4>
						<ul>
							<li><a href="#">Holidays Packages</a></li>
							<li><a href="#">Weekend Getaways</a></li>
							<li><a href="#">International Airports</a></li>
							<li><a href="#">Domestic Flights Booking</a></li>
							<li><a href="#">Customer Support</a></li>
							<li><a href="#">Cancel Bookings</a></li>
							<li><a href="#">Print E-tickets</a></li>
							<li><a href="#">Customer Forums</a></li>
							<li><a href="#">Make a Payment</a></li>
							<li><a href="#">Complete Booking</a></li>
							<li><a href="#">Assurance Claim</a></li>
							<li><a href="#">Retail Offices</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>More Links</h4>
						<ul class="chf_footer_list">
							<li><a href="#">Flights Discount Coupons</a></li>
							<li><a href="#">Domestic Airlines</a></li>
							<li><a href="#">Indigo Airlines</a></li>
							<li><a href="#">Air Asia</a></li>
							<li><a href="#">Jet Airways</a></li>
							<li><a href="#">SpiceJet</a></li>
							<li><a href="#">GoAir</a></li>
							<li><a href="#">Air India</a></li>
							<li><a href="#">Domestic Flight Routes</a></li>
							<li><a href="#">Indian City Flight</a></li>
							<li><a href="#">Flight Sitemap</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- news-letter -->
				<div class="news-letter">
					<div class="news-letter-grids">
						<div class="col-md-4 news-letter-grid">
							<p>Toll Free No : <span>1234-5678-901</span></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<p class="mail">Email : <a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="col-md-4 news-letter-grid">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //news-letter -->
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Download our mobile Apps</h4>
						<div class="d-apps">
							<ul>
								<li><a href="#"><img src="<?php echo base_url();?>asset/images/app1.png" alt="" /></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>asset/images/app2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>asset/images/app3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							<ul>
								<li><a href="#"><img src="<?php echo base_url();?>asset/images/c1.png" alt="" /></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>asset/images/c2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="<?php echo base_url();?>asset/images/c3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2015 Travelad. Template by <a href="https://www.designmaz.net/">Designmaz</a></p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="<?php echo base_url();?>asset/js/jquery.flexslider.js"></script>
	<script src="<?php echo base_url();?>asset/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>asset/js/jquery-ui.js"></script>
	<script type="<?php echo base_url();?>asset/text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>