<?php
/**
 * Theme Functions
 *  
 * @package Threesixty 
 */
function theme_styles() {
    // WP main style
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'theme_styles');

if (!defined('THREESIXTY_DIR_PATH')) {
    define('THREESIXTY_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('THREESIXTY_DIR_URI')) {
    define('THREESIXTY_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('THREESIXTY_BUILD_URI')) {
    define('THREESIXTY_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
}

if (!defined('THREESIXTY_BUILD_PATH')) {
    define('THREESIXTY_BUILD_PATH', untrailingslashit(get_template_directory()) . '/assets/build');
}

if (!defined('THREESIXTY_BUILD_JS_URI')) {
    define('THREESIXTY_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if (!defined('THREESIXTY_BUILD_JS_DIR_PATH')) {
    define('THREESIXTY_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}

if (!defined('THREESIXTY_BUILD_IMG_URI')) {
    define('THREESIXTY_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}

if (!defined('THREESIXTY_BUILD_CSS_URI')) {
    define('THREESIXTY_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if (!defined('THREESIXTY_BUILD_CSS_DIR_PATH')) {
    define('THREESIXTY_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}

if (!defined('THREESIXTY_BUILD_LIB_URI')) {
    define('THREESIXTY_BUILD_LIB_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/library');
}

require_once THREESIXTY_DIR_PATH . '/inc/helpers/autoloader.php';
require_once THREESIXTY_DIR_PATH . '/inc/helpers/template-tags.php';

function threesixty_get_theme_instance() {
    \THREESIXTY_THEME\Inc\THREESIXTY_THEME::get_instance();
}

threesixty_get_theme_instance();

if (function_exists('fly_add_image_size')) {
    fly_add_image_size('blog_single_img', 800, 300, true);
}

function threesixty_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer 1', 'threesixty'),
        'id' => 'footer-1-widget',
        'description' => __('Footer 1 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'threesixty'),
        'id' => 'footer-2-widget',
        'description' => __('Footer 2 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'threesixty'),
        'id' => 'footer-3-widget',
        'description' => __('Footer 3 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer 4', 'threesixty'),
        'id' => 'footer-4-widget',
        'description' => __('Footer 4 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer 5', 'threesixty'),
        'id' => 'footer-5-widget',
        'description' => __('Footer 5 widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Social Icons',
        'id' => 'social-icons-widget',
        'before_widget' => '<div class="top-head-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="title-widget">',
        'after_title' => '</h5>',
    ));
    
    register_sidebar(array(
        'name' => 'Copyright',
        'id' => 'copyright-widget',
        'before_widget' => '<div class="top-head-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-widget">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => 'Social Fixed Icons',
        'id' => 'social-fixed-icons-widget',
        'before_widget' => '<div class="top-head-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-widget">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => 'Chat',
        'id' => 'chat-widget',
        'before_widget' => '<div class="top-head-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-widget">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Contact Section Title', 'threesixty'),
        'id' => 'contact-sec-title-widget',
        'description' => __('Contact section title widget.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Contact Info', 'threesixty'),
        'id' => 'contact-info-widget',
        'description' => __('Contact information widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Contact Form', 'threesixty'),
        'id' => 'contact-form-widget',
        'description' => __('Contact form widget position.', 'threesixty'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'threesixty_widgets_init');
