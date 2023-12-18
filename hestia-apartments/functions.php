<?php

function hestia_scripts() {
    // Theme stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Add main-style, used in the main stylesheet
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js');
 
    if(is_front_page()) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css');        
    }

    if(is_page('contact')) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css');
    }

    if(is_page('about')) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css');
    }    

    if(is_page('location')) {
        wp_enqueue_style('location-style', get_template_directory_uri() . '/assets/css/location.css');
    }  

    if(is_page('apartments')) {
        wp_enqueue_style('apartments-style', get_template_directory_uri() . '/assets/css/apartments.css');
        wp_enqueue_style('slider-style', get_template_directory_uri() . '/assets/css/slider.css');
        wp_enqueue_script('slider-script', get_template_directory_uri() . '/assets/js/slider.js');
    }      

 }
 add_action('wp_enqueue_scripts', 'hestia_scripts' );  

 //menus
 function hestia_register_nav_menus() {

	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'side-menu' => __('Side Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'hestia_register_nav_menus');

//custom logo
function hestia_custom_logo_setup() {
   $defaults = array(

      'header-text' => array('site-title', 'site-description')
   );
   add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'hestia_custom_logo_setup');

//featured image
function hestia_featured_image() {
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'hestia_featured_image');

//Title Tag, This feature enables plugins and themes to manage the document title tag.
function hestia_title_tag() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'hestia_title_tag');



 