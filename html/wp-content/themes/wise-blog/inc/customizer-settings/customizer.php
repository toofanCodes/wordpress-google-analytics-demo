<?php
/**
 * Wise Blog Theme Customizer
 *
 * @package Wise Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wise_blog_customize_register( $wp_customize ) {

	// Custom Controls.
	require get_template_directory() . '/inc/customizer-settings/custom-controller.php';

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'wise_blog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'wise_blog_customize_partial_blogdescription',
			)
		);
	}

	// Header text display setting.
	$wp_customize->add_setting(
		'wise_blog_header_text_display',
		array(
			'default'           => true,
			'sanitize_callback' => 'wise_blog_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wise_blog_header_text_display',
		array(
			'section' => 'title_tagline',
			'type'    => 'checkbox',
			'label'   => esc_html__( 'Display Site Title and Tagline', 'wise-blog' ),
		)
	);

	// Archive Page title.
	$wp_customize->add_setting(
		'wise_blog_archive_page_title',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wise_blog_archive_page_title',
		array(
			'label'           => esc_html__( 'Archive Posts Title', 'wise-blog' ),
			'section'         => 'static_front_page',
			'active_callback' => 'wise_blog_is_latest_posts',
		)
	);

	// Abort if selective refresh is not available.
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'wise_blog_archive_page_title',
			array(
				'selector'            => '.home .site-main h3.section-title',
				'settings'            => 'wise_blog_archive_page_title',
				'container_inclusive' => false,
				'fallback_refresh'    => true,
				'render_callback'     => 'wise_blog_archive_page_title_text_partial',
			)
		);
	}

	/*========================Partial Refresh==============================*/
	if ( ! function_exists( 'wise_blog_archive_page_title_text_partial' ) ) :
		// Archive Page Title.
		function wise_blog_archive_page_title_text_partial() {
			return esc_html( get_theme_mod( 'wise_blog_archive_page_title' ) );
		}
	endif;

	// Archive Page sub title.
	$wp_customize->add_setting(
		'wise_blog_archive_page_subtitle',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wise_blog_archive_page_subtitle',
		array(
			'label'           => esc_html__( 'Archive Posts Sub Title', 'wise-blog' ),
			'section'         => 'static_front_page',
			'active_callback' => 'wise_blog_is_latest_posts',
		)
	);

	// Site tagline color setting.
	$wp_customize->add_setting(
		'wise_blog_header_tagline',
		array(
			'default'           => '#000000',
			'sanitize_callback' => 'wise_blog_sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'wise_blog_header_tagline',
			array(
				'label'   => esc_html__( 'Site tagline Color', 'wise-blog' ),
				'section' => 'colors',
			)
		)
	);

	// Enable Homepage Content.
	$wp_customize->add_setting(
		'wise_blog_enable_frontpage_content',
		array(
			'default'           => false,
			'sanitize_callback' => 'wise_blog_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wise_blog_enable_frontpage_content',
		array(
			'label'           => esc_html__( 'Enable Homepage Content', 'wise-blog' ),
			'description'     => esc_html__( 'Check to enable the selected homepage content on the front page.', 'wise-blog' ),
			'section'         => 'static_front_page',
			'type'            => 'checkbox',
			'active_callback' => 'wise_blog_is_static_homepage_enabled',
		)
	);

	// frontpage customizer section.
	require get_template_directory() . '/inc/customizer-settings/frontpage-customizer/customizer-sections.php';

	// theme options customizer section.
	require get_template_directory() . '/inc/customizer-settings/customizer-hub/theme-options-sections.php';

}
add_action( 'customize_register', 'wise_blog_customize_register' );

// Active callback.
require get_template_directory() . '/inc/active-callback.php';

// Sanitize callback.
require get_template_directory() . '/inc/sanitize-callback.php';

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wise_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wise_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

