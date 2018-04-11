<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

get_header(); ?>

<?php get_sidebar('menu'); ?>

<div class="posts" role="main">
	<article class="post">
		<header class="post-info">
			<h1><?php _e( 'Not Found', 'espresso-programmer' ); ?></h1>
		</header>
		<div class="post-content" itemprop="articleBody">
			<h2><?php _e( "This is somewhat embarrassing, isn't it?", 'espresso-programmer' ); ?></h2>
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'espresso-programmer' ); ?></p>
			<div class="posts-search">
				<?php get_search_form(); ?>
			</div>
		</div>
	</article>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>