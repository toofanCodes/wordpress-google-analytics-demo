<?php

new \Kirki\Section(
	'fodstar_header',
	[
		'title'       => esc_html__('Header Settings', 'fodstar'),
		'description' => esc_html__('Customize Header Options.', 'fodstar'),
		'panel'       => 'fodstar_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'show_wishlist_button',
		'label'       => esc_html__('Show wishlist Button?', 'fodstar'),
		'section'     => 'fodstar_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__('Enable', 'fodstar'),
			'off' => esc_html__('Disable', 'fodstar'),
		],
		'priority' => 3,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'wishlist_button_link',
		'label'    => esc_html__('Wishlist Button Link', 'fodstar'),
		'section'  => 'fodstar_header',
		'default'  => esc_html__('#', 'fodstar'),
		'priority' => 3,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'show_login_button',
		'label'       => esc_html__('Show Login Button?', 'fodstar'),
		'section'     => 'fodstar_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__('Enable', 'fodstar'),
			'off' => esc_html__('Disable', 'fodstar'),
		],
		'priority' => 3,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'login_button_text',
		'label'    => esc_html__('Login Button Text', 'fodstar'),
		'section'  => 'fodstar_header',
		'default'  => esc_html__('Login', 'fodstar'),
		'priority' => 3,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'login_button_link',
		'label'    => esc_html__('Login Button Link', 'fodstar'),
		'section'  => 'fodstar_header',
		'default'  => esc_html__('#', 'fodstar'),
		'priority' => 3,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'show_listing_button',
		'label'       => esc_html__('Show Listing Button?', 'fodstar'),
		'section'     => 'fodstar_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__('Enable', 'fodstar'),
			'off' => esc_html__('Disable', 'fodstar'),
		],
		'priority' => 3,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'listing_button_text',
		'label'    => esc_html__('Listing Button Text', 'fodstar'),
		'section'  => 'fodstar_header',
		'default'  => esc_html__('Add Listing', 'fodstar'),
		'priority' => 3,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'listing_button_link',
		'label'    => esc_html__('Listing Button Link', 'fodstar'),
		'section'  => 'fodstar_header',
		'default'  => esc_html__('#', 'fodstar'),
		'priority' => 3,
	]
);
