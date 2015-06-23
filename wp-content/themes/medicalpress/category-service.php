<?php get_header(); ?>

<!--banner-->
<div class="banner clearfix"></div>
<div class=" page-top clearfix">
	<div class="container">
		<!--page main heading-->
		<h1 class="entry-title"><?php single_cat_title(); ?></h1>
<!--		<nav class="bread-crumb">
			<ul class="breadcrumb clearfix">
				<li><a href="#">Medical Press</a><span class="divider"></span></li>
				<li class="active">3 Columns Services</li>
			</ul>
		</nav>-->
	</div>
</div>

<div class="services-page clearfix">
	<div class="container">
		<div class="row ">
			<?php while(have_posts()): the_post(); ?>
			<!--column start-->
			<div class="col-md-4 col-sm-6">
				<article class="service type-service hentry three-col-service">
					<figure>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('1-3-width-large'); ?>
						</a>
					</figure>
					<div class="contents clearfix">
						<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<div class="entry-content">
							<p><?php the_excerpt(); ?></p>
						</div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">了解更多</a>
					</div>
				</article>
			</div>
			<!--column end-->
			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>