<?php
/**
 * Title: Left media and text
 * Slug: swift-fse/left-media-and-text
 * Categories: banners, swift-fse
 */
?>
<!-- wp:group {"metadata":{"name":"Swift: Left Media and Right Content"},"ploverBlockID":"574bc3c1-d9a0-4066-bd6b-3ab0b364ff86","layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"verticalAlignment":"center","ploverBlockID":"c21ec78c-b880-4a3b-bd9a-b048a5d85cb1","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"
		style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"648f9e6c-59d3-4a2e-8330-d69440511d06","cssOrder":{"desktop":"","tablet":0,"mobile":"__INITIAL_VALUE__"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","ploverBlockID":"ba902655-1084-4f9d-98c2-e63847b5693e","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full"><img
					src="<?php the_swift_fse_asset_url('images/features-02.png') ?>" alt=""/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%","ploverBlockID":"eef17755-3935-4fab-aac9-d124c816f5f1","cssOrder":{"desktop":"","tablet":1,"mobile":"__INITIAL_VALUE__"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":3,"ploverBlockID":"64b1f218-e9dc-4531-985b-62102d89b59f"} -->
			<h3 class="wp-block-heading"><?php esc_html_e('Why You Should Choose us', 'swift-fse') ?></h3>
			<!-- /wp:heading -->

			<!-- wp:list {"ploverBlockID":"c12fe823-0b30-468a-92e4-9e3e36ecd01d","className":"is-style-check-circle","style":{"spacing":{"blockGap":"4px"}}} -->
			<ul class="wp-block-list is-style-check-circle">
				<!-- wp:list-item {"ploverBlockID":"4529129e-ac8a-47f1-9bf2-5c584b3e6b28"} -->
				<li><?php esc_html_e('Pixel-perfect design pattern library', 'swift-fse') ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item {"ploverBlockID":"b788764c-150c-403e-bfc2-3a0e32c29b31"} -->
				<li><?php esc_html_e('Flexible page builder', 'swift-fse') ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item {"ploverBlockID":"edadfdf9-9722-484c-b167-363816c4ef21"} -->
				<li><?php esc_html_e('All-in-one extensions', 'swift-fse') ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:group {"ploverBlockID":"5fae6711-42f8-4eb2-95bf-5db7bdd9a2d3","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"ploverBlockID":"08909091-f256-4700-aed8-9b3679695e99"} -->
				<p><a href="#"><?php esc_html_e('Learn more about our features', 'swift-fse') ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
 