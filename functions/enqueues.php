<?php

function dkw_enqueues() {
/*
OPTIONAL: Enqueue WordPress's onboard jQuery
Simply delete the next lines of code below (line 35-36) if you don't want to use WordPress's onboard jQuery
*/
//	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.1.min.js', __FILE__, false, '1.11.1', true);
//	wp_enqueue_script( 'jquery' );

  wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', false, null, true);
	wp_enqueue_script('modernizr');

	wp_register_script('html5shiv.js', get_template_directory_uri() . '/js/html5shiv.js', false, null, true);
	wp_enqueue_script('html5shiv.js');

	wp_register_script('jQuery', get_template_directory_uri() . '/js/jquery.js', false, null, true);
	wp_enqueue_script('jQuery');

	//Add bootstrap library
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
	wp_enqueue_style('bootstrap-css');
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	//Add material design
	wp_register_style('material-css', get_template_directory_uri() . '/css/material.min.css', false, null);
	wp_enqueue_style('material-css');
	wp_register_script('material-js', get_template_directory_uri() . '/js/material.min.js', false, null, true);
	wp_enqueue_script('material-js');

	//Add ripples
	wp_register_style('ripples-css', get_template_directory_uri() . '/css/ripples.min.css', false, null);
	wp_enqueue_style('ripples-css');
	wp_register_script('ripples-js', get_template_directory_uri() . '/js/ripples.min.js', false, null, true);
	wp_enqueue_script('ripples-js');

	//Add font
	wp_register_style('material-wfont-css', get_template_directory_uri() . '/css/material-wfont.min.css', false, null);
	wp_enqueue_style('material-wfont-css');

	//Add customize css
	wp_register_style('duka-customise-css', get_template_directory_uri() . '/css/customize.css', false, null);
	wp_enqueue_style('duka-customise-css');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'dkw_enqueues', 100);

?>
