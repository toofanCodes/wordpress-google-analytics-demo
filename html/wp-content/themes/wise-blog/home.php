<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wise Blog
 */

get_header();
$archive_page_title    = get_theme_mod( 'wise_blog_archive_page_title', '' );
$archive_page_subtitle = get_theme_mod( 'wise_blog_archive_page_subtitle', '' );
?>

<main id="primary" class="site-main">

	<?php
	if ( is_front_page() && is_home() ) :
		if ( ! empty( $archive_page_title || $archive_page_subtitle ) ) {
			?>
			<div class="section-head">
				<div class="header-title">
					<h3 class="section-title"><?php echo esc_html( $archive_page_title ); ?></h3>
					<p class="sub-title"><?php echo esc_html( $archive_page_subtitle ); ?></p>
				</div>
			</div>
			<?php
		}
	endif;
	?>

	<?php if ( have_posts() ) : ?>

		<?php if ( wise_blog_is_frontpage_blog() ) { ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php
			$breadcrumb_enable = get_theme_mod( 'wise_blog_breadcrumb_enable', true );
			if ( $breadcrumb_enable ) :
				?>
				<div id="breadcrumb-list">
					<?php
					echo wise_blog_breadcrumb(
						array(
							'show_on_front' => false,
							'show_browse'   => false,
						)
					);
					?>
				</div><!-- #breadcrumb-list -->
				<?php
			endif;

		}
		?>

		<?php $col_layout = get_theme_mod( 'wise_blog_archive_column_layout', 'double-column' ); ?>

		<div class="archive-area grid-view <?php echo esc_attr( $col_layout ); ?>">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;
			?>
			</div>
			
			<?php

			do_action( 'wise_blog_posts_pagination' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

	<?php

	if ( wise_blog_is_sidebar_enabled() ) {
		get_sidebar();
	}

	get_footer();
