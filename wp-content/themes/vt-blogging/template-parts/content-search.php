<div id="post-<?php the_ID(); ?>" <?php post_class('clear'); ?>>	

	<div class="entry-overview">

		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="entry-meta clear">

			<span class="entry-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?></a> Posted by <?php the_author_posts_link(); ?></span> 
			&#8212; <span class="entry-date"><?php echo get_the_date(); ?></span> 
			in <span class="entry-category"><?php vt_blogging_first_category(); ?></span> 
		
		</div><!-- .entry-meta -->

		<?php if ( has_post_thumbnail() ) { ?>
			<a class="thumbnail-link" href="<?php the_permalink(); ?>">
				<div class="thumbnail-wrap">
					<?php 
						the_post_thumbnail('vt_blogging_thumb');
					?>
				</div><!-- .thumbnail-wrap -->
			</a>
		<?php } ?>	
	
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<span class="read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'vt-blogging'); ?> &raquo;</a></span>
		</div><!-- .entry-summary -->

	</div><!-- .entry-overview -->

</div><!-- #post-<?php the_ID(); ?> -->