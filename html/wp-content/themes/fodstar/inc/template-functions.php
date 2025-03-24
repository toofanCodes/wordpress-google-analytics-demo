<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package fodstar
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function fodstar_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (! is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (! is_active_sidebar('sidebar-1') && ! is_active_sidebar('sidebar-2')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'fodstar_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function fodstar_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'fodstar_pingback_header');


// Dashboard and Themes Page Notice
function fodstar_dash_display_dashboard_notice() {
    // Get the current screen
    $current_screen = get_current_screen();
    
    // Display the notice on the dashboard and themes page
    if ( isset( $current_screen->base ) && ( $current_screen->base === 'dashboard' || $current_screen->base === 'themes' ) ) {
        ?>
        <div class="notice notice-info is-dismissible" style="font-size:16px; padding:25px">
            <b>
                <?php 
                // Escaping and internationalization for the site name and text
                printf( esc_html__( 'Hello, %s 👋🏻 You are using the free version.', 'fodstar' ), esc_html( get_bloginfo( 'name' ) ) ); 
                ?>
            </b>
            <h3 style="margin:0; margin-top:15px;">
                <?php esc_html_e( 'Try Our Pro 🚨 Version. Get all Premium Features with [Fodstar - Restaurant Directory Listing Theme]', 'fodstar' ); ?>
            </h3>
            <p style="font-size:18px;">
                <?php esc_html_e( 'Fodstar is the ultimate WordPress Directory theme featuring Restaurants Listings. This comprehensive, all-in-one solution is perfect for creating a professional and engaging restaurants directory listing website.', 'fodstar' ); ?>
            </p>
            <p style="font-size:16px; color: #ef644c; font-weight: bold;">
                <?php esc_html_e( 'Don\'t miss out on These Incredible Features - Upgrade to Pro Now!', 'fodstar' ); ?>
            </p>
            <p style="margin:0;">
                <a href="<?php echo esc_url( 'https://adirectory.io/fodstar-theme-details/' ); ?>" class="button button-primary" style="padding:5px 25px; font-size:16px;" target="_blank">
                    <?php esc_html_e( 'Buy Pro', 'fodstar' ); ?>
                </a>
                <a href="<?php echo esc_url( 'https://adirectory.io/fodstar/' ); ?>" class="button button-secondary" style="padding:5px 25px; font-size:16px;" target="_blank">
                    <?php esc_html_e( 'View Pro Demo', 'fodstar' ); ?>
                </a>
                <a href="<?php echo esc_url( 'https://fodstar.adirectory.io/' ); ?>" class="button button-secondary" style="padding:5px 25px; font-size:16px;" target="_blank">
                    <?php esc_html_e( 'Free Version Demo', 'fodstar' ); ?>
                </a>
                <a href="<?php echo esc_url( 'https://docs.adirectory.io/docs/fodstar-theme/' ); ?>" class="button button-secondary" style="padding:5px 25px; font-size:16px;" target="_blank">
                    <?php esc_html_e( 'Free Version Docs', 'fodstar' ); ?>
                </a>
            </p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'fodstar_dash_display_dashboard_notice' );
