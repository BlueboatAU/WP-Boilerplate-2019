<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boilerplate
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="post-<?php the_ID(); ?>" <?php post_class('site-main'); ?>>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/pages/page', get_post_field( 'post_name' ) );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();