<?php 

//functions.php

add_action( 'wp_enqueue_scripts', 'enqueue_theme_style' );

function enqueue_theme_style() {

//Theme stylesheets 
wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/css/style.css' );
//wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri().'/css/stylesheet.css' );

//Theme stylesheets
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css' );

//Scripts Files
//wp_enqueue_script( 'owl', get_stylesheet_directory_uri().'/js/jquery-3.1.1.min.js' );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js' ); 
}


function remove_default_sidebar(){
	unregister_sidebar('sidebar-1');
	unregister_sidebar('sidebar-2');
}
add_action('widgets_init','remove_default_sidebar',11);


function arphabet_widgets_init() {
	
	register_sidebar( array(
		'name'          => 'Header Top Content',
		'id'            => 'header-top-content',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Header Mobile Info',
		'id'            => 'header-mobile-info',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Header Logo',
		'id'            => 'header-logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Header Search Button',
		'id'            => 'header-search-button',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Header Button',
		'id'            => 'header-button',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	
	register_sidebar( array(
		'name'          => 'Footer Logo',
		'id'            => 'footer-logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Contact Details',
		'id'            => 'footer-contact-details',
		'before_widget' => '<div class="">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer About Navigation',
		'id'            => 'footer-about-navigation',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Button And Image',
		'id'            => 'footer-button-and-image',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Copyright Text',
		'id'            => 'copyright-text',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>
