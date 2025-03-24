<?php
/**
 * Title: Light Header
 * Slug: swift-fse/header-light
 * Categories: header, swift-fse
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"metadata":{"name":"Header Light"},"ploverBlockID":"aa9a536d-7599-480a-8edb-14f3285b7e3b","align":"full","className":"has-sticky-bottom-border","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral-800"}}}},"backgroundColor":"neutral-0","textColor":"neutral-800","layout":{"type":"constrained"},"stickyBlock":"yes","stickyZIndex":20,"stickyContainer":"document"} -->
<div class="wp-block-group alignfull has-sticky-bottom-border has-neutral-800-color has-neutral-0-background-color has-text-color has-background has-link-color">
	<!-- wp:group {"metadata":{"name":"Content"},"ploverBlockID":"2bc09c3c-708e-49b4-9392-a73a85a4b17c","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"
		style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)">
		<!-- wp:group {"ploverBlockID":"90484e8d-1161-46c9-8d11-514c4d213ad5","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"ploverBlockID":"f2ba0857-798d-4813-a763-b1bba5c3c32c","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":36,"shouldSyncIcon":true,"ploverBlockID":"5c9e70bd-7f8c-4f8c-8d72-45c72216a563"} /-->

				<!-- wp:site-title {"ploverBlockID":"1d3aa742-b31a-42c0-9dbf-bdefa74a5ff1","fontSize":"x-large","fontFamily":"lora"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"ploverBlockID":"efca88b3-c328-4b7b-96c1-df36c2d3dd51","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"ploverBlockID":"9e339fbe-df52-4864-8fa6-8457e5399362","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:social-links {"iconColor":"current","iconColorValue":"currentcolor","size":"has-normal-icon-size","ploverBlockID":"ec915190-270d-48d0-8f4c-8b85e7d92ca7","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-small"}}}} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"x","ploverBlockID":"0c7ac620-fb4b-46ee-9930-5c65374c35a9"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram","ploverBlockID":"97c28516-baf9-49c9-abae-18973d3e3296"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin","ploverBlockID":"9b17bc36-0148-40d4-a18e-2455accbd83a"} /-->
			</ul>
			<!-- /wp:social-links -->

			<!-- wp:buttons {"metadata":{"categories":["utility","plover"],"patternName":"plover/dark-mode-toggle","name":"Dark Mode Toggle"},"ploverBlockID":"60f06966-f42d-491f-95fa-704a64687310","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"transparent","textColor":"current","ploverBlockID":"46ae5d92-dce3-461a-af3f-004b74ef07c0","className":"wp-block-button plover-hide-on-dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|current"}}},"spacing":{"padding":{"left":"var:preset|spacing|2-x-small","right":"var:preset|spacing|2-x-small","top":"var:preset|spacing|2-x-small","bottom":"var:preset|spacing|2-x-small"},"blockGap":"0"}},"onclick":"(() =\u003e {\n  if (window.togglePloverThemeMode) {\n    window.togglePloverThemeMode('dark');\n  }\n})();","iconLibrary":"plover-core","iconSlug":"moon","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022\u003e\u003cpath d=\u0022M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\u0022\u003e\u003c/path\u003e\u003c/svg\u003e"} -->
				<div class="wp-block-button plover-hide-on-dark"><a
						class="wp-block-button__link has-current-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"
						style="padding-top:var(--wp--preset--spacing--2-x-small);padding-right:var(--wp--preset--spacing--2-x-small);padding-bottom:var(--wp--preset--spacing--2-x-small);padding-left:var(--wp--preset--spacing--2-x-small)"></a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"transparent","textColor":"current","ploverBlockID":"1ebd45c1-5b20-463c-a61d-1b885e453ec7","className":"wp-block-button plover-hide-on-light","style":{"elements":{"link":{"color":{"text":"var:preset|color|current"}}},"spacing":{"padding":{"left":"var:preset|spacing|2-x-small","right":"var:preset|spacing|2-x-small","top":"var:preset|spacing|2-x-small","bottom":"var:preset|spacing|2-x-small"},"blockGap":"0"}},"onclick":"(() =\u003e {\n  if (window.togglePloverThemeMode) {\n    window.togglePloverThemeMode('light');\n  }\n})();","iconLibrary":"plover-core","iconSlug":"sun","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022 fill=\u0022none\u0022 stroke=\u0022currentColor\u0022 stroke-width=\u00222\u0022 stroke-linecap=\u0022round\u0022 stroke-linejoin=\u0022round\u0022\u003e\u003ccircle cx=\u002212\u0022 cy=\u002212\u0022 r=\u00225\u0022\u003e\u003c/circle\u003e\u003cline x1=\u002212\u0022 y1=\u00221\u0022 x2=\u002212\u0022 y2=\u00223\u0022\u003e\u003c/line\u003e\u003cline x1=\u002212\u0022 y1=\u002221\u0022 x2=\u002212\u0022 y2=\u002223\u0022\u003e\u003c/line\u003e\u003cline x1=\u00224.22\u0022 y1=\u00224.22\u0022 x2=\u00225.64\u0022 y2=\u00225.64\u0022\u003e\u003c/line\u003e\u003cline x1=\u002218.36\u0022 y1=\u002218.36\u0022 x2=\u002219.78\u0022 y2=\u002219.78\u0022\u003e\u003c/line\u003e\u003cline x1=\u00221\u0022 y1=\u002212\u0022 x2=\u00223\u0022 y2=\u002212\u0022\u003e\u003c/line\u003e\u003cline x1=\u002221\u0022 y1=\u002212\u0022 x2=\u002223\u0022 y2=\u002212\u0022\u003e\u003c/line\u003e\u003cline x1=\u00224.22\u0022 y1=\u002219.78\u0022 x2=\u00225.64\u0022 y2=\u002218.36\u0022\u003e\u003c/line\u003e\u003cline x1=\u002218.36\u0022 y1=\u00225.64\u0022 x2=\u002219.78\u0022 y2=\u00224.22\u0022\u003e\u003c/line\u003e\u003c/svg\u003e"} -->
				<div class="wp-block-button plover-hide-on-light"><a
						class="wp-block-button__link has-current-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"
						style="padding-top:var(--wp--preset--spacing--2-x-small);padding-right:var(--wp--preset--spacing--2-x-small);padding-bottom:var(--wp--preset--spacing--2-x-small);padding-left:var(--wp--preset--spacing--2-x-small)"></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:buttons {"ploverBlockID":"b7710752-2926-407a-8806-9c5fc179af34","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|2-x-small"}}},"cssDisplay":{"desktop":"","tablet":"none","mobile":"__INITIAL_VALUE__"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"current","ploverBlockID":"c788cfe9-e545-4219-9e40-d2713e2e1ec4","className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"0.75em","bottom":"0.75em"}},"elements":{"link":{"color":{"text":"var:preset|color|current"}}},"border":{"width":"2px"}},"borderColor":"current"} -->
				<div class="wp-block-button is-style-outline"><a
						class="wp-block-button__link has-current-color has-text-color has-link-color has-border-color has-current-border-color wp-element-button"
						style="border-width:2px;padding-top:0.75em;padding-right:var(--wp--preset--spacing--small);padding-bottom:0.75em;padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e('Log in', 'swift-fse') ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"ploverBlockID":"10bf6766-2498-4e36-82c2-272facb0da65","className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"0.75em","bottom":"0.75em"}},"border":{"style":"solid","width":"2px"}},"borderColor":"neutral-950"} -->
				<div class="wp-block-button is-style-fill"><a
						class="wp-block-button__link has-border-color has-neutral-950-border-color wp-element-button"
						style="border-style:solid;border-width:2px;padding-top:0.75em;padding-right:var(--wp--preset--spacing--small);padding-bottom:0.75em;padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e('Sign up', 'swift-fse') ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
