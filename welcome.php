<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin | Orangus Technologies</title>
	  <!--menu-->
	  <link rel="stylesheet" href="menu/css/menustyle.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/style.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: Dewi
        Theme URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<header>
				<nav class="[ navbar navbar-fixed-top ][ navbar-bootsnipp animate ]" role="navigation">
					<div class="[ container ]">

						<!-- Brand and toggle get grouped for better mobile display -->
						<button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="[ sr-only ]">Toggle navigation</span>
							<span class="[ icon-bar ]"></span>
							<span class="[ icon-bar ]"></span>
							<span class="[ icon-bar ]"></span>
						</button>
						<div class="[ animbrand ]">

							<div class="navbar-brand">
								<a href="index.html"><h1><span>O</span>rangus</h1></a>
							</div>
							<div class="[ navbar-header ]">
								&ensp;
								<div class="navbar-text pull-right">


								</div>

							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="[ collapse navbar-collapse ]" id="bs-example-navbar-collapse-1">
							<ul class="[ nav navbar-nav navbar-right ]">
								<li><a href="index.html" class="[ animate ]">HOME</a></li>
								<li><a href="about-us.html" class="[ animate ]">ABOUT US</a></li>
								<li><a href="services.html" class="[ animate ]">SERVICES</a></li>
								<li><a href="portfolio.html" class="[ animate ]">PORTFOLIO</a></li>
								<li><a class="animate" href="blog.html">BLOG</a></li>
								<li><a class="animate" href="contact-us.php">CONTACT US</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
		</nav>
	</header>

<?php
   include('session.php');
?>
<br><br><br>
<div class="jumbotron">
      <h2><span>Welcome <?php echo $login_session; ?></span></h2>
      <p><a href = "logout.php">Sign Out</a></p>
</div>

	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
    					<div class="align-center">
    						<div class="ficon">
    							<a href="alldata.php" class="btn btn-default" role="button">View All Data</a>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-md-4">
    				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
    					<div class="align-center">
    						<div class="ficon">
    							<a href="datewise.php" class="btn btn-default" role="button">Datewise</a>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
    					<div class="align-center">
    						<div class="ficon">
    							<a href="name-email.php" class="btn btn-default" role="button">Name & Email</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<div class="row">
    			<div class="col-md-4">
    				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
    					<div class="align-center">
    						<div class="ficon">
    							<a href="name-number.php" class="btn btn-default" role="button">Name & Number</a>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
    					<div class="align-center">
    						<div class="ficon">
    							<a href="#" class="btn btn-default" role="button">1</a>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
    					<div class="align-center">
    						<div class="ficon">
    							<a href="#" class="btn btn-default" role="button">2</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    	</div>

	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 f-about">
						<a href="index.html"><h1><span>O</span>rangus</h1></a>
						<h3>Contact Us</h3>
						<p>We are a team of Web Ninja's who have been in this industry for more than 3 years.<br><br>
							We know that the building blocks of any relationship is TRUST and we have always been trusted by our clients to provide excellence. We value our relation with all of our clients and ensure that they get the best of our services. Find out more about the projects we have undertaken till now. </p>
					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading">Winning Strategy</h3>
						<ul>
							<li><a href="#">Custom designed Responsive ( Mobile Friendly) website.</a></li>
							<li><a href="#">Local SEO to boost your ranking in Google search.</a></li>
							<li><a href="#">Social Media Marketing.</a></li>
							<li><a href="#">Hassle free Support & Maintenance.</a></li>
							<li><a href="#">All of this in your budget in a very cost effective way.</a></li>
						</ul>
					</div>
					<div class="col-md-4 f-contact">
						<h3 class="widgetheading">Stay in touch</h3>
						<a href="#"><p><i class="fa fa-envelope"></i> info@orangus.in</p></a>
						<p><i class="fa fa-phone"></i>  +91 1234 567 890</p>
						<p><a href="https://twitter.com/OrangusTech" target="_blank"><i class="fa fa-twitter"></i></a>@OrangusTech</p>
						<!--<p><i class="fa fa-home"></i> Sector No 25, Plot No 22,<br>
							&nbsp; &nbsp; &nbsp; &nbsp;Pradhikaran Nigadi, <br>
							&nbsp; &nbsp; &nbsp; &nbsp;Pune - 411 044</p>-->
						<p>Follow Us On:</p>
						<a href="https://www.facebook.com/OrangusTech/" target="_blank"><i class="fa fa-facebook-square fa-border" aria-hidden="true"></i></a>
						<a href="https://www.twitter.com/OrangusTech/" target="_blank"><i class="fa fa-twitter-square fa-border" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin-square fa-border" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/channel/UCCc3xS9vEgGoEm_PU3lFTgw" target="_blank"><i class="fa fa-youtube-square fa-border" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/orangustech/" target="_blank"><i class="fa fa-instagram fa-border" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus fa-border" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="last-div">
			<div class="container">
				<div class="row">
					<div class="copyright">
						<a href="index.html">&copy; 2017 Orangus.</a> All Rights Reserved
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Dewi
                            -->
							<a href="index.html">Orangus Technologies</a>
                        </div>
					</div>
					<nav class="foot-nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="contact-us.php">Contact</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
			</div>
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
		</div>
	</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
	<script>wow = new WOW({}).init();</script>
    <script src="contactform/contactform.js"></script>
	<!--menu scripts-->
	<script src="menu/js/menustyle.js"></script>
	<script src="menu/js/responsive-nav.js"></script>

  </body>
</html>