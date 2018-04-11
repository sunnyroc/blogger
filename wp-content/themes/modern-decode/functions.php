<?php
/**
 *    Require Once
 */
require_once( 'includes/customizer.php' );

/**
 *    Theme Setup
 */
if ( ! function_exists( 'modern_decode_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'modern_decode_theme_setup' );
	function modern_decode_theme_setup() {
		// Load Theme Textdomain
		load_theme_textdomain( 'modern-decode', esc_url( get_stylesheet_directory_uri() ) . '/languages' );


		// Custom Logo
		add_theme_support( 'custom-logo', array(
			'height'      => 314,
			'width'       => 90,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );


		// Add Image Size
		add_image_size( 'modern-decode-blog', 788, 472, true );
	}
}

/**
 *    Enqueue Styles
 */
if ( ! function_exists( 'modern_decode_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'modern_decode_enqueue_styles' );
	function modern_decode_enqueue_styles() {
		// WP Enqueue Style
		wp_enqueue_style( 'decode-style', get_template_directory_uri() . '/style.css', array(), '3.11.0', 'all' );
		wp_enqueue_style( 'modern-decode-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'decode-style' ), '1.0.0', 'all' );
		wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.5.0', 'all' );
	}
}

/**
 *    Enqueue Scripts
 */
add_action( 'wp_enqueue_scripts', 'modern_decode_enqueue_scripts' );
function modern_decode_enqueue_scripts() {
	// WP Enqueue Scripts
	wp_enqueue_script( 'slimscroll', get_stylesheet_directory_uri() . '/assets/js/slimscroll.min.js', array( 'jquery' ), '1.3.6', true );
	wp_enqueue_script( 'modern-decode-plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'modern-decode-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );
}

add_action( 'decode_header_image', 'modern_decode_create_header_image' );
function modern_decode_create_header_image() {

	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );

	if ( $image ) {
		$output = '';

		$output .= '<a class="site-logo-link" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home">';
		$output .= '<img class="site-logo" src="' . esc_url( $image[0] ) . '" alt="">';
		$output .= '</a><!--/.site-logo-link-->';

		echo $output;
	} else {
		if ( get_theme_mod( 'show_site_title', true ) == true ) {
			$output = '';

			$output .= '<h1 class="site-title">';
			$output .= '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';
			$output .= '</h1><!--/.site-title-->';

			echo $output;
		}
	}
}
