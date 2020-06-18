<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blueboat
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

        if ('post' === get_post_type()) :
            ?>
			<div class="entry-meta">
				<?php
                blueboat_posted_on();
                blueboat_posted_by();
                ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php blueboat_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        the_content(sprintf(
                    wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'blueboat'),
                        array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
                    ),
                    get_the_title()
                ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'blueboat'),
            'after'  => '</div>',
        ));
        ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php blueboat_entry_footer(); ?>
	</footer><!-- .entry-footer -->

		</div>
	</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
