<?php

define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/assets/css');
	define('JS_DIR', THEME_ROOT . '/assets/js');
	define('LIBS_DIR', THEME_ROOT . '/assets/libs');
	define('IMG_DIR', THEME_ROOT . '/assets/images');



	add_action( 'wp_enqueue_scripts', 'dream_hourse_styles' );
	add_action( 'wp_enqueue_scripts', 'dream_hourse_scripts' );

	function dream_hourse_styles() {
		wp_enqueue_style( 'normalize-style', CSS_DIR . '/normalize.css' );

		wp_enqueue_style( 'magnific-style', LIBS_DIR . '/magnific-popup/magnific-popup.css' );

		wp_enqueue_style( 'swiper-style', LIBS_DIR . '/swiper/swiper-bundle.min.css' );	

		wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	}


	function dream_hourse_scripts() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'magnific-script', LIBS_DIR . '/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null);

		wp_enqueue_script( 'swiper-script', LIBS_DIR . '/swiper/swiper-bundle.min.js', array('jquery'), null);

	
		wp_enqueue_script( 'main-script', JS_DIR . '/script.js', array('jquery'), null);

	}
?>






