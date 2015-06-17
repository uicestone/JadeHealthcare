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
		<link rel="shortcut icon" href="images/favicon-new.png">

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
						<p>Welcome to MecialPress a Premium Medical Theme</p>
					</div>
					<!--opening hours-->
					<div class="col-md-7 text-right">
						<p>
							Opening Hours : <span>Monday to Saturday - 8am to 9pm</span>
							<br class="visible-xs">&nbsp;&nbsp;Contact : <span>+1-800-654-3210</span>
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
						<img src="images/temp-images/logo-two.png" alt="Medicalpress">
					</a>
				</div>

				<!-- Main Navigation -->
				<nav class="main-menu">
					<ul class="header-nav clearfix" id="menu-main-menu">
						<li>
							<a href="index.html">Home</a>
							<ul>
								<li><a href="home-variation2.html">Home Variation 2</a></li>
								<li><a href="home-variation3.html">Home Variation 3</a></li>
								<li><a href="home-variation4.html">Home Variation 4</a></li>

							</ul>
						</li>
						<li>
							<a href="doctors-three-columns.html">Doctors</a>
							<ul>
								<li>
									<a href="doctors-four-columns.html">4 Columns Doctors</a>
								</li>
								<li>
									<a href="doctors-three-columns.html">3 Columns Doctors</a>
								</li>
								<li>
									<a href="doctors-two-columns.html">2 Columns Doctors</a>
								</li>
							</ul>
						</li>
						<li class="current-menu-item page_item">
							<a href="blog.html">News</a>
							<ul>
								<li><a href="image-post-format.html">Image post format</a></li>
								<li><a href="gallery-post-format.html">Gallery post format</a></li>
								<li><a href="video-post-format.html">Video post format</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Services</a>
							<ul>
								<li>
									<a href="services-three-columns.html">3 Columns Services</a>
								</li>
								<li>
									<a href="services-two-columns.html">2 Columns Services</a>
								</li>
								<li>
									<a href="services-one-column.html">1 Column Services</a>
								</li>
								<li>
									<a href="services-dental.html">Services Detail page</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Gallery</a>
							<ul>
								<li>
									<a href="gallery-four-columns.html">4 Columns Gallery</a>
								</li>
								<li>
									<a href="gallery-three-columns.html">3 Columns Gallery</a>
								</li>
								<li>
									<a href="gallery-two-columns.html">2 Columns Gallery</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Pages</a>
							<ul>
								<li>
									<a href="faq.html">FAQs</a>
								</li>
								<li>
									<a href="faq-full-width.html">Full Width FAQs</a>
								</li>
								<li>
									<a href="elements.html">Elements</a>
								</li>
								<li>
									<a href="columns.html">Columns</a>
								</li>
								<li>
									<a href="sample-page.html">Sample Page</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="appointment.html">Appointment</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</nav>
				<div id="responsive-menu-container"></div>
			</div>
		</header>
