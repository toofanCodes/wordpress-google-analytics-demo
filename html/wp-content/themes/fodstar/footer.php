<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fodstar
 */

// Default values for repeater_setting theme mod.
$defaults = [
	[
		'link_text' => esc_html__('About Us', 'fodstar'),
		'link_url' => '#',
		'link_target' => '_self',
	],
];
// Retrieve the repeater field settings
$fodstar_pages = get_theme_mod('fodstar_pages', $defaults);

?>
</div>

<footer class="fstr-footer">
	<div class="container">
		<div class="fstr-footer-newsletter">
			<div class="row">
				<?php if (is_active_sidebar('fodstar-footer-1')) : ?>
					<div class="col-lg-6">
						<div class="newsletter-content">
							<?php dynamic_sidebar('fodstar-newsletter-1'); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if (is_active_sidebar('fodstar-footer-2')) : ?>
					<div class="col-lg-6">
						<div class="newsletter-form">
							<?php dynamic_sidebar('fodstar-newsletter-2'); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="fstr-footer-main">
			<div class="row gy-3">
				<?php if (is_active_sidebar('fodstar-footer-1')) : ?>
					<div class="col-lg-4">
						<?php dynamic_sidebar('fodstar-footer-1'); ?>
					</div>
				<?php endif; ?>
				<div class="col-lg-8">
					<div class="row gy-5">
						<?php if (is_active_sidebar('fodstar-footer-2')) : ?>
							<div class="col-lg-4 col-sm-6">
								<?php dynamic_sidebar('fodstar-footer-2'); ?>
							</div>
						<?php endif; ?>

						<?php if (is_active_sidebar('fodstar-footer-3')) : ?>
							<div class="col-lg-4 col-sm-6">
								<?php dynamic_sidebar('fodstar-footer-3'); ?>
							</div>
						<?php endif; ?>

						<?php if (is_active_sidebar('fodstar-footer-4')) : ?>
							<div class="col-lg-4 col-sm-6">
								<?php dynamic_sidebar('fodstar-footer-4'); ?>
							</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fstr-footer-copyright">
		<div class="container">
			<div class="row gy-2">
				<div class="col-md-6">
					<div class="copyright-text">
					<p class="copyright-detail">
						<?php 
						esc_html_e('&copy; All Rights Reserved.', 'fodstar'); 
						?> 
						<a class="fodstar-footer__url" href="<?php echo esc_url(home_url('/')); ?>">
							<?php echo esc_html(get_bloginfo('name')); ?>
						</a> 
						<?php echo esc_html(date_i18n(__('Y', 'fodstar'))); ?>.
						<?php esc_html_e('Theme Provided By', 'fodstar'); ?> 
						<a href="<?php echo esc_url('https://adirectory.io/fodstar-theme-details/'); ?>" target="_blank" rel="noopener noreferrer">
							<?php esc_html_e('aDirectory', 'fodstar'); ?>
						</a>
					</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="copyright-list">
						<ul class="footer-menu-list">
							<?php foreach ($fodstar_pages as $fodstar_page) : ?>
								<li><a href="<?php echo esc_url($fodstar_page['link_url']); ?>" target="<?php echo esc_attr($fodstar_page['link_target']); ?>"><?php echo esc_html($fodstar_page['link_text']); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- End Page -->

<?php wp_footer(); ?>

</body>

</html>