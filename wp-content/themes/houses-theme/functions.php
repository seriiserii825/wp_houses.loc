<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'slicknav.min-css', get_template_directory_uri() . '/assets/css/slicknav.min.css' );
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery-custom', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery-custom' );
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery-custom'), null, true );
	wp_enqueue_script( 'slick.min-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery-custom'), null, true );
	wp_enqueue_script( 'jquery.slicknav.min-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery-custom'), null, true );
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery-custom'), null, true );
	wp_enqueue_script( 'ie10-viewport-bug-js', 'http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js', array('jquery-custom'), null, true );
}
