<?php

add_action( 'wp_enqueue_scripts', 'dream_hourse_styles' );
add_action( 'wp_enqueue_scripts', ' dream_hourse_scripts' );

function dream_hourse_styles() {
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/css/abstracts/normalize.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/libs/magnific-popup/magnific-popup.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}
function dream_hourse_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/libs/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null);
	
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null);

}