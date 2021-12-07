<?php

define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/assets/css');
	define('JS_DIR', THEME_ROOT . '/assets/js');
	define('LIBS_DIR', THEME_ROOT . '/assets/libs');
	define('IMG_DIR', THEME_ROOT . '/assets/images');



	add_action( 'wp_enqueue_scripts', 'dream_hourse_styles' );
	add_action( 'wp_enqueue_scripts', 'dream_hourse_scripts' );
	add_action( 'after_setup_theme', 'dream_hourse_register_nav_menu' );
	add_action( 'init', 'register_post_types' );
	add_filter( 'upload_mimes', 'svg_upload_allow' );



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

		wp_enqueue_script( 'magnific-script', LIBS_DIR . '/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), 'null', true );

		wp_enqueue_script( 'swiper-script', LIBS_DIR . '/swiper/swiper-bundle.min.js', array('jquery'), 'null', true );

	
		wp_enqueue_script( 'main-script', JS_DIR . '/script.js', array('jquery'), 'null', true );

	}


function dream_hourse_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Меню в шапке' );
	register_nav_menu( 'bottom_menu', 'Меню в подвале' );
}





function register_post_types(){

	add_theme_support( 'post-thumbnails' );
	register_post_type( 'features', [
		
		'labels' => [
			'name'               => 'features', // основное название для типа записи
			'singular_name'      => 'feature', // название для одной записи этого типа
			'add_new'            => 'Добавить feature', // для добавления новой записи
			'add_new_item'       => 'Добавление feature', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование feature', // для редактирования типа записи
			'new_item'           => 'Новое feature', // текст новой записи
			'view_item'          => 'Смотреть feature', // для просмотра записи этого типа.
			'search_items'       => 'Искать feature', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			
			'menu_name'          => 'features', // название меню
		],
	
		'public'              => false,
		'show_ui'             => true, // зависит от publiс			
		'menu_icon'           => 'dashicons-welcome-widgets-menus',		
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor',
	] );
}



# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg';

	return $mimes;
}


function getFeatures() {
	$args = array(	
		'orderby'     => 'date',
		'order'       => 'ASC',		
		'post_type'   => 'features',		
	);

	$features = [];

	foreach (get_posts($args) as $post) {
		$feature['title'] = $post->post_title; 
		$feature['text'] = $post->post_content;
		$feature['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );


		$features[] = $feature;
		
	}
	
	return $features;

}
// var_dump(getFeatures());







