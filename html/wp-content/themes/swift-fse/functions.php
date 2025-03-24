<?php
/**
 * Theme bootstrap functions.
 *
 * @package Swift FSE
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'SWIFT_FSE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SWIFT_FSE_VERSION', '1.0.1' );
}

if ( ! function_exists( 'swift_fse_asset_url' ) ) {
	/**
	 * Return swift-fse theme folder asset url
	 * 
	 * @param mixed $path
	 * @return string
	 */
	function swift_fse_asset_url( $path ) {
		return trailingslashit( get_stylesheet_directory_uri() ) . 'assets/' . $path;
	}

}

if ( ! function_exists( 'the_swift_fse_asset_url' ) ) {
	/**
	 * Echo swift-fse theme folder asset url
	 * 
	 * @param mixed $path
	 * @return void
	 */
	function the_swift_fse_asset_url( $path ) {
		echo esc_url( swift_fse_asset_url( $path ) );
	}

}

if ( ! function_exists( 'swift_fse_register_block_pattern_category' ) ) {
	/**
	 * Register swift-fse pattern category
	 * 
	 * @return void
	 */
	function swift_fse_register_block_pattern_category() {
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category( 'swift-fse', array(
				'label' => __( 'Swift FSE', 'swift-fse' )
			) );
		}
	}

}

add_action( 'init', 'swift_fse_register_block_pattern_category' );


function swift_fse_template_part_areas( array $areas ) {
	$areas[] = array(
		'area' => 'posts',
		'area_tag' => 'section',
		'label' => __( 'Posts', 'swift-fse' ),
		'description' => __( 'Displaying posts.', 'swift-fse' ),
		'icon' => 'layout'
	);

	$areas[] = array(
		'area' => 'sidebar',
		'area_tag' => 'aside',
		'label' => __( 'Sidebar', 'swift-fse' ),
		'description' => __( 'Sidebar', 'swift-fse' ),
		'icon' => 'layout'
	);

	return $areas;
}

add_filter( 'default_wp_template_part_areas', 'swift_fse_template_part_areas' );

//
// Theme dashboard hook
//
if ( ! function_exists( 'swift_fse_theme_screenshot' ) ) {
	function swift_fse_theme_screenshot() {
		return trailingslashit( get_stylesheet_directory_uri() ) . 'screenshot.png';
	}

}
add_filter( 'plover_welcome_theme_screenshot', 'swift_fse_theme_screenshot' );

if ( ! function_exists( 'swift_fse_support_forum_url' ) ) {
	function swift_fse_support_forum_url() {
		return 'https://wordpress.org/support/theme/swift-fse/';
	}

}
add_filter( 'plover_theme_support_forum_url', 'swift_fse_support_forum_url' );

if ( ! function_exists( 'swift_fse_rate_us_url' ) ) {
	function swift_fse_rate_us_url() {
		return 'https://wordpress.org/support/theme/swift-fse/reviews/?rate=5#new-post';
	}

}
add_filter( 'plover_theme_rate_us_url', 'swift_fse_rate_us_url' );

if ( ! function_exists( 'swift_fse_default_color_mode' ) ) {
	function swift_fse_default_color_mode() {
		return 'light';
	}
}
add_filter( 'plover_theme_default_color_mode', 'swift_fse_default_color_mode' );

if ( ! function_exists( 'swift_fse_enqueue_main_style' ) ) {
	function swift_fse_enqueue_main_style() {
		wp_enqueue_style( 'swift-fse-style', get_stylesheet_uri(), array(), SWIFT_FSE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'swift_fse_enqueue_main_style' );
