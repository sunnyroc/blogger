<?php
/**
 * The template for displaying Archive pages
 *
 * @subpackage Sketchpad
 * @since      Sketchpad 1.7
 */

get_header(); ?>
	<main>
		<h2 class="page-title">
			<?php the_archive_title(); ?>
		</h2>
		<?php if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; ?>
			<div class="pagination"><!--page pagination-->
				<?php global $wp_query;
				$big = 999999999; // need an unlikely integer
				echo paginate_links( array(
					'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'    => '?paged=%#%',
					'current'   => max( 1, get_query_var( 'paged' ) ),
					'total'     => $wp_query->max_num_pages,
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
				) ); ?>
			</div><!--.pagination-->
		<?php else : ?>
			<article <?php post_class(); ?>>
				<header>
					<h3 class="post-title"><?php _e( 'Not Found...', 'sketchpad' ); ?></h3>
				</header>
				<p><?php _e( 'Try using the search form', 'sketchpad' ); ?></p>
				<?php echo get_search_form(); ?>
			</article>
		<?php endif; /*have_posts*/ ?>
	</main>
<?php get_sidebar();
get_footer();
