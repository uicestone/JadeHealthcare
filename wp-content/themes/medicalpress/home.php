<?php get_header(); ?>

<!--slider-->
<div class="home-slider clearfix">
	<div class="flexslider">
		<ul class="slides">
			<!--slide start-->
			<li class="flex-active-slide">
				<img src="images/temp-images/slide-one.jpg" alt="Medical Services That You Can Trust" draggable="false">
				<div class="content-wrapper clearfix">
					<div class="container">
						<div class="slide-content clearfix">
							<h1>Medical Services <span>That You Can Trust</span></h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</p>
							<a class="slider-button" href="doctors-three-columns.html">Read More</a>
						</div>
					</div>
				</div>
			</li>
			<!--slide end-->

			<!--slide start-->
			<li>
				<img src="images/temp-images/slide-two.jpg" alt="We Care for You" draggable="false">
				<div class="content-wrapper clearfix">
					<div class="container">
						<div class="slide-content clearfix ">
							<h1>We <span>Care</span> for <span>You</span></h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<a class="slider-button" href="doctors-three-columns.html">Read More</a>
						</div>
					</div>
				</div>
			</li>
			<!--slide end-->
		</ul>
		<!--directional nav-->
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#">Previous</a></li>
			<li><a class="flex-next" href="#">Next</a></li></ul>
	</div>
	<!--appointment form-->
	<div class="appointment clearfix">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6  ">
					<span class="btn make-appoint">Make an Appointment <i class="fa fa-caret-down"></i></span>
				</div>
			</div>
			<div class="clearfix">
				<div class="appointment-form clearfix animated">
					<form class="clearfix" id="appointment_form_one" action="appointment_form_handler.php" method="post" novalidate="novalidate">
						<div class="col-md-3 col-sm-6  common">
							<input type="text" name="name" id="app-name" class="required" placeholder="Name">
						</div>
						<div class="col-md-3 col-sm-6  common">
							<input type="text" name="number" id="app-number" class="required number" placeholder="Phone Number">
						</div>
						<div class="col-md-3 col-sm-6  common">
							<input type="email" name="email" id="app-email" class="required email" placeholder="Email Address">
						</div>
						<div class="col-md-3 col-sm-6  common">
							<input type="text" name="date" id="datepicker" class="required" placeholder="Appointment Date">
						</div>
						<div class="col-sm-11 common custom-col-form">
							<input type="text" name="message" id="app-message" class="required" placeholder="Message">
						</div>
						<div class="col-sm-1 common custom-col-button">
							<input type="submit" name="Submit" class="btn" value="SEND">
						</div>
						<div>

							<img src="images/white-loader.gif" id="appointment-loader" alt="Loading...">
							<div id="message-sent"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--appointment form end-->
</div>

<!--general services-->
<div class="home-features clearfix">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="features-intro clearfix">
					<h2><span>Health and Medical</span> WordPress Theme</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<a class="read-more" href="services-two-columns.html">View Our Services</a>
				</div>
			</div>

			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-6 single-feature">
						<div class="row">
							<div class="col-sm-3 icon-wrapper">
								<i class="fa fa-plus-square fa-custom"></i>
							</div>
							<div class="col-sm-9">
								<h3>Rehabilitation Center</h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 single-feature">
						<div class="row">
							<div class="col-sm-3 icon-wrapper">
								<i class="fa fa-medkit fa-custom"></i>
							</div>
							<div class="col-sm-9">
								<h3>Medical Counseling</h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 single-feature">
						<div class="row">
							<div class="col-sm-3 icon-wrapper">
								<i class="fa fa-user-md fa-custom"></i>
							</div>
							<div class="col-sm-9">
								<h3>Qualified Doctors </h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 single-feature">
						<div class="row">
							<div class="col-sm-3 icon-wrapper">
								<i class="fa fa-ambulance fa-custom"></i>
							</div>
							<div class="col-sm-9">
								<h3>Emergency Services</h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!--general services end-->

<!--doctors section-->
<div class="home-doctors  clearfix">
	<div class="container">
		<div class="slogan-section animated fadeInUp clearfix">
			<h2>Meet our <span>Medical Specialists</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-6  text-center">
				<div class="common-doctor animated fadeInUp clearfix">
					<figure>
						<a href="doctor-alex.html" title="Dr.Addison Alexander">
							<img src="images/temp-images/doctor-2.jpg" alt="doctor-2">
						</a>
					</figure>
					<div class="text-content">
						<h5><a href="doctor-alex.html">Dr.Addison Alexander</a></h5>
						<div class="for-border"></div>
						<p>
							This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
						</p>
					</div>
				</div>
				<a class="read-more" href="doctor-alex.html">Read More</a>
			</div>
			<div class="col-md-3 col-sm-6  text-center">
				<div class="common-doctor animated fadeInUp clearfix">
					<figure>
						<a href="doctor-becka.html" title="Dr.Adaline Becka">
							<img src="images/temp-images/doctor-1.jpg" alt="doctor-1">
						</a>
					</figure>
					<div class="text-content">
						<h5><a href="doctor-becka.html">Dr.Adaline Becka</a></h5>
						<div class="for-border"></div>
						<p>
							This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
						</p>
					</div>
				</div>
				<a class="read-more" href="doctor-becka.html">Read More</a>
			</div>

			<div class="visible-sm clearfix margin-gap"></div>

			<div class="col-md-3 col-sm-6  text-center">
				<div class="common-doctor animated fadeInUp clearfix">
					<figure>
						<a href="doctor-bert.html" title="Dr.Andrew Bert">
							<img src="images/temp-images/doctor-4.jpg" alt="doctor-4">
						</a>
					</figure>
					<div class="text-content">
						<h5><a href="doctor-bert.html">Dr.Andrew Bert</a></h5>
						<div class="for-border"></div>
						<p>
							This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
						</p>
					</div>
				</div>
				<a class="read-more" href="doctor-bert.html">Read More</a>
			</div>

			<div class="col-md-3 col-sm-6  text-center">
				<div class="common-doctor animated fadeInUp clearfix">
					<figure>
						<a href="doctor-taleebin.html" title="Dr.Orana Taleebin">
							<img src="images/temp-images/doctor-3.jpg" alt="doctor-3">
						</a>
					</figure>
					<div class="text-content">
						<h5><a href="doctor-taleebin.html">Dr.Orana Taleebin</a></h5>
						<div class="for-border"></div>
						<p>
							This text represents a brief introduction of doctor and this text will be displayed on homepage and all the places where multiple doctors are listed.
						</p>
					</div>
				</div>
				<a class="read-more" href="doctor-taleebin.html">Read More</a>
			</div>
			<div class="visible-sm clearfix margin-gap"></div>
		</div>
	</div>
