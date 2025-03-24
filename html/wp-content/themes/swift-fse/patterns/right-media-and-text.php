<?php
/**
 * Title: Right media and text
 * Slug: swift-fse/right-media-and-text
 * Categories: banners, swift-fse
 */
?>
<!-- wp:group {"metadata":{"name":"Swift: Right Media and Left Content"},"ploverBlockID":"85a9ad34-35a6-4f7e-a3e4-5fa0394eb95d","layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"verticalAlignment":"center","ploverBlockID":"91803a8c-8117-464a-8aba-dec21c7e327c","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"
		style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"4c7b712f-6b3a-4edd-b3cf-ef42bdd29389","cssOrder":{"desktop":"","tablet":1,"mobile":"__INITIAL_VALUE__"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":3,"ploverBlockID":"76d7b5f0-3e77-469a-bf84-e8690952fd9f"} -->
			<h3 class="wp-block-heading"><?php esc_html_e('We Solve Web Design Problems Efficiently', 'swift-fse') ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"ploverBlockID":"26531177-1492-4e2e-8dde-96ea92eca26e"} -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"ploverBlockID":"55c4a64f-a84e-45b7-80cc-a2110d8f491a","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:buttons {"ploverBlockID":"e85e67de-201b-483f-bc71-3a81bacaa02d"} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"ploverBlockID":"3087d5ff-39a4-442d-9320-38d71bcde3c1"} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'swift-fse') ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"ploverBlockID":"66f80b24-934d-40b0-b05a-95a179431119"} -->
				<p><a href="#"><?php esc_html_e('Learn more about our features', 'swift-fse') ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"3ba34129-aca4-4d0b-a658-1383ed9aadb2","cssOrder":{"desktop":"","tablet":0,"mobile":"__INITIAL_VALUE__"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"ba8d7e25-597c-4283-a989-333744baf412","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><img
					src="<?php the_swift_fse_asset_url('images/features-03.png') ?>" alt=""/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
 