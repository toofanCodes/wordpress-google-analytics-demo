<?php
/**
 * Frontpage Customizer Settings
 *
 * @package Wise Blog
 *
 * Banner Section
 */

$wp_customize->add_section(
	'wise_blog_banner_section',
	array(
		'title' => esc_html__( 'Banner Section', 'wise-blog' ),
		'panel' => 'wise_blog_frontpage_panel',
	)
);

// Banner section enable settings.
$wp_customize->add_setting(
	'wise_blog_banner_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_banner_section_enable',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'wise-blog' ),
			'type'     => 'checkbox',
			'settings' => 'wise_blog_banner_section_enable',
			'section'  => 'wise_blog_banner_section',
		)
	)
);

// banner content type settings.
$wp_customize->add_setting(
	'wise_blog_banner_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'wise_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'wise_blog_banner_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'wise-blog' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'wise-blog' ),
		'section'         => 'wise_blog_banner_section',
		'type'            => 'select',
		'active_callback' => 'wise_blog_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'wise-blog' ),
			'category' => esc_html__( 'Category', 'wise-blog' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// banner post setting.
	$wp_customize->add_setting(
		'wise_blog_banner_post_' . $i,
		array(
			'sanitize_callback' => 'wise_blog_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'wise_blog_banner_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'wise-blog' ), $i ),
			'section'         => 'wise_blog_banner_section',
			'type'            => 'select',
			'choices'         => wise_blog_get_post_choices(),
			'active_callback' => 'wise_blog_banner_section_content_type_post_enabled',
		)
	);

}

// banner category setting.
$wp_customize->add_setting(
	'wise_blog_banner_category',
	array(
		'sanitize_callback' => 'wise_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'wise_blog_banner_category',
	array(
		'label'           => esc_html__( 'Category', 'wise-blog' ),
		'section'         => 'wise_blog_banner_section',
		'type'            => 'select',
		'choices'         => wise_blog_get_post_cat_choices(),
		'active_callback' => 'wise_blog_banner_section_content_type_category_enabled',
	)
);
