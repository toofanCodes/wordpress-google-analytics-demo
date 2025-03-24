<?php
/**
 * Pagination setting
 */

// Pagination setting.
$wp_customize->add_section(
	'wise_blog_pagination',
	array(
		'title' => esc_html__( 'Pagination', 'wise-blog' ),
		'panel' => 'wise_blog_theme_customizer_hub_panel',
	)
);

// Pagination enable setting.
$wp_customize->add_setting(
	'wise_blog_pagination_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'wise_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Wise_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'wise_blog_pagination_enable',
		array(
			'label'    => esc_html__( 'Enable Pagination.', 'wise-blog' ),
			'settings' => 'wise_blog_pagination_enable',
			'section'  => 'wise_blog_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Style.
$wp_customize->add_setting(
	'wise_blog_pagination_type',
	array(
		'default'           => 'numeric',
		'sanitize_callback' => 'wise_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'wise_blog_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Style', 'wise-blog' ),
		'section'         => 'wise_blog_pagination',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'wise-blog' ),
			'numeric' => __( 'Numeric', 'wise-blog' ),
		),
		'active_callback' => 'wise_blog_pagination_enabled',
	)
);

/*========================Active Callback==============================*/
function wise_blog_pagination_enabled( $control ) {
	return $control->manager->get_setting( 'wise_blog_pagination_enable' )->value();
}
