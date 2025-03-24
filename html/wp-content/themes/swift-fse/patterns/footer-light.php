<?php
/**
 * Title: Light Footer, 4 columns
 * Slug: swift-fse/footer-light
 * Categories: footer, swift-fse
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"metadata":{"name":"Footer Light"},"ploverBlockID":"5b4075e2-2485-4f6f-8189-b35845ab821f","align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"0"}},"border":{"top":{"color":"var:preset|color|neutral-400","width":"1px"},"right":[],"bottom":[],"left":[]},"elements":{"link":{"color":{"text":"var:preset|color|primary-color"},":hover":{"color":{"text":"var:preset|color|primary-active"}}}}},"backgroundColor":"neutral-0","textColor":"neutral-950","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default has-neutral-950-color has-neutral-0-background-color has-text-color has-background has-link-color"
	style="border-top-color:var(--wp--preset--color--neutral-400);border-top-width:1px;padding-top:var(--wp--preset--spacing--large);padding-bottom:0">
	<!-- wp:columns {"ploverBlockID":"861fe498-70be-42c6-bf52-97499700b685","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:0;padding-bottom:0">
		<!-- wp:column {"width":"40%","ploverBlockID":"2d1b9009-f6e4-470f-8d94-70ea8197ef3e"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"ploverBlockID":"4d89b875-5ef0-430b-8791-a97f2c1c9f4f","style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"ploverBlockID":"7aee1073-136f-4983-a15e-a122ed927ad4","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:site-logo {"width":48,"shouldSyncIcon":true,"ploverBlockID":"f89000b9-c614-463c-ba24-5c9c8541c87f","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

					<!-- wp:site-title {"level":0,"ploverBlockID":"cdae8e30-486d-49ac-b801-a04c31734449","style":{"typography":{"textTransform":"uppercase","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"},":hover":{"color":{"text":"var:preset|color|primary-color"}}}}},"textColor":"neutral-950","fontSize":"medium"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search this site","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"ploverBlockID":"8c37ddfd-d4f5-4db6-8d0e-d56a3b99d201","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

				<!-- wp:social-links {"iconColor":"neutral-600","iconColorValue":"#52525b","size":"has-small-icon-size","ploverBlockID":"7b8190b2-973a-4c3d-940c-9db2e23f734f","className":"is-style-logos-only","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"
					style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)">
					<!-- wp:social-link {"url":"#","service":"facebook","ploverBlockID":"7c8d5da8-b04b-4120-859f-f5e8d7644db6"} /-->

					<!-- wp:social-link {"url":"#","service":"x","ploverBlockID":"81b7424b-da73-42d6-885b-28e84de70754"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram","ploverBlockID":"03b2edcf-4c07-4792-9eb5-0005744c1e8d"} /-->

					<!-- wp:social-link {"url":"#","service":"tiktok","ploverBlockID":"bc37c684-a390-4ed3-8478-d1f539b57e97"} /-->

					<!-- wp:social-link {"url":"#","service":"github","ploverBlockID":"ef4ddcf0-889b-4d5e-af64-5395820919ce"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","ploverBlockID":"fe853e47-14bb-403c-b723-1d07547e3a1c"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"ploverBlockID":"9658105f-e616-44f7-ad2c-e591e6144824","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"ploverBlockID":"0b9d4458-3860-49a3-ac00-ea82e6060fc2","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"ploverBlockID":"7d7e3938-c722-49e9-a6e5-26cc32779345","className":"has-medium-font-size","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family"
						style="font-style:normal;font-weight:600">
						<?php esc_html_e('About', 'swift-fse') ?> </h2>
					<!-- /wp:heading -->

					<!-- wp:group {"ploverBlockID":"3ad7a831-9d97-4db8-a135-825ec8a67b83","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:navigation {"overlayMenu":"never","ploverBlockID":"8caa22da-8202-45e7-97d5-a3da812879ce","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"Team","url":"#","ploverBlockID":"237f7b7f-f0e0-418e-b859-b14609ade4a1"} /-->

						<!-- wp:navigation-link {"label":"History","url":"#","ploverBlockID":"4ae0459f-28f1-45bf-a282-cc2f7b9b4563"} /-->

						<!-- wp:navigation-link {"label":"Careers","url":"#","ploverBlockID":"7f93781f-cbe4-42e1-b7b0-6aef7a06d144"} /-->
						<!-- /wp:navigation -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"ploverBlockID":"231a2d4e-053f-4da9-a46f-d2019ce49c4e","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"ploverBlockID":"7df6c0c9-cc88-4002-a3e4-614cde7753ff","className":"has-medium-font-size","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family"
						style="font-style:normal;font-weight:600">
						<?php esc_html_e('Privacy', 'swift-fse') ?> </h2>
					<!-- /wp:heading -->

					<!-- wp:group {"ploverBlockID":"29eb2e7b-6380-46ad-8c63-3dda3a4b36ab","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:navigation {"overlayMenu":"never","ploverBlockID":"cb00f814-f537-4b55-b169-9c067fa8f4ad","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"Privacy Policy","url":"#","ploverBlockID":"e55b1bbb-c2d8-4242-b0be-deb500547ed5"} /-->

						<!-- wp:navigation-link {"label":"Terms and Conditions","url":"#","ploverBlockID":"919c1121-0ccd-4162-990e-189cb948a203"} /-->

						<!-- wp:navigation-link {"label":"Contact Us","url":"#","ploverBlockID":"7c732e04-99ac-42c8-b2d1-dab27f7d2892"} /-->
						<!-- /wp:navigation -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"ploverBlockID":"0fc5bb24-2469-4df4-b538-b4a6744db0b3","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"ploverBlockID":"51b9ec9b-8706-4392-8e73-5827d2f4e5a7","className":"has-medium-font-size","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
					<h2 class="wp-block-heading has-medium-font-size has-body-font-family"
						style="font-style:normal;font-weight:600">
						<?php esc_html_e('Social', 'swift-fse') ?> </h2>
					<!-- /wp:heading -->

					<!-- wp:group {"ploverBlockID":"3e008189-8d3d-4a6b-950d-fb7bf09334bd","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:navigation {"overlayMenu":"never","ploverBlockID":"f9ddc3d1-b1dd-44ff-8747-4c1127a7e401","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"Facebook","url":"#","ploverBlockID":"297870a5-8bc9-4b6c-a332-b3d2986081c1"} /-->

						<!-- wp:navigation-link {"label":"Instagram","url":"#","ploverBlockID":"295172a4-ce86-4af8-b9e5-cae0cfecd3f8"} /-->

						<!-- wp:navigation-link {"label":"Twitter/X","url":"#","ploverBlockID":"d6c633d9-7391-430f-8b80-5779b099c18b"} /-->
						<!-- /wp:navigation -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"ploverBlockID":"83918586-1487-49d6-ab7d-5956c637682d","align":"full","style":{"border":{"top":{"color":"var:preset|color|neutral-400","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"
		style="border-top-color:var(--wp--preset--color--neutral-400);border-top-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
		<!-- wp:group {"ploverBlockID":"4234ad95-b422-4ff4-a5d0-dc8173a6edab","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide has-small-font-size" style="padding-top:0;padding-bottom:0">
			<!-- wp:paragraph {"ploverBlockID":"0dcd0560-5058-4794-9111-36bdf21ef762"} -->
			<p>
				<?php
				/* Translators: Theme Author link. */
				$author_link = '<a href="' . esc_url( __( 'https://wpplover.com/', 'swift-fse' ) ) . '" rel="nofollow">WP Plover</a>';
				echo sprintf(
				/* Translators: Designed by WP Plover */
					esc_html__( 'Designed by %1$s', 'swift-fse' ),
					$author_link
				);
				?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"ploverBlockID":"b9b53f0e-111a-4c22-ac4c-6af080563b24"} -->
			<p>
				<a href="#"><?php
					/* Translators: To Top link. */
					esc_html_e( 'Top ↑', 'swift-fse' );
					?></a>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
