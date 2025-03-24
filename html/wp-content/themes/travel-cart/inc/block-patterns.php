<?php   
/**
 * Block Patterns
 *
 * @package Travel Cart
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function travel_cart_register_block_patterns() {
	$block_pattern_categories = array(
		'travel-cart' => array( 'label' => esc_html__( 'Travel Cart Patterns', 'travel-cart' ) ),
		'pages'    => array( 'label' => esc_html__( 'Pages', 'travel-cart' ) ),
	);

	$block_pattern_categories = apply_filters( 'travel_cart_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'header-default',
		'header-banner',
		'travel-section',
		'inner-banner',
		'latest-blog',
		'hidden-404',
		'sidebar',
		'footer-default',	
	);

	$block_patterns = apply_filters( 'travel_cart_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'travel-cart/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'travel_cart_register_block_patterns', 9 );