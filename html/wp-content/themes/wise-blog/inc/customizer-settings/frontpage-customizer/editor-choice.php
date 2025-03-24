<?php
/**
 * Frontpage Customizer Settings
 *
 * @package Wise Blog
 *
 * Editor Choice Section
 */

$wp_customize->add_section(
	'wise_blog_editor_choice_section',
	array(
		'title' => esc_html__( 'Editor Choice Section', 'wise-blog' ),
		'panel' => 'wise_blog_frontpage_panel',
	)
);

// Editor Choice section enable settings.
$wp_customize->add_setting(
	'wise_blog_editor_choice_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_editor_choice_section_enable',
		array(
			'label'    => esc_html__( 'Enable Editor Choice Section', 'wise-blog' ),
			'type'     => 'checkbox',
			'settings' => 'wise_blog_editor_choice_section_enable',
			'section'  => 'wise_blog_editor_choice_section',
		)
	)
);

// Editor Choice title settings.
$wp_customize->add_setting(
	'wise_blog_editor_choice_title',
	array(
		'default'           => __( 'Editor Choice', 'wise-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'wise_blog_editor_choice_title',
	array(
		'label'           => esc_html__( 'Section Title', 'wise-blog' ),
		'section'         => 'wise_blog_editor_choice_section',
		'active_callback' => 'wise_blog_if_editor_choice_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'wise_blog_editor_choice_title',
		array(
			'selector'            => '.recentpost h3.section-title',
			'settings'            => 'wise_blog_editor_choice_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
			'render_callback'     => 'wise_blog_editor_choice_title_text_partial',
		)
	);
}

// Editor Choice subtitle settings.
$wp_customize->add_setting(
	'wise_blog_editor_choice_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'wise_blog_editor_choice_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'wise-blog' ),
		'section'         => 'wise_blog_editor_choice_section',
		'active_callback' => 'wise_blog_if_editor_choice_enabled',
	)
);

// editor_choice content type settings.
$wp_customize->add_setting(
	'wise_blog_editor_choice_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'wise_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'wise_blog_editor_choice_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'wise-blog' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'wise-blog' ),
		'section'         => 'wise_blog_editor_choice_section',
		'type'            => 'select',
		'active_callback' => 'wise_blog_if_editor_choice_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'wise-blog' ),
			'category' => esc_html__( 'Category', 'wise-blog' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// editor_choice post setting.
	$wp_customize->add_setting(
		'wise_blog_editor_choice_post_' . $i,
		array(
			'sanitize_callback' => 'wise_blog_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'wise_blog_editor_choice_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'wise-blog' ), $i ),
			'section'         => 'wise_blog_editor_choice_section',
			'type'            => 'select',
			'choices'         => wise_blog_get_post_choices(),
			'active_callback' => 'wise_blog_editor_choice_section_content_type_post_enabled',
		)
	);

}

// editor_choice category setting.
$wp_customize->add_setting(
	'wise_blog_editor_choice_category',
	array(
		'sanitize_callback' => 'wise_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'wise_blog_editor_choice_category',
	array(
		'label'           => esc_html__( 'Category', 'wise-blog' ),
		'section'         => 'wise_blog_editor_choice_section',
		'type'            => 'select',
		'choices'         => wise_blog_get_post_cat_choices(),
		'active_callback' => 'wise_blog_editor_choice_section_content_type_category_enabled',
	)
);

/*========================Partial Refresh==============================*/
if ( ! function_exists( 'wise_blog_editor_choice_title_text_partial' ) ) :
	// Title.
	function wise_blog_editor_choice_title_text_partial() {
		return esc_html( get_theme_mod( 'wise_blog_editor_choice_title' ) );
	}
endif;
