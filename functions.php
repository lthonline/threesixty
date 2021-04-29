<?php
/**
 * Theme Functions
 *  
 * @package Threesixty 
 */

if ( ! defined( 'THREESIXTY_DIR_PATH' ) ) {
	define( 'THREESIXTY_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'THREESIXTY_DIR_URI' ) ) {
	define( 'THREESIXTY_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'THREESIXTY_BUILD_URI' ) ) {
	define( 'THREESIXTY_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'THREESIXTY_BUILD_PATH' ) ) {
	define( 'THREESIXTY_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'THREESIXTY_BUILD_JS_URI' ) ) {
	define( 'THREESIXTY_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'THREESIXTY_BUILD_JS_DIR_PATH' ) ) {
	define( 'THREESIXTY_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'THREESIXTY_BUILD_IMG_URI' ) ) {
	define( 'THREESIXTY_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'THREESIXTY_BUILD_CSS_URI' ) ) {
	define( 'THREESIXTY_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'THREESIXTY_BUILD_CSS_DIR_PATH' ) ) {
	define( 'THREESIXTY_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'THREESIXTY_BUILD_LIB_URI' ) ) {
	define( 'THREESIXTY_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

require_once THREESIXTY_DIR_PATH . '/inc/helpers/autoloader.php';
require_once THREESIXTY_DIR_PATH . '/inc/helpers/template-tags.php';

function threesixty_get_theme_instance() {
	\THREESIXTY_THEME\Inc\THREESIXTY_THEME::get_instance();
}

threesixty_get_theme_instance();

if ( function_exists( 'fly_add_image_size' ) ) {
    fly_add_image_size( 'blog_single_img', 800, 300, true );
}
?>




