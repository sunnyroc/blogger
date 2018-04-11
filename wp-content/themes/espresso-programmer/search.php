<?php
/**
 * The template for displaying Search Results pages
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

get_header(); ?>

<?php get_sidebar('menu'); ?>

<div class="posts" role="main">
	<?php if ( have_posts() ) : ?>
		<header class="post-info">
			<h1><?php printf( __( 'Search Results for: %s', 'espresso-programmer' ), get_search_query() ); ?></h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>

		<?php get_template_part('navigation'); ?>

	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>