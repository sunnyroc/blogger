<?php
/**
 *	The template for displaying author pages.
 *
 *	Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 *	@package Decode
 *	@subpackage modern-decode
 */
get_header(); ?>
<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">		
			<?php if ( get_the_author_meta( 'first_name' ) && get_the_author_meta( 'last_name' ) ) : ?>
			<?php decode_author_section(); ?>
		<?php else : ?>
		<h1 class="page-title">
		<?php printf( __( 'Author: %s', 'modern-decode' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?>
		</h1>
		<?php endif; ?>
		</header><!-- .page-header -->
		<?php while ( have_posts() ) : the_post(); ?>
			<?php 
			if ( get_theme_mod( 'use_excerpts_on_archives', true ) == true ) : 
				get_template_part( 'content', 'excerpt' );
			else :
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			endif;
			?>
		<?php endwhile; else : ?>
			<?php get_template_part( 'content-none', 'none' ); ?>
		<?php endif; ?>
	</main><!-- #main -->
	<?php
	$get_query_var = max( 1, get_query_var('paged') );
	$max_num_pages = $wp_query->max_num_pages;
	?>
	<?php if( $max_num_pages > 0 ): ?>
		<div class="paginate-links">
			<span class="paginate-links-text"><?php printf( 'Page %s of %s', $get_query_var, $max_num_pages ); ?></span>
			<?php
			global $wp_query;
			$big = 999999999;
			echo paginate_links( array(
				'base'		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'	=> '?paged=%#%',
				'current'	=> $get_query_var,
				'total'		=> $max_num_pages,
				'prev_text'	=> '<i class="fa fa-angle-double-left"></i>',
				'next_text'	=> '<i class="fa fa-angle-double-right"></i>'
			) );
			?>
		</div><!--/.paginate-links-->
	<?php endif; ?>
</section><!-- #primary -->
<?php get_footer(); ?>