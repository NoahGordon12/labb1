<?php
 
function load_stylesheets() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css' );
    wp_enqueue_style( 'font', get_stylesheet_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.js' );
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js' );
    
    
}
 
add_action('wp_enqueue_scripts', 'load_stylesheets');
 
add_theme_support( 'post-thumbnails' );


function register_menus() {
    register_nav_menus( array(
        'general' => 'General',
        'side-menu' => 'Side Menu'
/*         'main-menu' => __('Main Menu', 'text_domain'),
        'mobile-menu' => __('Mobile Menu', 'text_domain'),
        'undersida-menu' => __('Undersida Menu', 'text_domain'),
        'sidebar-menu' => __('Sidebar Menu', 'text_domain') */
    ) );
}



add_action('after_setup_theme', 'register_menus');

function ScanWPostFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','ScanWPostFilter');