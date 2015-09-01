<?php get_header(); the_post(); ?>

<div class="banner clearfix"></div>
<div class="page-top clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-7">
				<h1><?php the_category(); ?></h1>
<!--				<nav class="bread-crumb">
					<ul class="breadcrumb clearfix">
						<li><a href="#">Medical Press</a><span class="divider"></span></li>
						<li><a href="#" title="View all posts in Health Basics">Health Basics</a><span class="divider"></span></li>
						<li><li class="active">Image Post Format</li>
					</ul>
				</nav>-->
			</div>
			<div class="col-lg-3 col-md-4 col-sm-5 ">
				<div id="search" class="widget clearfix">
					<form method="get" id="search-form" class="search-form" action="#">
						<div>
							<input type="text" name="s" id="search-text" placeholder="搜索"/>
							<input type="submit" id="search-submit" value=""/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="blog-page clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="blog-post-single clearfix">

					<div class="row">
						<div class="col-sm-12">
							<article class="post format-gallery hentry clearfix">
								<div class="right-contents">
									<header class="entry-header">

										<figure>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="swipebox">
												<?php the_post_thumbnail('archive-poster'); ?>
											</a>
										</figure>

										<h1 class="entry-title"><?php the_title(); ?></h1>
									</header>

									<div class="entry-content">
										<?php the_content(); ?>
									</div>

									<footer class="entry-footer">
										<p class="entry-meta">
											<span class="entry-categories">
												<i class="fa fa-folder-o"></i>&nbsp;
												<?php foreach(get_the_category() as $index => $category){ ?>
												<a href="<?=get_category_link($category)?>" title="<?=$category->name?>" rel="category tag"><?=$category->name?></a>
												<?=$index + 1 === count(get_the_category()) ? '' : ','?>
												<?php } ?>
											</span>
											<?php if(get_the_tags()){ ?>
											<span class="entry-tags">
												<i class="fa fa-tags"></i>&nbsp;
												<?php foreach(get_the_tags() as $index => $tag){ ?>
												<a href="<?=get_tag_link($tag)?>" title="<?=$tag->name?>" rel="tag"><?=$tag->name?></a>
												<?=$index + 1 === count(get_the_tags()) ? '' : ','?>
												<?php } ?>
											</span>
											<?php } ?>
										</p>
									</footer>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4">
				<aside class="sidebar clearfix">
					<section class="widget">
						<img src="<?=get_stylesheet_directory_uri()?>/images/about-side.jpg">
					</section>
				</aside>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
