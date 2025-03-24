<?php

/**
 * Font section
 */

// Font section.
$wp_customize->add_section(
	'wise_blog_font_options',
	array(
		'title' => esc_html__( 'Font ( Typography ) Options', 'wise-blog' ),
		'panel' => 'wise_blog_theme_customizer_hub_panel',
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'wise_blog_site_title_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'wise_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'wise_blog_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'wise-blog' ),
		'section'  => 'wise_blog_font_options',
		'settings' => 'wise_blog_site_title_font',
		'type'     => 'select',
		'choices'  => wise_blog_font_choices(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'wise_blog_site_description_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'wise_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'wise_blog_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'wise-blog' ),
		'section'  => 'wise_blog_font_options',
		'settings' => 'wise_blog_site_description_font',
		'type'     => 'select',
		'choices'  => wise_blog_font_choices(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'wise_blog_header_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'wise_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'wise_blog_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'wise-blog' ),
		'section'  => 'wise_blog_font_options',
		'settings' => 'wise_blog_header_font',
		'type'     => 'select',
		'choices'  => wise_blog_font_choices(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'wise_blog_body_font',
	array(
		'default'           => '',
		'sanitize_callback' => 'wise_blog_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'wise_blog_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'wise-blog' ),
		'section'  => 'wise_blog_font_options',
		'settings' => 'wise_blog_body_font',
		'type'     => 'select',
		'choices'  => wise_blog_font_choices(),
	)
);
