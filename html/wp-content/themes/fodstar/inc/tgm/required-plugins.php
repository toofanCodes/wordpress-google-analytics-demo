<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme one elementor for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'fodstar_register_required_plugins');

function fodstar_register_required_plugins()
{

	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.

		array(
			'name'      => __('Elementor Website Builder', 'fodstar'),
			'slug'      => 'elementor',
			'required'  => false,
			'version'   => '3.24.4',
		),
		
		array(
			'name'               => 'aDirectory – Directory Listing WordPress Plugin',
			'slug'               => 'adirectory',
			'required'           => false,
			'version'            => '1.3.3',
		),

		array(
			'name'      => __('Kirki Customizer Framework', 'fodstar'),
			'slug'      => 'kirki',
			'required'  => false,
			'version'   => '5.1.0',
		),

		array(
			'name'      => __('Breadcrumb NavXT', 'fodstar'),
			'slug'      => 'breadcrumb-navxt',
			'required'  => false,
			'version'   => '7.3.1',
		),

		array(
			'name'               => 'MC4WP: Mailchimp for WordPress',
			'slug'               => 'mailchimp-for-wp',
			'required'           => false,
			'version'            => '4.9.17',
		),
		
		array(
			'name'               => 'One Click Demo Import',
			'slug'               => 'one-click-demo-import',
			'required'           => false,
			'version'            => '3.2.1', 
		),

	);
	// Config Options
	$config = array(
		'id'           => 'fodstar',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa($plugins, $config);
}
