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
						<li><a href="<?php echo base_url();?>about">Abouts</a></li>
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
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>One way</span></li>
							  <div class="clearfix"></div>
						  </ul>		
						  <!---->		  	 
						 <div class="resp-tabs-container">
							<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<link rel="stylesheet" href="css/jquery-ui.css" />
											<script src="<?php echo base_url();?>asset/js/jquery-ui.js"></script>
													  <script>
															  $(function() {
																$( "#datepicker,#datepicker1" ).datepicker();
															  });
													  </script>

											<!---/End-date-piker---->
											<div class="online_reservation">
												<form action="<?php echo base_url() ?>search" method="GET">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti">
																		 <h5>Flying from</h5>
																		 <div class="book_date">
																			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			<select class="form-control" name="rute_from">
																				<option value="jakarta">Jakarta</option>
																				<option value="bali">Bali</option>
																			</select>
																		 </div>					
																	 </li>
																	 <li  class="span1_of_1 left desti">
																		 <h5>Flying to</h5>
																		 <div class="book_date">
																			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<select class="form-control" name="rute_to">
																					<option value="jakarta">Jakarta</option>
																					<option value="bali">Bali</option>
																				</select>
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
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="date" name="depart_at" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																		 </div>		
																	 </li>
																	 <li class="span1_of_1 left">
																		 <h5>Passanger</h5>
																		 <div class="section_room">
																			  <select id="country" name="passanger" onchange="change_country(this.value)" class="frm-field required">
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
																		 <div class="section_room">
																			  <select id="country" name="class" onchange="change_country(this.value)" class="frm-field required">
																					<option value="economy">Economy</option>
																					<option value="executive">Executive</option>     
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
																					<input class="resp-tab-item" type="submit" value="Search" />
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</form>
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
	
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Today's Top Deals</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-right">
							<img src="<?php echo base_url();?>asset/images/a3.jpg" alt="" />
							<div class="destinations-grid-info tours">
									<h5>New Hotel Experiences at Your Favourite Destinations</h5>
									<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
									<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
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
									<b>Banyak Pilihan Maskapai</b>
									<p>Kami bekerjasama dengan maskapai-maskapai berkualitas.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								</div>
								<div class="choose-right">
									<b>Banyak Rutenya</b>
									<p>Kami siap mengantarkan anda ke kota tujuan anda</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<h6>$</h6>
								</div>
								<div class="choose-right">
									<b>Hemat Biaya</b>
									<p>Naik pesawat dengan biaya murah tapi kualitas mewah</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 banner-bottom-grid holidays-bottom-grid">
					<div class="holidays-grids">
						<div class="holidays-info">
							<h4>Explore Destinations</h4>
						</div>
						<div class="holidays-grid">
							<a href="products.html"><img src="<?php echo base_url();?>asset/images/h5.jpg" alt="" /></a>
						</div>
					</div>
					<div class="holidays-top-grids">
						<div class="col-md-6 holidays-top-grid">
							<a href="products.html"><img src="<?php echo base_url();?>asset/images/h2.jpg" alt="" /></a>
						</div>
						<div class="col-md-6 holidays-top-grid">
							<a href="products.html"><img src="<?php echo base_url();?>asset/images/a4.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="holidays-top-grids">
						<div class="col-md-6 holidays-top-grid">
							<a href="products.html"><img src="<?php echo base_url();?>asset/images/a2.jpg" alt="" /></a>
						</div>
						<div class="col-md-6 holidays-top-grid">
							<a href="products.html"><img src="<?php echo base_url();?>asset/images/h1.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="holidays-grid">
						<a href="products.html"><img src="<?php echo base_url();?>asset/images/h5.jpg" alt="" /></a>
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

			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a><img src="<?php echo base_url();?>asset/images/garuda.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a><img src="<?php echo base_url();?>asset/images/airasia.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a><img src="<?php echo base_url();?>asset/images/citilink.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a><img src="<?php echo base_url();?>asset/images/lionair.jpg" alt=""/>
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
						<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
	<!-- footer -->
	<div class="footer">
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