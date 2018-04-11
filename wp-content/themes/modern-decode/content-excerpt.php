<?php
/**
 *	The template for displaying excerpts of content.
 *
 *	@package Decode
 *	@subpackage modern-decode
 */
?>

<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
	<?php tha_entry_top(); ?>
	<?php get_template_part( 'template-parts/content', 'entry-header' ); ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<footer class="entry-footer clearfix">
		<a class="read-more-link" href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><span class="more-link-text"><?php esc_html_e( 'Read More', 'modern-decode' ); ?></span><span class="more-link-circle"><i class="fa fa-long-arrow-right"></i></span></a>
	</footer><!--/.entry-footer.clearfix-->
	<?php tha_entry_bottom(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php tha_entry_after(); ?>