<?php


// Load Stylesheets
function load_css() 
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),
        false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(),
        false, 'all' );
    wp_enqueue_style('main');

    wp_register_style('cv', get_template_directory_uri() . '/css/cv.css', array(),
        false, 'all' );
    wp_enqueue_style('cv');

    wp_register_style('imageviewer', get_template_directory_uri() . '/css/imageviewer.css', array(),
        false, 'all' );
    wp_enqueue_style('imageviewer');
}
add_action('wp_enqueue_scripts','load_css');

// Load JavaScript
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


// Theme Options
add_theme_support('menus');


// Menus
register_nav_menus(
        
        array(
            
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
            'footer-menu' => 'Footer Menu Location',

        )
);

// Widget Area
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );