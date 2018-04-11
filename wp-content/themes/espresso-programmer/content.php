<?php
/**
 * The default template for displaying content
 *
 * Used for both posts and pages.
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */
?>

<article <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
	<header class="post-info">
		<h1>
			<?php if ( is_single() || is_page() ) : ?>
				<?php the_title(); ?>
			<?php else : ?>
				<a href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			<?php endif; ?>
		</h1>
		<?php if ( !is_page() ) : ?>
			<time class="post-time"  datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished">
				<?php the_date(); ?>
			</time>
		<?php endif; ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php
			the_post_thumbnail( 'espresso_programmer_post_thumbnail',
				array( 'itemprop' => 'image', 'class' => 'post-image' )
			);
			?>
		<?php endif; ?>
	</header>

	<div class="post-content" itemprop="articleBody">
		<?php the_content(); ?>

		<?php wp_link_pages(
			array(
				'before' => '<div class="post-pagination"><span class="post-pagination-title">' . __( 'Pages:', 'espresso-programmer' ) . '</span>',
				'after'  => '</div>'
			)
		); ?>
	</div>

	<?php if ( is_single() ) :
		echo '<footer class="post-meta">';
		$categories_list = get_the_category_list( __( ', ', 'espresso-programmer' ) );
		$categories_title = __( 'Categories: ', 'espresso-programmer' );
		if ( $categories_list ) {
			echo '<div class="post-categories"><span class="post-categories-title">' . $categories_title . '</span>' . $categories_list . '</div>';
		}

		$tag_list = get_the_tag_list( '', __( ', ', 'espresso-programmer' ) );
		$tags_title = __( 'Tags: ', 'espresso-programmer' );
		if ( $tag_list ) {
			echo '<div class="post-tags"><span class="post-tags-title">' . $tags_title . '</span>' . $tag_list . '</div>';
		}
		echo '</footer>';
	endif; ?>
</article>

<?php get_template_part('navigation', 'single'); ?>

<?php comments_template(); ?>

