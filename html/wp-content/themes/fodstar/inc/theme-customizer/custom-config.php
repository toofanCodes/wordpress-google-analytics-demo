<?php


Kirki::add_config('my_theme_config', array(
	'capability' => 'edit_theme_options',
	'option_type' => 'theme_mod',
));

new \Kirki\Panel(
	'fodstar_panel_id',
	[
		'priority'    => 1,
		'title'       => esc_html__('Theme Options', 'fodstar'),
		'description' => esc_html__('Theme Settings.', 'fodstar'),
	]
);
