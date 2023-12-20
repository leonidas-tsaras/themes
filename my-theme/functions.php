<?php

function my_theme_scripts() {
    // Add main-style, used in the main stylesheet
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    if(is_front_page())
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css');
    
    if(is_page("about"))
        wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about-us.css');
 
    if(is_page("gallery"))
        wp_enqueue_style('gallery-style', get_template_directory_uri() . '/assets/css/gallery.css');

    if(is_page("amenities"))
        wp_enqueue_style('amenities-style', get_template_directory_uri() . '/assets/css/amenities.css');

    if(is_page("contact"))
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css');   
    // Theme stylesheet
    //wp_enqueue_style('theme-style', get_stylesheet_uri());

 }

add_action('wp_enqueue_scripts', 'my_theme_scripts');


function my_theme_custom_logo_setup() {
   add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'my_theme_custom_logo_setup');


function my_theme_register_nav_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'side-menu' => __('Side Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'my_theme_register_nav_menus');


function my_theme_featured_image() {
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_featured_image');