</div>
<!--doctors section end-->

<!--blog posts section-->
<div class="home-blog text-center clearfix">
	<div class="container">
		<div class="slogan-section animated fadeInUp clearfix">
			<h2>Latest News from <span>Health and Medical</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<article class="common-blog-post animated fadeInRight clearfix">
					<figure>
						<a href="image-post-format.html" title="Image Post Format">
							<img src="images/temp-images/news-2-732x447.jpg"  alt="news-2" />
						</a>
					</figure>
					<div class="text-content clearfix">
						<h5><a href="image-post-format.html">Image Post Format</a></h5>
						<div class="entry-meta">
							<span>10 May, 2014</span>, by <a href="#" title="Posts by John Doe">John Doe</a>
						</div>
						<div class="for-border"></div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p>
					</div>
				</article>
				<a class="read-more" href="image-post-format.html">Read More</a>
			</div>
			<div class="col-md-4">
				<article class="common-blog-post animated fadeInRight clearfix">
					<div class="gallery gallery-slider clearfix loading">
						<ul class="slides">
							<li>
								<a href="images/temp-images/gallery-1.jpg" title="" >
									<img src="images/temp-images/gallery-1.jpg" alt="gallery-1" />
								</a>
							</li>
							<li class="flex-active-slide">
								<a href="images/temp-images/gallery-2.jpg" title="" >
									<img src="images/temp-images/gallery-2.jpg" alt="gallery-2" />
								</a>
							</li>
							<li>
								<a href="images/temp-images/gallery-3.jpg" title="" >
									<img src="images/temp-images/gallery-3.jpg" alt="gallery-3" />
								</a>
							</li>
							<li>
								<a href="images/temp-images/gallery-2.jpg" title="" >
									<img src="images/temp-images/gallery-2.jpg" alt="gallery-4" />
								</a>
							</li>
						</ul>
					</div>
					<div class="text-content clearfix">
						<h5><a href="gallery-post-format.html">Gallery Post Format</a></h5>
						<div class="entry-meta">
							<span>10 May, 2014</span>, by <a href="#" title="Posts by John Doe">John Doe</a>
						</div>
						<div class="for-border"></div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p>
					</div>
				</article>

				<a class="read-more" href="gallery-post-format.html">Read More</a>
			</div>

			<div class="col-md-4">
				<article class="common-blog-post animated fadeInRight clearfix">
					<div class="video clearfix">
						<div class="video-wrapper clearfix">
							<iframe src="//player.vimeo.com/video/75594702?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
					<div class="text-content clearfix">
						<h5><a href="video-post-format.html">The Hero In All Of Us</a></h5>
						<div class="entry-meta">
							<span>10 May, 2014</span>, by <a href="#" title="Posts by John Doe">John Doe</a>
						</div>
						<div class="for-border"></div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p>
					</div>
				</article>
				<a class="read-more" href="video-post-format.html">Read More</a>
			</div>
		</div>
	</div>
</div>
<!--blog posts section end-->

<!--testimonials section-->
<div class="home-testimonial  clearfix">
	<div class="container">
		<div class="text-center">
			<div class="slogan-section animated fadeInUp clearfix">
				<h2>What patients say <span>About MedicalPress</span></h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10 text-center">
				<div class="flexslider-three animated fadeInUp">
					<ul class="slides">
						<li>
							<img class="img-circle" src="images/temp-images/author-22-130x130.jpg" alt="author-22" />
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation.</p>
							</blockquote>

							<div class="testimonial-footer clearfix">
								<h3>Marina Forrest</h3>
								<div class="for-border"></div>
								<p><a target="_blank" href="#">Autommatic</a></p>
							</div>
						</li>
						<li>
							<img class="img-circle" src="images/temp-images/author-11-130x130.jpg"  alt="author-11" />
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
							</blockquote>

							<div class="testimonial-footer clearfix">
								<h3>Jaden Wayne</h3>
								<div class="for-border"></div>
								<p><a target="_blank" href="#">Themeforest</a></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</div>
<!--testimonials section end-->

<?php get_footer(); ?>