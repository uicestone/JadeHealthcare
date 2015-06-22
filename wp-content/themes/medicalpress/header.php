<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
	<head>
		<!-- META TAGS -->
		<meta charset="UTF-8">

		<!-- Title -->
		<title>Medicalpress | Just another Website</title>

		<!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
		<!-- favicon -->
		<link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/images/favicon-new.png">

		<!-- Google Web Font -->
<!--		<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">-->

		<?php wp_head(); ?>

		<!--[if lt IE 9]>
		<script src="<?=get_stylesheet_directory_uri()?>/js/html5.js"></script>
		<script src="<?=get_stylesheet_directory_uri()?>/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="<php echo 'http://www.google.com/chromeframe/?redirect=true'; ?>">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="header-top clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-5 ">
						<p>欢迎来到颉安健康 JADE HEALTHCARE</p>
					</div>
					<!--opening hours-->
					<div class="col-md-7 text-right">
						<p>
							工作时间: <span>周一至周五9:00 - 18:00</span>
							<br class="visible-xs">&nbsp;&nbsp;联系方式: <span>021－54371223</span>
						</p>
					</div>

				</div>
			</div>
		</div>


		<header id="header">
			<div class="container">

				<!-- Website Logo -->
				<div class="logo clearfix">
					<a href="index.html">
						<img src="<?=get_stylesheet_directory_uri()?>/images/temp-images/logo-two.png" alt="Medicalpress">
					</a>
				</div>

				<!-- Main Navigation -->
				<?php wp_nav_menu(array('theme_location'=>'main-nav', 'container'=>'nav', 'container_class'=>'main-menu')); ?>
				<div id="responsive-menu-container"></div>
			</div>
		</header>
