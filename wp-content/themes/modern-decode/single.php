<?php
/**
 *	The template for displaying all single posts.
 *
 *	@package Decode
 *	@subpackage modern-decode
 */
get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<?php the_post_navigation(); ?>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>