
<?php 
$pageTitle = "Healthy Selfie | Health &amp; Fitness App";
$section = "index";
?> 
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $pageTitle; ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oleo+Script">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/buttons.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-general.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-sizes.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-shapes.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-colors.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-images-48.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-effects.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/social.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/overwrite.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon1.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

<body>

<!--     <a href="http://www.healthyselfieapp.com/index.php">Logout</a> -->

    <div class="container">
        <a href="home.php">
            <button type="button" class="btn btn-default navbar-btn">Sign in</button>
        </a>
    </div>
		
       <!-- Top content -->
        <div class="top-content">
            <div class="index-inner-bg">
                <div class="container">
                    <div class="row">

                        <?php include('inc/thanks-message.php'); ?>
                        <?php include("inc/cheers-message.php"); ?>
                                  	
                        <div class="col-sm-12 text" itemscope itemtype="http://schema.org/MobileApplication">
                        	<div class="logo">
                        		<h1 itemprop="name" class="animated bounceIn delay-1"><a href="index.html">Healthy Selfie</a></h1>
                        	</div>
                            <h2 class="animated slideInUp delay-1.5">Healthy Selfie.<br> <span class="animated bounceIn delay-1">Picture a new you.</span></h2>
                            
                            <div class="top-button">
                            	<a class="button-1" href="#subscribe" title="Subscribe for updates!"><i class="fa fa-apple"></i> Coming soon</a>
                            </div>

                        </div>

                     
                    </div>
                </div>
            </div>
        </div>
        

        
        <!-- Subscription form -->
        <div class="subscribe-container" id="subscribe">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 subscribe">

                            <h3>Show your interest</h3>
                            <p>When Healthy Selfie is available for download we'll let you know:</p>
                            <form class="form-inline" action="assets/subscribe.php" method="post">
                                <input type="text" name="email" placeholder="Enter your email...">
                                <button type="submit" class="btn">Submit</button>
                            </form>

	                    <div class="success-message"></div>
	                    <div class="error-message"></div>
	                </div>
	            </div>
	        </div>
        </div>
        

	    <!-- Latest tweets -->

		<div class="single-feature-container single-feature-no-bg twitter">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 latest-tweets">
	                <a class="twitter_link"><h2><i class="fa fa-twitter"></i></h2>
	                	
	                	<button type="button" id="twitter_tooltip" class="btn btn-link " data-toggle="tooltip" data-placement="bottom" title="show latest tweets"><p><i class="fa fa-chevron-down"></i></p></button>
	                </a>
	              
	            	<div id="twatter">
		            	<a class="twitter-timeline" href="https://twitter.com/healthy_selfie" data-widget-id="458347651872727041">Tweets by @healthy_selfie</a>
							<script>
							!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
							</script>
						<!-- <p id="twatter_hide"><i class="fa fa-chevron-up"></i> hide</p> -->
						
				    </div>

	            </div>
	            </div>
	        </div>
        </div>

	    <!-- Latest Instagrams -->

		<div class="single-feature-container single-feature-no-bg instagram">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 latest-instagram">
	                <a class="instagram_link"><h2><i class="fa fa-instagram"></i></h2>
	                	<!-- <p>see our latest grams <i class="fa fa-chevron-down"></i></p> -->
		                
		                <button type="button" id="instagram_tooltip" class="btn btn-link " data-toggle="tooltip" data-placement="bottom" title="show latest grams"><p><i class="servicedrop fa fa-chevron-down fa-chevron-up"></i></p></button>
	            	</a>
	                <div id="insta">
	            	
		            	<script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>
		            	<div class="tintup" data-id="anon_1398163964_1616995973" data-columns=""  style="height:600px;width:100%;">
		            		<a href="http://www.tintup.com/blog/the-best-instagram-wall-display" style="width:118px;height:31px;background-image:url(//d33w9bm0n1egwm.cloudfront.net/assets/logos/poweredbytintsmall.png);position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;"></a>
		            	</div>


						<!-- <p id="insta_hide"><i class="fa fa-chevron-up"></i> hide</p> -->
				    </div>


	            </div>
	            </div>
	        </div>
        </div>
        
        <!-- How to contact us -->
        <div class="container" id="contactUs">
            <div class="row">
                <div class="col-sm-12 contact">
                    <h3>How to contact us</h3>
                    <p>
                    	Want to know more? Get in touch!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 contact-form">
                    <h4>Send us a message</h4>
                    <form method="post" action="assets/contact.php">
                        <input type="text" name="email" placeholder="Email..." class="contact-email">
                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                        <textarea name="message" placeholder="Message..."></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
               <!--  <div class="col-sm-5 contact-address">
                    <h4>Come visit us</h4>
                    <div class="map"></div>
                    <h4>Address</h4>
                    <p><i class="fa fa-map-marker"></i>Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                    <p><i class="fa fa-phone"></i>Phone: 0039 333 12 68 347</p>
                </div> -->
                <div class="col-sm-12 footer-social">
	                    <a class="ultm ultm-facebook ultm-48 ultm-circle ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-twitter ultm-48 ultm-circle ultm-gray-to-color" href="https://twitter.com/healthy_selfie"></a>
	                    <a class="ultm ultm-instagram-1 ultm-48 ultm-circle ultm-gray-to-color" href="http://instagram.com/healthyselfieapp"></a>
	                </div>

            </div>
        </div>

        
        <!-- Footer -->
        <footer>
	        <div class="container">
	            <div class="row" >
	                <div class="col-sm-12 footer-copyright">
	                    <p>&copy; <?php echo date('Y'); ?> Healthy Selfie. All rights reserved.</p>
	                    <p>Website by <a href="http://www.joelidesign.com/">Joe Li</a></p>
	                </div>
	                <!-- <div class="col-sm-12 footer-social">
	                    <a class="ultm ultm-facebook ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-twitter ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-google-plus-1 ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-dribbble ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                    <a class="ultm ultm-pinterest ultm-48 ultm-square ultm-gray-to-color" href=""></a>
	                </div> -->
	            </div>
	        </div>
        </footer>
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/twitter/jquery.tweet.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/social.js"></script>
        <script src="assets/js/icons.js"></script>
       
						
        <!-- Google Analytics -->
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-48894925-1', 'healthyselfieapp.com');
		  ga('send', 'pageview');
		</script>
    </body>

</html>