<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Boilerplate
 */

get_header();
?>

<div id="primary" class="content-area">
		<main id="post-<?php the_ID(); ?>" <?php post_class('site-main'); ?>>
			<?php
			while ( have_posts() ): the_post();
				get_template_part( 'template-parts/posts/post', get_post_type() );
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
