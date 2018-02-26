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
  <div class="container">
   <h3 class="box-title">Data Rute</h3>
   <div class="box-body">
                <table id="data_rute" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No id</th>
                      <th>Rute From</th>
                      <th>Rute To</th>
                      <th>Departure At</th>
                      <th>Price</th>
                      <th>Class</th>
                      <th>Transportation Id</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  foreach ($rute as $u) { ?>
                    <tr>
                      <td><?php echo $u->id; ?></td>
                      <td><?php echo $u->rute_from; ?></td>
                      <td><?php echo $u->rute_to; ?></td>
                      <td><?php echo $u->depart_at; ?></td>
                      <td><?php echo $u->price; ?></td>
                      <td><?php echo $u->class; ?></td>
                      <td><?php echo $u->transpotation_id; ?></td>
                      <td>
                        <a href=<?php echo base_url("reservation/".$u->id); ?> class="btn btn-primary a-btn-slide-text">
                         <span aria-hidden="true"></span>
                         <span><strong>Booking</strong></span>            
                       </a>
                     </td>
                   </tr>
                   <?php } ?>
                 </tfoot>
               </table>
             </div>
  </div>
    <!-- footer -->
  <div class="footer">
    <!-- container -->
    <div class="container">
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