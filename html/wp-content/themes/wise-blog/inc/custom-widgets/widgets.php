<?php

// Tile List Widget.
require get_template_directory() . '/inc/custom-widgets/tile-list-widget.php';

// Social Widget.
require get_template_directory() . '/inc/custom-widgets/social-widget.php';

/**
 * Register Widgets
 */
function wise_blog_register_widgets() {

	register_widget( 'Wise_Blog_Tile_List_Widget' );

	register_widget( 'Wise_Blog_Social_Widget' );

}
add_action( 'widgets_init', 'wise_blog_register_widgets' );
