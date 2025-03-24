<?php

new \Kirki\Section(
	'fodstar_footer',
	[
		'title'       => esc_html__( 'Footer Settings', 'fodstar' ),
		'description' => esc_html__( 'Customize Footer Options.', 'fodstar' ),
		'panel'       => 'fodstar_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'fodstar_pages',
		'label'    => esc_html__( 'Footer Page List', 'fodstar' ),
		'section'  => 'fodstar_footer',
		'priority' => 2,
		'default'  => [
			[
				'link_text'   => esc_html__( 'About Us', 'fodstar' ),
				'link_url'    => '#',
				'link_target' => '_self',
				'checkbox'    => false,
			],
		],
		'fields'   => [
			'link_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link Text', 'fodstar' ),
				'description' => esc_html__( 'Description', 'fodstar' ),
				'default'     => '',
			],
			'link_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link URL', 'fodstar' ),
				'description' => esc_html__( 'Description', 'fodstar' ),
				'default'     => '',
			],
			'link_target' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'fodstar' ),
				'description' => esc_html__( 'Description', 'fodstar' ),
				'default'     => '_self',
				'choices'     => [
					'_blank' => esc_html__( 'New Window', 'fodstar' ),
					'_self'  => esc_html__( 'Same Frame', 'fodstar' ),
				],
			],
		],
	]
);
