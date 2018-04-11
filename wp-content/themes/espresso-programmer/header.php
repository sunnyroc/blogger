<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="posts">
 *
 * @package Espresso_Programmer
 * @since Espresso Programmer 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">

<header id="header">
	<nav class="blog-header">
		<div class="blog-home">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
			   title="<?php echo esc_attr( bloginfo( 'name' ) ); ?>"
			   rel="home">
				<img src="<?php echo esc_url( get_header_image() ); ?>"
					 alt="<?php echo esc_attr( bloginfo( 'name' ) ); ?>"
					 class="blog-logo" />
			</a>
		</div>
		<div class="blog-info">
			<div class="blog-name">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div>
			<div class="blog-description"><?php bloginfo( 'description' ); ?></div>
		</div>
	</nav>
</header>