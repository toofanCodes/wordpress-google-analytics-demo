<?php
/**
 * Title: Right media and text 02
 * Slug: swift-fse/right-media-and-text-02
 * Categories: banners, swift-fse
 */
?>
<!-- wp:group {"metadata":{"name":"Swift: Right Media and Left Content 02"},"ploverBlockID":"b7a83f45-e6e8-41c4-bf37-be80db7ad674","layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"verticalAlignment":"center","ploverBlockID":"74eaada9-2c06-4454-ab6a-a004d569dd62","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"
		style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"05ac2464-dc9b-4d3e-8559-b57c02d7f373","cssOrder":{"desktop":"","tablet":1,"mobile":"__INITIAL_VALUE__"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":3,"ploverBlockID":"df1bcfa6-6e35-4f1a-94d2-e6c3eb0a088f"} -->
			<h3 class="wp-block-heading"><?php esc_html_e('Design Without Limits: Your Story, Beautifully Told with Swift', 'swift-fse') ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"ploverBlockID":"c8a255bc-f8a3-458b-bab4-e100bff119da"} -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"ploverBlockID":"e325117e-7a32-4a3a-801a-a81945a16d6f","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:buttons {"ploverBlockID":"08ed3560-14f8-462a-9208-e2bd86cf96af"} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"ploverBlockID":"d33e7058-eb9e-4a26-bdab-9b4acb037227"} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'swift-fse') ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"ploverBlockID":"d5967b53-2155-4431-a1a5-ea888e94a5ba"} -->
				<p><a href="#"><?php esc_html_e('Learn more about our features', 'swift-fse') ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"5c476f75-d6a9-4908-a76f-20a6a6f173e6","cssOrder":{"desktop":"","tablet":0,"mobile":"__INITIAL_VALUE__"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"6bbf1ac7-269b-4f34-8921-b1d375db83c8","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><img
					src="<?php the_swift_fse_asset_url('images/features-01.png') ?>" alt=""/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->