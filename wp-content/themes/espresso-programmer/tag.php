<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
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
			<h1><?php printf( __( 'Tag Archives: %s', 'espresso-programmer' ), single_tag_title( '', false ) ); ?></h1>

			<?php if ( tag_description() ) : // Show an optional tag description ?>
				<div class="archive-info-meta"><?php echo tag_description(); ?></div>
			<?php endif; ?>
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