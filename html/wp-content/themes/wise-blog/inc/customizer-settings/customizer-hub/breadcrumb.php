<?php
/**
 * Breadcrumb settings
 */

$wp_customize->add_section(
	'wise_blog_breadcrumb_section',
	array(
		'title' => esc_html__( 'Breadcrumb Options', 'wise-blog' ),
		'panel' => 'wise_blog_theme_customizer_hub_panel',
	)
);

// Breadcrumb enable setting.
$wp_customize->add_setting(
	'wise_blog_breadcrumb_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_breadcrumb_enable',
		array(
			'label'    => esc_html__( 'Enable breadcrumb.', 'wise-blog' ),
			'type'     => 'checkbox',
			'settings' => 'wise_blog_breadcrumb_enable',
			'section'  => 'wise_blog_breadcrumb_section',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'wise_blog_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'wise_blog_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'wise-blog' ),
		'section'         => 'wise_blog_breadcrumb_section',
		'active_callback' => function( $control ) {
			return ( $control->manager->get_setting( 'wise_blog_breadcrumb_enable' )->value() );
		},
	)
);
