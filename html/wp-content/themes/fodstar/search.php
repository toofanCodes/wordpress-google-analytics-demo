<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fodstar
 */

get_header();

?>

<?php if (get_theme_mod('fodstar_search_bc', true)) : ?>
	<div class="fodstar-bc">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="bc-title"><?php printf(esc_html__('Search Results: %s', 'fodstar'), '<span>' . get_search_query() . '</span>'); ?></h2>
					<div class="breadcrumb-list">
						<?php if (function_exists('bcn_display')) bcn_display(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<section class="fodstar-search-page search-page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if (have_posts()) : ?>
					<div class="row fodstar-masonry">
						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part('theme-parts/content', 'search');

						endwhile;
						?>
					</div>
				<?php else : ?>
					<?php get_template_part('theme-parts/content', 'none'); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="pagination-main">
					<?php if (function_exists("fodstar_pagination")) {
						fodstar_pagination();
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
