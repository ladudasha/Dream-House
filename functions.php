<?php

add_action( 'wp_enqueue_scripts', 'dream_hourse_syles' );

function dream_hourse_syles() {
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/css/abstracts/normalize.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}