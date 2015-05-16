<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="1Q6l2w0ha-wxp_INgjgBv_1Fofj4wiFplI3hDp2t34Q" />
		<link rel="shortcut icon" href="<?php echo $dir_assets_images.'favicon.ico';?>">
		<meta name="description" content="<?php echo $meta_description;?>" />
		<meta name="keywords" content="<?php echo $meta_keywords;?>">
		<meta name="author" content="<?php echo $meta_author;?>">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="2 days">
		<meta name="copyright" content="SwiftDeal.in" />
		<meta name="googlebot" content="noodp">
		<meta name="language" content="English">
		<meta name="web_author" content="SwiftDeal.in">
		<meta name="alexaVerifyID" content="6pnBaiIYLWAm32SfvYs85tRnUyc" />
		<title><?php echo $title;?></title>
		
		<!-- MOBILE THEME-->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script async src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script async src="https://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		
		<!-- IMAGE UPLOAD -->
		<style>
			#preview {
				width: 80%; max-width: 300px;
			}
			#preview img {
				width: 100%;
			}
			.hiddenfile {
			 width: 0px;
			 height: 0px;
			 overflow: hidden;
			}
		</style>
		
		
		<!-- GEOLOCATION -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
		<script type="text/javascript" src="<?php echo $dir_assets_js.'geolocation.js';?>"></script>
	</head>
	<body onload="checkCookie();">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=391539497615701";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<?php
		if (!empty($_COOKIE['dealcity'])){
		  $_SESSION['dealcity'] = $_COOKIE['dealcity'];
		  $dealcity = $_SESSION['dealcity'];
		} else {
		  $dealcity = 'Delhi';
		  $_SESSION['dealcity'] = $dealcity;
		}
		?>
		<!-- Google Tracking -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-47709543-1', 'swiftdeal.in');
		  ga('send', 'pageview');

		</script>
		<div data-role="page" data-theme="a">