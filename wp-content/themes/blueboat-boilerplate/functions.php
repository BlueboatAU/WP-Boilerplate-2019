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
	// wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );

	wp_enqueue_style( 'blueboat-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), null, true );

	// wp_enqueue_script( 'blueboat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'blueboat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'blueboat_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

/**
 * Changes to basic wordpress
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Register Custom Navigation Walker
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