<?php
/**
 * Travel Cart functions and definitions
 *
 * @package Travel Cart
 * @since 1.0
 */

if ( ! function_exists( 'travel_cart_support' ) ) :
	function travel_cart_support() {

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'travel_cart_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'travel_cart_styles' ) ) :
	function travel_cart_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('travel-cart-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('travel-cart-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('travel-cart-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
	}
endif;
add_action( 'wp_enqueue_scripts', 'travel_cart_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

?>