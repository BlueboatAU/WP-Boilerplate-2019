<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boilerplate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="container">
    <div class="row">
        <div class="col-12">

        <header class="entry-header">
            <?php
            if (is_singular()) :
                the_title('<h1 class="entry-title">', '</h1>');
            else :
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'boilerplate'),
                'after'  => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->

		</div>
	</div>
</div>

</article><!-- #post-<?php the_ID(); ?> -->
