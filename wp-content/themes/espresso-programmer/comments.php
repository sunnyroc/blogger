<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<section class="comments">
	<?php comment_form(); ?>

	<?php if ( have_comments() ) : ?>
		<header class="comments-title">
			<?php
			printf( _n( '%1$d reply', '%1$d replies', get_comments_number(), 'espresso-programmer' ), number_format_i18n( get_comments_number() ) );
			?>
		</header>

		<ul>
			<?php wp_list_comments( array( 'type' => 'comment', 'style' => 'ul' ) ); ?>
		</ul>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="comments-navigation">
				<div class="comments-navigation-left">
					<?php previous_comments_link( __( 'Older Comments', 'espresso-programmer' ) ); ?>
				</div>
				<div class="comments-navigation-right">
					<?php next_comments_link( __( 'Newer Comments', 'espresso-programmer' ) ); ?>
				</div>
			</nav>
		<?php endif; ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.' , 'espresso-programmer' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>
</section>