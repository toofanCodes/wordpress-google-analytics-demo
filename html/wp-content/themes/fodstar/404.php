<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fodstar
 */

get_header();
?>

<!-- Error 404 -->
<section class="fstr-404 not-found">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
				<div class="fstr-404__content">
					<h1 class="fstr-404__title">
						<span class="fstr-404__label">
							<span><?php esc_html_e('404', 'fodstar'); ?></span>
						</span>
					</h1>
					<div class="fstr-404__inner">
						<h4 class="fstr-404__inside"><?php esc_html_e('Page Not Found.', 'fodstar'); ?></h4>
						<p class="fstr-404__text"><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fodstar'); ?></p>
						<div class="fstr-404__button">
							<a href="<?php echo esc_url(home_url('/')); ?>" class="fodstar-btn"><?php esc_html_e('Go Home', 'fodstar'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Error 404 -->

<?php
get_footer();
