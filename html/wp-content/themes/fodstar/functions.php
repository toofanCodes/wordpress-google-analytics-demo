<?php

/**
 * fodstar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fodstar
 */

if (!defined('FODSTAR_VERSION')) {
	$fodstar_theme = wp_get_theme();
	define('FODSTAR_VERSION', $fodstar_theme->get('Version'));
}

if (! function_exists('fodstar_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fodstar_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on one-elementor, use a find and replace
		 * to change 'fodstar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('fodstar', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// Image Size
		add_image_size('fodstar-blog-thumb', 650, 475, true);
		add_image_size('fodstar-blog-single-thumb', 800, 395, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'fodstar'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fodstar_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/*
		* Enable support for wide alignment class for Gutenberg blocks.
		*/
		add_theme_support('align-wide');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');
	}
endif;
add_action('after_setup_theme', 'fodstar_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fodstar_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Blog Sidebar', 'fodstar'),
			'id'            => 'sidebar',
			'description'   => esc_html__('Add widgets here.', 'fodstar'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(array(
		'name'          => esc_html__('Footer Newsletter Content', 'fodstar'),
		'id'            => 'fodstar-newsletter-1',
		'description'   => esc_html__('Add footer widget here.', 'fodstar'),
		'before_widget' => '<div id="%1$s" class="fodstar-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer Newsletter', 'fodstar'),
		'id'            => 'fodstar-newsletter-2',
		'description'   => esc_html__('Add footer widget here.', 'fodstar'),
		'before_widget' => '<div id="%1$s" class="fodstar-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));


	register_sidebar(array(
		'name'          => esc_html__('Footer Widget 1', 'fodstar'),
		'id'            => 'fodstar-footer-1',
		'description'   => esc_html__('Add footer widget here.', 'fodstar'),
		'before_widget' => '<div id="%1$s" class="fodstar-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer Widget 2', 'fodstar'),
		'id'            => 'fodstar-footer-2',
		'description'   => esc_html__('Add footer widget here.', 'fodstar'),
		'before_widget' => '<div id="%1$s" class="fodstar-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer Widget 3', 'fodstar'),
		'id'            => 'fodstar-footer-3',
		'description'   => esc_html__('Add footer widget here.', 'fodstar'),
		'before_widget' => '<div id="%1$s" class="fodstar-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer Widget 4', 'fodstar'),
		'id'            => 'fodstar-footer-4',
		'description'   => esc_html__('Add footer widget here.', 'fodstar'),
		'before_widget' => '<div id="%1$s" class="fodstar-footer__widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'fodstar_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function fodstar_scripts()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.1.3');
	wp_enqueue_style('font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css', array(), '6.1.1');
	wp_enqueue_style('ad-css', get_template_directory_uri() . '/adirectory/css/adirectory.css', array(), '1.0');

	wp_enqueue_style('fodstar-style', get_stylesheet_uri(), array(), FODSTAR_VERSION);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '5.1.3', true);
	wp_enqueue_script('fodstar-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), FODSTAR_VERSION, true);
	wp_enqueue_script('jquery-masonry');
	wp_enqueue_script('skip-link-js', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), FODSTAR_VERSION, true);
	wp_enqueue_script('active', get_template_directory_uri() . '/assets/js/theme-script.js', array('jquery'), FODSTAR_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'fodstar_scripts');


function fodstar_enqueue_assets()
{
	// Include the file.
	require_once get_theme_file_path('/inc/wptt-webfont-loader.php');

	// Load the webfont.
	wp_enqueue_style(
		'Montserrat',
		wptt_get_webfont_url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap'),
		array(),
		'1.0.0'
	);
}
add_action('wp_enqueue_scripts', 'fodstar_enqueue_assets');


// Post Excerpt Limit
function fodstar_wpdocs_custom_excerpt_length($length)
{
	$excerptlength = absint(get_theme_mod('fodstar_post_excerpt', 22));
	return $excerptlength;
}
add_filter('excerpt_length', 'fodstar_wpdocs_custom_excerpt_length', 999);

// Theme Files
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/tgm/required-plugins.php';
require get_template_directory() . '/inc/customizer.php';


function fodstar_active()
{
	// Check if Elementor is active
	if (defined('ELEMENTOR_PATH')) {
		// Check if the current page is built with Elementor
		$post_id = get_queried_object_id();
		if (\Elementor\Plugin::$instance->db->is_built_with_elementor($post_id)) {
			return 'container-elementor';
		}
	}
}
add_action('init', 'fodstar_active');
