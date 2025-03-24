<?php

/**
 * The template for displaying listing price in the globaly template
 *
 * This template can be overridden by copying it to yourtheme/adqs_directories/global/meta.php.
 *
 * @package     QS Directories\Templates
 * @version     1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

$listing_id = get_the_ID();
$address = adqs_get_common_listing_meta($listing_id, '_address');
$website = adqs_get_common_listing_meta($listing_id, '_website', true);

$categories = adqs_render_repeated_tax($listing_id);
$author_id = get_the_author_meta('ID');
$author_posts_url = adqs_listing_author_url($author_id, get_post_type());

$Helper = AD()->Helper;
?>
<div class="qsd-prodcut-grid-list-item">
	<?php adqs_get_template_part('global/listing', 'post-thumbnail'); ?>
	<div class="qsd-prodcut-grid-list-inner">
		<div class="qsd-product-grid-article">
			<div class="qsd-category-wraper">
				<div class="qsd-cat-content">
					<?php if (!empty($categories)) : ?>
						<ul class="qsd-prodcut-grid-list-inner-top-btn">
							<?php
							foreach ($categories as $category) :
							?>
								<li>
									<a href="<?php echo esc_url(get_term_link($category->term_id)); ?>" class="grid-list-inner-top-btn">
										<?php echo esc_html($category->name); ?>
									</a>
								</li>
							<?php
							endforeach;
							?>
						</ul>
					<?php endif; ?>

				</div>
				<?php
				$avgRatings = $Helper->get_post_average_ratings($listing_id);
				if (!empty($avgRatings)) :
				?>
					<div class="qsd-rating-content">

						<div class="fl-viewCount fl-avgRatings">
							<i class="dashicons dashicons-star-filled"></i>
							<strong>
								<?php echo esc_html($avgRatings); ?>
							</strong>
						</div>

					</div>
				<?php endif; ?>
			</div>

			<?php
			$price = $Helper->get_price(get_the_ID());
			if (!empty($price)) :
			?>
				<p class="qsd-grid-price">
					<?php adqs_get_template_part('global/price'); ?>
				</p>
			<?php endif; ?>
			<?php if (!empty(get_the_title())) : ?>
				<h3>
					<a href="<?php the_permalink(); ?>" class="grid-list-inner-txt line-clamp-2">
						<?php the_title(); ?>
					</a>
				</h3>
			<?php endif; ?>

			<?php if (!empty($address) || !empty($website)) : ?>
				<ul class="grid-list-inner-contact">

					<?php if (!empty($address)) : ?>
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr($address); ?>">
								<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="12" cy="11.4854" r="3" stroke="currentcolor" stroke-width="1.5" />
									<path d="M21 11.3742C21 16.2834 15.375 22.4854 12 22.4854C8.625 22.4854 3 16.2834 3 11.3742C3 6.46504 7.02944 2.48535 12 2.48535C16.9706 2.48535 21 6.46504 21 11.3742Z" stroke="currentcolor" stroke-width="1.5" />
								</svg>
								<div class='line-clamp-1'><?php echo esc_html(wp_trim_words($address, 4, '')); ?></div>
							</a>
						</li>
					<?php endif; ?>

					<?php if (!empty($website)) : ?>
						<li>
							<a href="<?php echo esc_url($website); ?>">
								<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21 11.4854C21 17.0082 16.5228 21.4854 11 21.4854M21 11.4854C21 5.9625 16.5228 1.48535 11 1.48535M21 11.4854C21 9.8285 16.5228 8.48535 11 8.48535C5.47715 8.48535 1 9.8285 1 11.4854M21 11.4854C21 13.1422 16.5228 14.4854 11 14.4854C5.47715 14.4854 1 13.1422 1 11.4854M11 21.4854C5.47715 21.4854 1 17.0082 1 11.4854M11 21.4854C13.2091 21.4854 15 17.0082 15 11.4854C15 5.9625 13.2091 1.48535 11 1.48535M11 21.4854C8.79086 21.4854 7 17.0082 7 11.4854C7 5.9625 8.79086 1.48535 11 1.48535M1 11.4854C1 5.9625 5.47715 1.48535 11 1.48535" stroke="currentcolor" stroke-width="1.2" />
								</svg>

								<?php echo esc_html($website); ?>
							</a>
						</li>
					<?php endif; ?>

				</ul>
			<?php endif; ?>

		</div>

		<!-- author	-->
		<div class="grid-list-inner-btm">
			<a href="<?php echo esc_url($author_posts_url); ?>" class="grid-list-inner-btm-btn">
				<span class="adqs-listing-auth">
					<span>
						<?php echo get_avatar($author_id, 80); ?>
					</span>
					<?php do_action('adqs_after_author', $author_id); ?>
				</span>
				<?php the_author(); ?>
			</a>
		</div>
	</div>
</div>