<?php
/**
 *
 *	The template for displaying content on the blog page (usually index.php).
 *
 *	@package Decode
 *	@subpackage modern-decode
 */
?>
<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tha_entry_top(); ?>
	<?php get_template_part( 'template-parts/content', 'entry-header' ); ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'modern-decode' ) ); ?>
	</div><!-- .entry-content -->
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'modern-decode' ), 'after' => '</div>' ) ); ?>
	<footer class="entry-footer">
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<?php if( get_theme_mod( 'show_leave_a_comment_link', true ) == true ): ?>
				<div class="comments-link" data-customizer="leave-a-comment">
					<?php comments_popup_link( __( 'Leave a comment', 'modern-decode' ), __( '1 Comment', 'modern-decode' ), __( '% Comments', 'modern-decode' ) ); ?>
				</div>
			<?php else: ?>
				<div class="comments-link">
					<?php comments_popup_link( '', __( '1 Comment', 'modern-decode' ), __( '% Comments', 'modern-decode' ) ); ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<?php edit_post_link( __( 'Edit', 'modern-decode' ), '<div class="edit-link">', '</div>' ); ?>
	</footer><!-- .entry-footer -->
	<?php tha_entry_bottom(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php tha_entry_after(); ?>