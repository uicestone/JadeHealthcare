<?php

// register & enqueue css & javascript
add_action('init', function(){
	wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), null);
	wp_register_style('flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), null);
	wp_register_style('animations', get_stylesheet_directory_uri() . '/css/animations.css', array(), null);
	wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), null);
	wp_register_style('datepicker', get_stylesheet_directory_uri() . '/css/datepicker.css', array(), null);
	wp_register_style('swipebox', get_stylesheet_directory_uri() . '/css/swipebox.css', array(), null);
	wp_register_style('meanmenu', get_stylesheet_directory_uri() . '/css/meanmenu.css', array(), null);
	wp_register_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), 1.4);
	wp_register_style('custom-responsive', get_stylesheet_directory_uri() . '/css/custom-responsive.css', array(), null);
	
	wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
	wp_register_script('flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), null, true);
	wp_register_script('swipebox', get_stylesheet_directory_uri() . '/js/jquery.swipebox.min.js', array('jquery'), null, true);
	wp_register_script('isotope', get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), null, true);
	wp_register_script('appear', get_stylesheet_directory_uri() . '/js/jquery.appear.js', array('jquery'), null, true);
	wp_register_script('jquery-ui', get_stylesheet_directory_uri() . '/js/jquery.ui.core.min.js', array('jquery'), null, true);
	wp_register_script('datepicker', get_stylesheet_directory_uri() . '/js/jquery.ui.datepicker.min.js', array('jquery-ui'), null, true);
	wp_register_script('validate', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), null, true);
	wp_register_script('form', get_stylesheet_directory_uri() . '/js/jquery.form.js', array('jquery'), null, true);
	wp_register_script('autosize', get_stylesheet_directory_uri() . '/js/jquery.autosize.min.js', array('jquery'), null, true);
	wp_register_script('meanmenu', get_stylesheet_directory_uri() . '/js/jquery.meanmenu.min.js', array('jquery'), null, true);
	wp_register_script('velocity', get_stylesheet_directory_uri() . '/js/jquery.velocity.min.js', array('jquery'), null, true);
	wp_register_script('respond', get_stylesheet_directory_uri() . '/js/respond.min.js', array(), null, true);
	wp_register_script('jquery-migrate', get_stylesheet_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array('jquery'), null, true);
	wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), null, true);
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
	
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('flexslider');
	wp_enqueue_script('swipebox');
	wp_enqueue_script('isotope');
	wp_enqueue_script('appear');
	wp_enqueue_script('jquery-ui');
	wp_enqueue_script('datepicker');
	wp_enqueue_script('validate');
	wp_enqueue_script('form');
	wp_enqueue_script('autosize');
	wp_enqueue_script('meanmenu');
	wp_enqueue_script('velocity');
	wp_enqueue_script('respond');
	wp_enqueue_script('jquery-migrate');
	wp_enqueue_script('custom');
	
});

// register menu
add_action('init', function(){
	register_nav_menu('main-nav', '主导航');
});

// register thumbnail types
add_theme_support('post-thumbnails');
add_image_size('full-width', 2000, 800, true);
add_image_size('1-3-width', 732, 447, true);
add_image_size('1-4-width', 675, 500, true);
add_image_size('archive-poster', 732, 608, true);
add_image_size('1-3-width-large', 818, 518, true);
