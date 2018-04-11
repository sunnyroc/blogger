<?php
/**
 *	Setup
 */
if( !function_exists( 'modern_decode_customizer' ) ) {
	add_action( 'customize_register', 'modern_decode_customizer', 50 );
	function modern_decode_customizer( $wp_customize ) {

		// Get Settings
		$wp_customize->get_setting( 'use_excerpts' )->default = true;
		$wp_customize->get_setting( 'show_categories' )->default = true;
		$wp_customize->get_setting( 'show_entry_date_on_excerpts' )->default = true;
		$wp_customize->get_setting( 'show_featured_images_on_singles' )->default = true;
		$wp_customize->get_setting( 'show_featured_images_on_excerpts' )->default = true;
		$wp_customize->get_setting( 'background_color' )->default = '#ffffff';

		// remove locked upsells
		$wp_customize->remove_section('decode_footer_widgets_upsell');
		$wp_customize->remove_section('decode_pro_premium_skins_upsell');
		$wp_customize->remove_control('decode_enable_related_posts');
		$wp_customize->remove_setting('decode_enable_related_posts');
		$wp_customize->remove_control('decode_ss_all');
		$wp_customize->remove_setting('decode_ss_all');
		$wp_customize->remove_control('decode_header_options_navigation_menu_position');
		$wp_customize->remove_setting('decode_header_options_navigation_menu_position');

	}
}

/**
 *	Dequeue Scripts
 */
add_action( 'wp_print_scripts', 'modern_decode_dequeue_scripts', 11 );
function modern_decode_dequeue_scripts() {
	wp_dequeue_script( 'decode-customizer' );
}

/**
 *	Customizer Live Preview
 */
function modern_decode_customizer_live_preview() {
	wp_enqueue_script( 'mdoern-decode-customizer-live-preview', get_stylesheet_directory_uri() . '/assets/js/customizer-live-preview.js', array( 'customize-preview', 'jquery' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'modern_decode_customizer_live_preview' );