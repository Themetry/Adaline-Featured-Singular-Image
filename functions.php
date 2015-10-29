<?php
/**
 * Adaline Featured Singular Image functions and definitions
 *
 * @package Adaline Featured Singular Image
 */

if ( ! function_exists( 'adaline_featured_singular_image_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function adaline_featured_singular_image_setup() {

	/**
	 * Add additional image size for featured images on singular pages.
	 *
	 * Maximum of 840px wide, pretty much unlimited height.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_image_size( 'singular-image', 840, 9999, true );

}
endif; // adaline_featured_singular_image_setup
add_action( 'after_setup_theme', 'adaline_featured_singular_image_setup' );

/**
 * Enqueue parent theme stylesheet.
 */
function adaline_featured_singular_image_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'adaline_featured_singular_image_enqueue_styles' );
