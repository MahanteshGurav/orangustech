<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You | Orangus Technologies</title>
	  <!--menu-->
	  <link rel="stylesheet" href="menu/css/menustyle.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
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
	</div>
<br><br><br>
<img src="fullpage/imgs/thanks.gif" class="img-responsive" alt="Thanks" />

<?php

require 'connection.php';

$conn =Connect();
$name =$conn->real_escape_string($_POST['name']);
$email =$conn->real_escape_string($_POST['email']);
$phone =$conn->real_escape_string($_POST['phone']);
$subject =$conn->real_escape_string($_POST['subject']);
$message =$conn->real_escape_string($_POST['message']);
$query ="INSERT into Request (name,email,phone,subject,message) VALUES('" . $name . "','" . $email ."','" . $phone ."','" .$subject. "','" . $message . "')";
$success = $conn->query($query);

if (!$success){
die("Something went wrong please try again later..  ".$conn->error);
}

//echo "Thank You For Contacting Us <br>";

$conn->close();


//define the receiver of the email
//$to = 'montygurav@gmail.com';
//define the subject of the email
//$subject = 'Test email';
//define the message to be sent. Each line should be separated with \n
//$message = "Hello World!\n\nThis is my first mail.";
//define the headers we want passed. Note that they are separated with \r\n
//$headers = "From: webmaster@example.com\r\nReply-To: webmaster@example.com";
//send the email
//$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
//echo $mail_sent ? "Mail sent" : "Mail failed";

?>

	<div class="jumbotron">
		<h1><span>Thank you for contacting us..!</span></h1>
		<h3>We appreciate you contacting us. You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your message.
		 Have a great day ahead!<br>
		 <h3>Thanks & Regards,</h3>
		 <a href="index.html"><h3><span>O</span>rangus Technologies</h3></a>
		</h3>
	</div>

	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 f-about">
						<a href="index.html"><h1><span>O</span>rangus</h1></a>
						<p>We are the one stop shop for complete web and mobile solutions that can give you can ace up your sleeve. With business specific solutions, enterprise level experience and a unique consultative approach, we are the remedy for all your technology related headaches. <br><br>From developing a fully responsive website to optimizing it for search engines, from devising a digital marketing strategy to fatten your wallet/profits, we guarantee a product that is mature and integrated enough to be presented in the ever competitive online marketplace.  </p>

					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading">Our Services</h3>
						<ul>
							<li><a href="web-design-brand-identity.html">Web Design & Brand Identity</a></li>
							<li><a href="web-development.html">Web Development</a></li>
							<li><a href="mobile-apps-development.html">Mobile Apps Development</a></li>
							<li><a href="e-commerce-solution.html">E-Commerce Solution</a></li>
							<li><a href="graphic-design.html">Graphic Design</a></li>
							<li><a href="domain-web-hosting.html">Domain & Web Hosting</a></li>
							<li><a href="seo-services.html">SEO Services</a></li>
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
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/functions.js"></script>
	<script>wow = new WOW({}).init();</script>
	<!--menu scripts-->
	<script src="menu/js/menustyle.js"></script>
	<script src="menu/js/responsive-nav.js"></script>

  </body>
</html>