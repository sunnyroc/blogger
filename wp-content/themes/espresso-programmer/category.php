<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

get_header(); ?>

<?php get_sidebar('menu'); ?>

<div class="posts" role="main">
	<?php if ( have_posts() ) : ?>
		<header class="archive-info">
			<?php the_archive_title( '<h1>', '</h1>'); ?>
			<?php the_archive_description( '<div class="archive-info-meta">', '</div>'); ?>
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