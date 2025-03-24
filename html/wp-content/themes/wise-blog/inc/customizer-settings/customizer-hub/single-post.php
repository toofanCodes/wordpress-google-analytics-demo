<?php
/**
 * Single Post Options
 */

$wp_customize->add_section(
	'wise_blog_single_page_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'wise-blog' ),
		'panel' => 'wise_blog_theme_customizer_hub_panel',
	)
);

// Enable single post category setting.
$wp_customize->add_setting(
	'wise_blog_enable_single_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_enable_single_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'wise-blog' ),
			'settings' => 'wise_blog_enable_single_category',
			'section'  => 'wise_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post author setting.
$wp_customize->add_setting(
	'wise_blog_enable_single_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_enable_single_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'wise-blog' ),
			'settings' => 'wise_blog_enable_single_author',
			'section'  => 'wise_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post date setting.
$wp_customize->add_setting(
	'wise_blog_enable_single_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_enable_single_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'wise-blog' ),
			'settings' => 'wise_blog_enable_single_date',
			'section'  => 'wise_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post tag setting.
$wp_customize->add_setting(
	'wise_blog_enable_single_tag',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_enable_single_tag',
		array(
			'label'    => esc_html__( 'Enable Post Tag', 'wise-blog' ),
			'settings' => 'wise_blog_enable_single_tag',
			'section'  => 'wise_blog_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Single post related Posts title label.
$wp_customize->add_setting(
	'wise_blog_related_posts_title',
	array(
		'default'           => __( 'Related Posts', 'wise-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'wise_blog_related_posts_title',
	array(
		'label'    => esc_html__( 'Related Posts Title', 'wise-blog' ),
		'section'  => 'wise_blog_single_page_options',
		'settings' => 'wise_blog_related_posts_title',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'wise_blog_related_posts_title',
		array(
			'selector'            => '.theme-wrapper h2.related-title',
			'settings'            => 'wise_blog_related_posts_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
		)
	);
}
