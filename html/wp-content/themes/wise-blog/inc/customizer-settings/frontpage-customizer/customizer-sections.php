<?php

// Home Page Customizer panel.
$wp_customize->add_panel(
	'wise_blog_frontpage_panel',
	array(
		'title'    => esc_html__( 'Frontpage Sections', 'wise-blog' ),
		'priority' => 140,
	)
);

$customizer_settings = array( 'banner', 'editor-choice' );

foreach ( $customizer_settings as $customizer ) {

	require get_template_directory() . '/inc/customizer-settings/frontpage-customizer/' . $customizer . '.php';

}
