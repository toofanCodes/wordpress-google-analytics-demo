<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fodstar
 */

if (! is_active_sidebar('sidebar')) {
	return;
}
?>

<aside id="fodstar-primary-sidebar" class="widget-area">
	<?php dynamic_sidebar('sidebar'); ?>
</aside>