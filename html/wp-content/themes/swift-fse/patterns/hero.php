<?php
/**
 * Title: Hero
 * Slug: swift-fse/hero
 * Categories: swift-fse, header
 */
?>
<!-- wp:group {"metadata":{"name":"Hero"},"ploverBlockID":"3c7a0c90-2e8d-4f68-a35e-a099518399a1","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:columns {"verticalAlignment":"center","ploverBlockID":"3c6192fd-f147-4438-a185-d06a87eceb05","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"
		style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"ac948cc7-13b1-4c42-9696-5bbf558f1d92"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":1,"ploverBlockID":"8c51a060-03f9-4e55-a95d-42f26ddd0ee6","fontSize":"7-x-large"} -->
			<h1 class="wp-block-heading has-7-x-large-font-size"><?php esc_html_e('Write, Share and Inspire', 'swift-fse') ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"ploverBlockID":"33e35833-d011-4e45-b044-ba83501b130b","fontSize":"x-large"} -->
			<p class="has-x-large-font-size">—— <?php esc_html_e('Your Journey Begins Here.', 'swift-fse') ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"12px","ploverBlockID":"e407ffaf-1d3d-4013-9006-74608a3ce260"} -->
			<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons {"ploverBlockID":"1891c8b7-dded-499e-8de5-20c0da16820a"} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"ploverBlockID":"f0ea97e2-cac5-4382-bb40-55556e91d716","style":{"border":{"width":"2px"}},"borderColor":"neutral-950"} -->
				<div class="wp-block-button"><a
						class="wp-block-button__link has-border-color has-neutral-950-border-color wp-element-button"
						style="border-width:2px"><?php esc_html_e('Get Started', 'swift-fse') ?> <mark style="background-color:rgba(0, 0, 0, 0)"
							class="has-inline-color has-neutral-400-color">—&nbsp;<?php esc_html_e("it's free", 'swift-fse') ?></mark></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"textColor":"current","ploverBlockID":"5f07f10f-7313-4cf5-9de3-1ce605b6a8e4","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|current"}}},"border":{"width":"2px"}},"borderColor":"current"} -->
				<div class="wp-block-button is-style-outline"><a
						class="wp-block-button__link has-current-color has-text-color has-link-color has-border-color has-current-border-color wp-element-button"
						style="border-width:2px"><?php esc_html_e('Upgrade Membership', 'swift-fse') ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"beb26859-8743-4499-a686-30934951c5c7"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"width":"450px","sizeSlug":"full","linkDestination":"none","ploverBlockID":"ae5e3bc7-9c2b-4459-a705-23b7ec9b0e9d","align":"right"} -->
			<figure class="wp-block-image alignright size-full is-resized">
				<img src="<?php the_swift_fse_asset_url( 'images/australian-swift.png' ); ?>" alt=""
					style="width:450px" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->