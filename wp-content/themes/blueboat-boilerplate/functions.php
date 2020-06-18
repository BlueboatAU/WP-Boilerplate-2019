<?php
/**
 * Blueboat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blueboat
 */

/**
 * Custom template tags for _s theme.
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Enqueue scripts and styles.
 */
function blueboat_scripts() {

	$themecsspath = get_stylesheet_uri();
	$style_ver = filemtime( $themecsspath );

	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), $style_ver );

	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'blueboat_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Register Custom Bootstrap Navigation Walker
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


/**
 * Custom Post Types and Taxonomies
 */
require get_template_directory() . '/inc/posts-and-taxonomies.php';


 /* ACF Fields and Options Pages
 */
require get_template_directory() . '/inc/acf.php';


 /* Basic WP Setup (remove comments, no gutenberg etc.)
 */
require get_template_directory() . '/inc/basic-wp-setup.php';


 /* BB Lazy Load script
 */
// require get_template_directory() . '/inc/lazyload.php';
