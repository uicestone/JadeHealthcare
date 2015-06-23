	<!--page footer-->
	<footer id="main-footer" class="site-footer clearfix">
		<div class="container">
			<div class="row">
				<!--about widget-->
				<div class="col-md-5 col-sm-6">
					<section  class="widget animated fadeInLeft">
						<h3 class="title">关于我们<br>JADE HEALTHCARE</h3>
						<div class="textwidget">
							<?=wpautop(get_posts('post_type=page&name=about')[0]->post_content)?>
						</div>
					</section>
				</div>
				<!--general services-->
				<div class="col-md-2 col-sm-6">
					<section class="widget animated fadeInLeft ae-animation-fadeInLeft">
						<h3 class="title">我们的服务</h3>
						<ul>
							<?php foreach(get_posts('category_name=健康服务产品') as $post){ ?>
							<li>
								<a href="<?=get_the_permalink($post->ID)?>"><?=get_the_title($post->ID)?></a>
							</li>
							<?php } ?>
						</ul>
					</section>
				</div>

				<div class="clearfix visible-sm"></div>

				<!--recent posts-->
				<div class="col-md-2 col-sm-6  ">
					<section  class="widget animated fadeInLeft">
						<h3 class="title">健康食品</h3>
						<ul>
							<?php foreach(get_posts('category_name=健康食品') as $post){ ?>
							<li>
								<a href="<?=get_the_permalink($post->ID)?>"><?=get_the_title($post->ID)?></a>
							</li>
							<?php } ?>
						</ul>
					</section>
				</div>
				<!--subscription form-->
				<div class="col-md-3 col-sm-6  ">
					<section  class="widget animated fadeInLeft">
						<img src="<?=get_stylesheet_directory_uri()?>/images/qrcode-01.png">
						<div class="textwidget text-center" style="width:100%">WeChat</div>
						<div class="textwidget">工作时间：周一至周五 9:00-18:00</div>
						<div class="textwidget">联系方式：021-21548456</div>
					</section>
				</div>
			</div>
			<div class="footer-bottom animated fadeInDown clearfix">
				<div class="row">
					<div class="col-sm-7">
						<p>&copy; Copyright <?=date('Y')?>. All Rights Reserved by STIR</p>
					</div>
					<!--footer social icons-->
<!--					<div class="col-sm-5 clearfix">
						<ul class="footer-social-nav">
							<li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>-->
				</div>
			</div>
		</div>
	</footer>

	<a href="#top" id="scroll-top"></a>

	<script type='text/javascript' id="quick-js"></script>
	<?php wp_footer(); ?>
	</body>
</html>