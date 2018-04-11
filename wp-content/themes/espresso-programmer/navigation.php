<?php
/**
 * The template used to navigate between main loop pages
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

if ( !(is_single() || is_page()) ) : ?>
	<nav class="posts-navigation">
		<div class="posts-navigation-left">
			<?php if( get_next_posts_link() ) :
				next_posts_link( __( 'Older Posts', 'espresso-programmer' ) );
			endif; ?>
		</div>
		<div class="posts-navigation-right">
			<?php if( get_previous_posts_link() ) :
				previous_posts_link( __( 'Newer Posts', 'espresso-programmer' ) );
			endif; ?>
		</div>
	</nav>
<?php endif; ?>
