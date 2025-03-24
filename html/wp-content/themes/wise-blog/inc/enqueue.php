<?php

/**
 * Enqueue scripts and styles.
 */
function wise_blog_scripts() {

// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'wise-blog-fonts', wptt_get_webfont_url( wise_blog_fonts_url() ), array(), null );

	// Slick style.
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.min.css', array(), '1.8.0' );

	// Fontawesome style.
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.7.2' );

	// blocks.
	wp_enqueue_style( 'wise-blog-blocks-style', get_template_directory_uri() . '/assets/css/blocks.min.css' );

	// style.
	wp_enqueue_style( 'wise-blog-style', get_template_directory_uri() . '/style.css', array(), WISE_BLOG_VERSION );

	// navigation.
	wp_enqueue_script( 'wise-blog-navigation', get_template_directory_uri() . '/assets/js/navigation.min.js', array(), WISE_BLOG_VERSION, true );

	// Slick script.
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '1.8.0', true );

	// Custom script.
	wp_enqueue_script( 'wise-blog-custom-script', get_template_directory_uri() . '/assets/js/custom.min.js', array( 'jquery' ), WISE_BLOG_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'wise_blog_scripts' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wise_blog_customize_preview_js() {
	wp_enqueue_script( 'wise-blog-customizer', get_template_directory_uri() . '/assets/js/customizer.min.js', array( 'customize-preview' ), WISE_BLOG_VERSION, true );
}
add_action( 'customize_preview_init', 'wise_blog_customize_preview_js' );

/**
 * Binds JS handlers for Customizer controls.
 */
function wise_blog_customize_control_js() {
	wp_enqueue_style( 'wise-blog-customize-style', get_template_directory_uri() . '/assets/css/customize-controls.min.css', array(), '1.0.0' );
	wp_enqueue_script( 'wise-blog-customize-control', get_template_directory_uri() . '/assets/js/customize-control.min.js', array( 'jquery', 'customize-controls' ), '1.0.0', true );
	$localized_data = array(
		'refresh_msg' => esc_html__( 'Refresh the page after Save and Publish.', 'wise-blog' ),
		'reset_msg'   => esc_html__( 'Warning!!! This will reset all the settings. Refresh the page after Save and Publish to reset all.', 'wise-blog' ),
	);
	wp_localize_script( 'wise-blog-customize-control', 'localized_data', $localized_data );
}
add_action( 'customize_controls_enqueue_scripts', 'wise_blog_customize_control_js' );
