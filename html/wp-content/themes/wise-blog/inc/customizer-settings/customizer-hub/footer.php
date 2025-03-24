<?php
/**
 * Footer copyright
 */

// Footer copyright
$wp_customize->add_section(
	'wise_blog_footer_section',
	array(
		'title' => esc_html__( 'Footer Options', 'wise-blog' ),
		'panel' => 'wise_blog_theme_customizer_hub_panel',
	)
);

$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'wise-blog' ), '[the-year]', '[site-link]' );

// Footer copyright setting.
$wp_customize->add_setting(
	'wise_blog_copyright_txt',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wise_blog_sanitize_html',
	)
);

$wp_customize->add_control(
	'wise_blog_copyright_txt',
	array(
		'label'   => esc_html__( 'Copyright text', 'wise-blog' ),
		'section' => 'wise_blog_footer_section',
		'type'    => 'textarea',
	)
);
