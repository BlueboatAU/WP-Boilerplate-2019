<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boilerplate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">

		<nav class="header-nav" role="navigation">
		  <div class="container">
			  <div class="row justify-content-between align-items-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-1',
					'depth'             => 2,
					'container'         => '',
					'menu_id' 			=> 'main-menu'
				) );
				?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
