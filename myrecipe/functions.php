<?php

function myrecipe_scripts() {

    // Theme stylesheet
    //wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Add main-style, used in the main stylesheet

    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    if(is_page("about")) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css');
    }
    if(is_page("contact")) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css');
    }
    if(is_page("recipes")) {
        wp_enqueue_style('recipes-style', get_template_directory_uri() . '/assets/css/recipes.css');
    }
    if(is_page("desserts")) {
        wp_enqueue_style('desserts-style', get_template_directory_uri() . '/assets/css/desserts.css');
    }
    if(is_page("price-list")) {
        wp_enqueue_style('dprice-listesserts-style', get_template_directory_uri() . '/assets/css/price-list.css');
    }
    if(is_front_page()) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/index.css');
    }   
 }

 add_action('wp_enqueue_scripts', 'myrecipe_scripts');


function mytheme_custom_logo_setup() {

    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'mytheme_custom_logo_setup');


function mytheme_register_nav_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'side-menu' => __('Side Menu'),
			'footer-menu' => __('Footer Menu')
		)
	);
}
add_action('init', 'mytheme_register_nav_menus');


function mytheme_featured_image() {
	//add_theme_support('post-thumbnails');
    add_theme_support('post-thumbnails', array('post'));
}
add_action('after_setup_theme', 'mytheme_featured_image');