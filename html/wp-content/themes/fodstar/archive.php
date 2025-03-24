<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fodstar
 */

get_header();
?>

	<?php if(get_theme_mod('fodstar_archive_bc', true)) : ?>
		<div class="fodstar-bc">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="bc-title"><?php esc_html_e('Archive Posts','fodstar')?></h2>
						<div class="breadcrumb-list">
							<?php if (function_exists('bcn_display')) bcn_display(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<section class="fodstar-blog-section site-archive">
		<div class="container">
			<div class="row">
				<div class="<?php if(is_active_sidebar('sidebar')): ?> col-lg-8 fodstar-main-area__with-side <?php else :?> col-12 <?php endif; ?>">
					<div class="row fodstar-masonry">
						<?php if ( have_posts() ) : ?>
							<?php
								/* Start the Loop */
								while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'theme-parts/content', get_post_type() );

							endwhile;

							else :
							get_template_part( 'theme-parts/content', 'none' );

							endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="pagination-main">
								<?php if (function_exists("fodstar_pagination")) :?>
									<?php fodstar_pagination(); ?>
								<?php endif;?>
							</div>
						</div>
					</div>	
				</div>
				<?php if(is_active_sidebar('sidebar')): ?>
				<div class="col-lg-4 col-12 fodstar-main-area__sidebar">
					<div class="fodstar-sidebar fodstar-sidebar__right">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php endif;?>
			</div>
		</div>
	</section>

<?php
get_footer();
