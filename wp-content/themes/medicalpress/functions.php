<?php

add_action('init', function(){
	wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), null);
	wp_register_style('flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), null);
	wp_register_style('animations', get_stylesheet_directory_uri() . '/css/animations.css', array(), null);
	wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), null);
	wp_register_style('datepicker', get_stylesheet_directory_uri() . '/css/datepicker.css', array(), null);
	wp_register_style('swipebox', get_stylesheet_directory_uri() . '/css/swipebox.css', array(), null);
	wp_register_style('meanmenu', get_stylesheet_directory_uri() . '/css/meanmenu.css', array(), null);
	wp_register_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), null);
	wp_register_style('custom-responsive', get_stylesheet_directory_uri() . '/css/custom-responsive.css', array(), null);
	
	wp_register_script('', get_stylesheet_directory_uri() . '/js/', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.swipebox.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.appear.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.ui.core.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.ui.datepicker.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.form.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.jplayer.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.autosize.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.meanmenu.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery.velocity.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery-twitterFetcher.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/respond.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array(), null, true);
	wp_register_script('', get_stylesheet_directory_uri() . '/js/custom.js', array(), null, true);
});

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('animations');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('datepicker');
	wp_enqueue_style('swipebox');
	wp_enqueue_style('meanmenu');
	wp_enqueue_style('main');
	wp_enqueue_style('custom-responsive');
});
