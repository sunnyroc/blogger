<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */
?>

<article class="post">
	<header class="class="post-info">
		<h1><?php _e( 'Nothing Found', 'espresso-programmer' ); ?></h1>
	</header>

	<div class="post-content" itemprop="articleBody">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'espresso-programmer' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'espresso-programmer' ); ?></p>
			<div class="posts-search">
				<?php get_search_form(); ?>
			</div>
		<?php else : ?>
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'espresso-programmer' ); ?></p>
			<div class="posts-search">
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>
	</div>
</article><!-- .post -->
