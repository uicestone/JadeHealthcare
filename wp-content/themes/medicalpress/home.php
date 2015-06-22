<?php get_header(); ?>

<!--slider-->
<div class="home-slider clearfix">
	<div class="flexslider">
		<ul class="slides">
			<!--slide start-->
			<?php foreach(get_posts(array('tag'=>'首页大图')) as $post){ ?>
			<li class="flex-active-slide">
				<?=get_the_post_thumbnail($post->ID, 'full-width')?>
				<div class="content-wrapper clearfix">
					<div class="container">
						<div class="slide-content clearfix">
							<h1><?=get_the_title($post->ID)?></h1>
							<p><?=$post->post_excerpt?></p>
							<a class="slider-button" href="<?=get_the_permalink($post->ID)?>">了解更多</a>
						</div>
					</div>
				</div>
			</li>
			<?php } ?>
			<!--slide end-->
		</ul>
		<!--directional nav-->
		<ul class="flex-direction-nav">
			<li><a class="flex-prev" href="#">Previous</a></li>
			<li><a class="flex-next" href="#">Next</a></li>
		</ul>
	</div>
</div>

<!--general services-->
<div class="home-features clearfix">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="features-intro clearfix">
					<h2>颉安健康 <span>JADE HEALTHCARE</span></h2>
					<p>颉安（上海）健康科技有限公司（简称颉安健康）致力于健康管理，健康科技，健康食品的产业化运营，用高品质健康管理提升生命质量。</p>
					<a class="read-more" href="<?=site_url()?>/category/产品与服务/">我们的服务</a>
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
								<h3>基因检测</h3>
								<p>人类的DNA序列是人类的真谛，这个世界上发生的一切都与这个序列息息相关，包括癌症在内的人类疾病的发生，都与这个序列直接或间接有关…</p>
								<p class="text-right">——诺贝尔奖得主<br>雷托·杜帕克</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 single-feature">
						<div class="row">
							<div class="col-sm-3 icon-wrapper">
								<i class="fa fa-medkit fa-custom"></i>
							</div>
							<div class="col-sm-9">
								<h3>报告解读</h3>
								<p>定期体检是收集个人健康素质的重要途径，只有充分了解体检数据结果后，才能根据各项指标的差异程度，进行积极有效的健康管理，从而可以达到预防疾病的重要效果。</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 single-feature" style="clear:left">
						<div class="row">
							<div class="col-sm-3 icon-wrapper">
								<i class="fa fa-user-md fa-custom"></i>
							</div>
							<div class="col-sm-9">
								<h3>深度体检</h3>
								<p>体检是很重要的健康检查手段之一，一般体检做的常规检查隐病状态及重要的健康风险因素是查不出来的，深度体检可以做到。</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 single-feature">
						<div class="row">
							<div class="col-sm-3 icon-wrapper">
								<i class="fa fa-ambulance fa-custom"></i>
							</div>
							<div class="col-sm-9">
								<h3>健康食品</h3>
								<p>颉安健康弘扬中医药文化，结合中西的思想精华，积极倡导天然健康食品的研究、生产和消费的新概念。</p>
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
			<h2>我们的健康服务</h2>
			<p>运用最新的生物技术，医学科技和集成化信息技术打造顶级的健康管理与服务体验。</p>
		</div>

		<div class="row">
			<?php foreach(get_posts(array('category_name'=>'产品与服务', 'posts_per_page'=>4)) as $post){ ?>
			<div class="col-md-3 col-sm-6  text-center">
				<div class="common-doctor animated fadeInUp clearfix">
					<figure>
						<a href="<?=get_the_permalink($post->ID)?>" title="<?=get_the_title($post->ID)?>">
							<?=get_the_post_thumbnail($post->ID, '1-3-width')?>
						</a>
					</figure>
					<div class="text-content">
						<h5><a href="<?=get_the_permalink($post->ID)?>" title="<?=get_the_title($post->ID)?>"><?=get_the_title($post->ID)?></a></h5>
						<div class="for-border"></div>
						<p>
							<?=$post->post_excerpt?>
						</p>
					</div>
				</div>
				<a href="<?=get_the_permalink($post->ID)?>" title="<?=get_the_title($post->ID)?>" class="read-more">了解更多</a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!--doctors section end-->

<!--blog posts section-->
<div class="home-blog text-center clearfix">
	<div class="container">
		<div class="slogan-section animated fadeInUp clearfix">
			<h2>最新健康科普</h2>
			<p>颉安健康引领中国高端健康产业，通过品质服务提升国人健康水平，实现健康梦想，让国人获得和享受更多尊严与幸福。</p>
		</div>
		<div class="row">
			<?php foreach(get_posts(array('category_name'=>'健康科普', 'posts_per_page'=>3)) as $post){ ?>
			<div class="col-md-4">
				<article class="common-blog-post animated fadeInRight clearfix">
					<figure>
						<a href="<?=get_the_permalink($post->ID)?>" title="<?=get_the_title($post->ID)?>">
							<?=get_the_post_thumbnail($post->ID, '1-3-width')?>
						</a>
					</figure>
					<div class="text-content clearfix">
						<h5><a href="<?=get_the_permalink($post->ID)?>" title="<?=get_the_title($post->ID)?>">Image Post Format</a></h5>
						<div class="entry-meta">
							<span><?=get_the_date('', $post)?></span>, by <?=$post->post_author?>
						</div>
						<div class="for-border"></div>
						<p><?=$post->post_excerpt?></p>
					</div>
				</article>
				<a href="<?=get_the_permalink($post->ID)?>" title="<?=get_the_title($post->ID)?>">了解更多</a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!--blog posts section end-->

<?php get_footer(); ?>