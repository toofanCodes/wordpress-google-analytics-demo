<?php
/**
 * Sidebar settings
 */

$wp_customize->add_section(
	'wise_blog_sidebar_option',
	array(
		'title' => esc_html__( 'Sidebar Options', 'wise-blog' ),
		'panel' => 'wise_blog_theme_customizer_hub_panel',
	)
);

// Sidebar Option - Archive Sidebar Position.
$wp_customize->add_setting(
	'wise_blog_archive_sidebar_position',
	array(
		'sanitize_callback' => 'wise_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'wise_blog_archive_sidebar_position',
	array(
		'label'   => esc_html__( 'Archive Sidebar Position', 'wise-blog' ),
		'section' => 'wise_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'wise-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'wise-blog' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'wise_blog_post_sidebar_position',
	array(
		'sanitize_callback' => 'wise_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'wise_blog_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'wise-blog' ),
		'section' => 'wise_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'wise-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'wise-blog' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'wise_blog_page_sidebar_position',
	array(
		'sanitize_callback' => 'wise_blog_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'wise_blog_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'wise-blog' ),
		'section' => 'wise_blog_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'wise-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'wise-blog' ),
		),
	)
);
