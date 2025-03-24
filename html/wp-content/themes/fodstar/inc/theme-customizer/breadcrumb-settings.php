<?php

/* BreadCrumbs */
new \Kirki\Section(
	'fodstar_page_breadcrumb',
	[
		'title'       => esc_html__( 'Breadcrumbs', 'fodstar' ),
		'description' => esc_html__( 'Breadcrumbs Settings.', 'fodstar' ),
		'panel'       => 'fodstar_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'fodstar_page_bc',
		'label'       => esc_html__( 'Enable page breadcrumb', 'fodstar' ),
		'section'     => 'fodstar_page_breadcrumb',
		'default'     => true,
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'fodstar_archive_bc',
		'label'       => esc_html__( 'Enable Archive breadcrumb', 'fodstar' ),
		'section'     => 'fodstar_page_breadcrumb',
		'default'     => true,
	]
);
