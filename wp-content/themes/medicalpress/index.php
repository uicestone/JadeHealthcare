<?php get_header(); ?>

<div class="banner clearfix"></div>
<div class="page-top clearfix">
	<!--page main heading and search area-->
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-7 ">
				<h1><?php single_cat_title(); ?></h1>
				<!--	<nav class="bread-crumb">
					<ul class="breadcrumb clearfix">
						<li><a href="#">Medical Press</a><span class="divider"></span></li>
						<li>News</li>
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
			<div class="col-lg-9 col-md-8">
				<div class="blog-post-listing clearfix"  >
					<!-- Post -->
					<?php while(have_posts()): the_post();?>
					<article class="post hentry clearfix">
						<div class="row">
							<!--post date and comments-->
							<div class="col-sm-2">
								<div class="left_meta clearfix entry-meta">
									<time class="entry-time updated" datetime="2014-05-10T11:07:36+00:00"><?=get_the_date('MM')?> <strong><?=get_the_date('d')?></strong></time>
<!--									<span class="comments_count clearfix entry-comments-link">
										<a href="#" title="Comment on Image Post Format">5</a>
									</span>-->
								</div>
							</div>
							<div class="col-sm-10">
								<div class="right-contents">
									<header class="entry-header">
										<!--post image-->
										<figure>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail('archive-poster'); ?>
											</a>
										</figure>
										<!--post title-->
										<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
										<!--author name-->
										<span class="entry-author">
											<span class="entry-author-link"> <?php the_author(); ?></span>
										</span>
									</header>
									<!--post content-->
									<div class="entry-content">
										<p><?php the_excerpt(); ?></p>
									</div>
									<!--read more button-->
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
								</div>
							</div>
						</div>
					</article>
					<?php endwhile; ?>
					
					<!-- pager_nav -->
					<div class="pagination">
						<?php
						echo paginate_links(array(
							'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
							'format'=>'/%n%/page/%#%',
							'total'=>2,
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages)
						);
						?>
					</div>
					<!-- /pager_nav -->
				</div>
			</div>

			<!--sidebar-->
			<div class="col-lg-3 col-md-4">
				<aside class="sidebar clearfix">
					<!--categories-->
					<section class="widget widget_categories">
						<h3 class="title">分类</h3>
						<ul>
							<?php foreach(get_categories() as $category){ ?>
							<li><a href="<?=get_category_link($category)?>"><?=$category->name?></a></li>
							<?php } ?>
						</ul>
					</section>
				</aside>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>