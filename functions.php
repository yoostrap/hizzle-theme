<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hizzle
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'HIZZLE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function hizzle_setup() {
	add_editor_style( './assets/css/style.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "hizzle-$block_name",
			'src'    => get_theme_file_uri( "assets/css/$block_name-block.css" ),
			'path'   => get_theme_file_path( "assets/css/$block_name-block.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'hizzle_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function hizzle_styles() {
	$version = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? time() : HIZZLE_VERSION;

	wp_enqueue_style(
		'hizzle-styles',
		get_theme_file_uri( 'assets/css/style.css' ),
		[],
		$version
	);

	if ( function_exists( 'is_woocommerce' ) && ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ) {
		wp_enqueue_style(
			'hizzle-woocommerce',
			get_theme_file_uri( 'assets/css/woocommerce.css' ),
			[],
			$version
		);
	}
}
add_action( 'wp_enqueue_scripts', 'hizzle_styles' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );
