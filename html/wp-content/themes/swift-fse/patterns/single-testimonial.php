<?php
/**
 * Title: Single Testimonial
 * Slug: swift-fse/single-testimonial
 * Categories: testimonials, swift-fse
 */
?>
<!-- wp:group {"metadata":{"name":"Single Testimonial"},"ploverBlockID":"543b0fc2-019b-41bd-bec9-397b405f055f","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-400"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"neutral-950","textColor":"neutral-400","layout":{"type":"constrained","wideSize":"960px"}} -->
<div class="wp-block-group alignfull has-neutral-400-color has-neutral-950-background-color has-text-color has-background has-link-color"
	style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:cover {"overlayColor":"neutral-800","isUserOverlayColor":true,"minHeight":238,"minHeightUnit":"px","ploverBlockID":"0480254c-7b75-4490-97d9-822718f01565","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-200"}}}},"textColor":"neutral-200","shapeColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-active)","invertShape":true} -->
	<div class="wp-block-cover alignwide has-neutral-200-color has-text-color has-link-color" style="min-height:238px">
		<span aria-hidden="true"
			class="wp-block-cover__background has-neutral-800-background-color has-background-dim-100 has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","ploverBlockID":"f7c1be84-910e-4113-a286-669703d8da8b","fontSize":"3-x-large","fontFamily":"lora"} -->
			<p class="has-text-align-center has-lora-font-family has-3-x-large-font-size"><?php esc_html_e("“ It's really amazing, I created my dream website and everything is so impressive. ”", 'swift-fse') ?></p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:image {"width":"98px","sizeSlug":"full","linkDestination":"none","ploverBlockID":"2e14bdee-cce4-4282-938e-bcfc28809058","align":"center","style":{"border":{"radius":"100px"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized has-custom-border">
        <img
			src="<?php the_plover_asset_url( 'images/portrait-03.jpg' ); ?>" alt=""
			style="border-radius:100px;width:98px" />
        </figure>
	<!-- /wp:image -->

	<!-- wp:group {"ploverBlockID":"831432c9-fda7-4b3f-819f-b7fa1d52e96d","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group" style="padding-top:0;padding-bottom:0">
		<!-- wp:paragraph {"ploverBlockID":"db89c6f0-eab5-4a7e-a491-232d60d69aec","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"2-x-large"} -->
		<p class="has-2-x-large-font-size" style="font-style:normal;font-weight:600">Harper Conner</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"ploverBlockID":"fc628f0d-9fb0-4fda-83aa-81131b45e54c","fontSize":"small"} -->
		<p class="has-small-font-size"><?php esc_html_e('Artwork Blogger', 'swift-fse') ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
