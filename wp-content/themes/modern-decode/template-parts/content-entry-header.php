<?php
/**
 *    The template for displaying the entry header from content.
 *
 * @package    Decode
 * @subpackage modern-decode
 */
?>
<?php $post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'modern-decode-blog' ); ?>
<?php if ( $post_thumbnail && ( get_theme_mod( 'show_featured_images_on_excerpts', true ) == true ) ): ?>
	<header class="entry-header">
		<div class="entry-header-image" style="background-image: url(<?php echo esc_url( $post_thumbnail[0] ); ?>);">
			<div class="header-image-overlay">
				<div class="entry-header-meta">
					<?php if ( get_theme_mod( 'show_categories', true ) == true ): ?>
						<span class="header-meta-categories"><?php the_category( ', ' ); ?></span>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'show_entry_date_on_excerpts', true ) == true ): ?>
						<span class="header-meta"><i class="fa fa-calendar-o"></i><?php echo esc_html( get_the_time( get_option( 'date_format' ) ) ); ?></span>
					<?php endif; ?>
					<span class="header-meta"><i class="fa fa-user"></i><?php echo esc_html( get_the_author() ); ?></span>
					<span class="header-meta"><i class="fa fa-comment"></i></i><a href="<?php global $post; echo get_comments_link($post->ID); ?>"><?php comments_number( __( 'No comments', 'modern-decode' ), __( 'One comment', 'modern-decode' ), __( '% comments', 'modern-decode' ) ); ?></a></span>
				</div><!--/.entry-header-meta-->
			</div><!--/.header-image-overlay-->
		</div><!--/.etrny-header-image-->
		<?php if ( is_singular() ): ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php else: ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
	</header><!--/.entry-header-->
<?php else: ?>
	<header class="entry-header">
		<div class="entry-header-meta">
			<?php if ( get_theme_mod( 'show_categories', true ) == true ): ?>
				<span class="header-meta-categories"><?php the_category( ', ' ); ?></span>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'show_entry_date_on_excerpts', true ) == true ): ?>
				<span class="header-meta"><i class="fa fa-calendar-o"></i><?php echo esc_html( get_the_time( get_option( 'date_format' ) ) ); ?></span>
			<?php endif; ?>
			<span class="header-meta"><i class="fa fa-user"></i><?php echo esc_html( get_the_author() ); ?></span>
			<span class="header-meta"><i class="fa fa-comment"></i></i><a href="<?php global $post; echo get_comments_link($post->ID); ?>"><?php comments_number( __( 'No comments', 'modern-decode' ), __( 'One comment', 'modern-decode' ), __( '% comments', 'modern-decode' ) ); ?></a></span>
		</div><!--/.entry-header-meta-->
		<?php if ( is_singular() ): ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php else: ?>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
	</header><!--/.entry-header-->
<?php endif; ?>