<?php
/**
 * Blog / Archive Options
 */

$wp_customize->add_section(
	'wise_blog_archive_page_options',
	array(
		'title' => esc_html__( 'Blog / Archive Pages Options', 'wise-blog' ),
		'panel' => 'wise_blog_theme_customizer_hub_panel',
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'wise_blog_excerpt_length',
	array(
		'default'           => 15,
		'sanitize_callback' => 'wise_blog_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'wise_blog_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'wise-blog' ),
		'section'     => 'wise_blog_archive_page_options',
		'settings'    => 'wise_blog_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 5,
			'max'  => 200,
			'step' => 1,
		),
	)
);

// Archive Column layout options.
$wp_customize->add_setting(
	'wise_blog_archive_column_layout',
	array(
		'default'           => 'double-column',
		'sanitize_callback' => 'wise_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'wise_blog_archive_column_layout',
	array(
		'label'   => esc_html__( 'Column Layout', 'wise-blog' ),
		'section' => 'wise_blog_archive_page_options',
		'type'    => 'select',
		'choices' => array(
			'single-column' => __( 'Column 1', 'wise-blog' ),
			'double-column' => __( 'Column 2', 'wise-blog' ),
			'triple-column' => __( 'Column 3', 'wise-blog' ),
			'four-column'   => __( 'Column 4', 'wise-blog' ),
		),
	)
);

// Enable archive page category setting.
$wp_customize->add_setting(
	'wise_blog_enable_archive_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_enable_archive_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'wise-blog' ),
			'settings' => 'wise_blog_enable_archive_category',
			'section'  => 'wise_blog_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page author setting.
$wp_customize->add_setting(
	'wise_blog_enable_archive_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_enable_archive_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'wise-blog' ),
			'settings' => 'wise_blog_enable_archive_author',
			'section'  => 'wise_blog_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page date setting.
$wp_customize->add_setting(
	'wise_blog_enable_archive_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_enable_archive_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'wise-blog' ),
			'settings' => 'wise_blog_enable_archive_date',
			'section'  => 'wise_blog_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);
