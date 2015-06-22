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
							<input type="text" name="s" id="search-text" placeholder="Search"/>
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
					<article class="post hentry clearfix">
						<div class="row">
							<!--post date and comments-->
							<div class="col-sm-2">
								<div class="left_meta clearfix entry-meta">
									<time class="entry-time updated" datetime="2014-05-10T11:07:36+00:00">May <strong>10</strong></time>
									<span class="comments_count clearfix entry-comments-link">
										<a href="#" title="Comment on Image Post Format">5</a>
									</span>
								</div>
							</div>
							<div class="col-sm-10">
								<div class="right-contents">
									<header class="entry-header">
										<!--post image-->
										<figure>
											<a href="image-post-format.html" title="Image Post Format">
												<img src="<?=get_stylesheet_directory_uri()?>/images/temp-images/news-2.jpg" class=" wp-post-image" alt="news-2" />
											</a>
										</figure>
										<!--post title-->
										<h3 class="entry-title"><a href="image-post-format.html">Image Post Format</a></h3>
										<!--author name-->
										<span class="entry-author">
											Posted by <span class="entry-author-link"> <a href="#" title="Posts by John Doe">John Doe</a>
											</span>
										</span>
									</header>
									<!--post content-->
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
									</div>
									<!--read more button-->
									<a class="read-more" href="image-post-format.html">Read More</a>
								</div>
							</div>
						</div>
					</article>

					<!--pagination-->
					<div class='pagination'>
						<span class='page-numbers current'>1</span>
						<a class='page-numbers' href='#'>2</a>
						<a class="next page-numbers" href="#"> > </a></div>
				</div>
			</div>

			<!--sidebar-->
			<div class="col-lg-3 col-md-4">
				<aside class="sidebar clearfix">
					<!--categories-->
					<section class="widget widget_categories">
						<h3 class="title">Categories</h3>
						<?php echo get_the_category_list(); ?>
						<ul>
							<li><a href="#" title="View all posts filed under Environment">Environment</a></li>
							<li><a href="#" title="View all posts filed under Health Basics">Health Basics</a></li>
							<li><a href="#" title="View all posts filed under Lifestyle">Lifestyle</a></li>
							<li><a href="#" title="View all posts filed under Motivation">Motivation</a></li>
						</ul>
					</section>
				</aside>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>