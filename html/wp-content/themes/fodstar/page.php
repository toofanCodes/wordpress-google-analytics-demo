<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fodstar
 */

get_header();
?>

<?php if (get_theme_mod('fodstar_page_bc', true)) : ?>
	<div class="fodstar-bc">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="bc-title"><?php the_title() ?></h2>
					<div class="breadcrumb-list">
						<?php if (function_exists('bcn_display')) bcn_display(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>


<section class="fodstar-page site-page <?php echo fodstar_active(); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="fodstar-page__inners">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('theme-parts/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
