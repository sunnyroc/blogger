<?php
/**
 *    The main template file.
 *
 *    This is the most generic template file in a WordPress theme
 *    and one of the two required files for a theme (the other being style.css).
 *    It is used to display a page when nothing more specific matches a query.
 *    E.g., it puts together the home page when no home.php file exists.
 *    Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Decode
 * @subpackage modern-decode
 */
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					if ( get_theme_mod( 'use_excerpts', true ) == true && ! is_sticky() ) {
						get_template_part( 'content', 'excerpt' );
					} else {
						get_template_part( 'content', get_post_format() );
					}
					?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</main><!-- #main -->
		<?php
		$get_query_var = max( 1, get_query_var( 'paged' ) );
		$max_num_pages = absint( $wp_query->max_num_pages );
		?>
		<?php if ( $max_num_pages > 0 ): ?>
			<div class="paginate-links">
				<span class="paginate-links-text"><?php printf( 'Page %s of %s', $get_query_var, $max_num_pages ); ?></span>
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'    => '?paged=%#%',
					'current'   => $get_query_var,
					'total'     => $max_num_pages,
					'prev_text' => '<i class="fa fa-angle-double-left"></i>',
					'next_text' => '<i class="fa fa-angle-double-right"></i>',
				) );
				?>
			</div><!--/.paginate-links-->
		<?php endif; ?>
	</section><!-- #primary -->
<?php get_footer(); ?>