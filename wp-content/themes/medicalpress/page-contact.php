<?php get_header(); the_post(); ?>

<!--banner-->
<div class="banner clearfix"></div>
<div class="page-top clearfix">
	<!--page main heading-->
	<div class="container">
		<h1 class="entry-title"><?php the_title(); ?></h1>
<!--		<nav class="bread-crumb">
			<ul class="breadcrumb clearfix">
				<li><a href="#">Medical Press</a><span class="divider"></span></li>
				<li class="active">Contact</li>
			</ul>
		</nav>-->
	</div>
</div>

<div class="contact-page clearfix">
	<div class="container">

		<!--contact form section-->
		<div class="blog-page-single clearfix">
			<article class="page type-page hentry  clearfix">
				<div class="full-width-contents">
					<div class="entry-content">
						<h2>联系我们</h2>
					</div>
				</div>
			</article>
		</div>

		<div class="clearfix"></div>
		<!--contact form-->
		<div class="row">
			<?php the_content(); ?>
		</div>

	</div>

</div>

<?php get_footer(); ?>