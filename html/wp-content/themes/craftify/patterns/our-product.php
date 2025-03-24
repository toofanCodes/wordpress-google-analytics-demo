<?php
/**
 * Title: Our Product
 * Slug: craftify/our-product
 * Categories: craftify
 *
 * @package Craftify
 * @since 1.0.0
 */

?>

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"24px","left":"24px","top":"40px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:24px;padding-bottom:40px;padding-left:24px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"40px","left":"0","right":"0"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:40px;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Our Products', 'craftify' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:wc-booster-pro/carousel-category-product {"block_id":"wc-booster-pro-carousel-product-category-block-e8b3fde8-13d7-4b72-8aaa-954900d4743d","cat_id":"[{\u0022id\u0022:\u0022\u0022,\u0022name\u0022:\u0022All\u0022},{},{},{}]","imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":300,"tablet":300,"mobile":300},"units":["px"]},"imageSize":"large","productBgColor":"","color":"#ffffff","categoryTextColor":"transparent","categoryTextHoverColor":"transparent","categoryBgColor":"transparent","categoryHoverColor":"transparent","bgColor":"","priceColor":"#ffffff","arrowRightBgColor":"transparent","arrowRightColor":"#ffffff","arrowLeftBgColor":"transparent","arrowLeftColor":"#ffffff","arrowRadius":12,"imageRadius":12,"enableRating":false,"arrowPosition":{"activeUnit":"%","range":{"min":-100,"max":2000},"values":{"desktop":45,"tablet":40,"mobile":40},"units":["%","px","em"]},"prevArrowPosition":"left","arrowPrevPosition":{"activeUnit":"px","range":{"min":0,"max":2000},"values":{"desktop":0,"tablet":0,"mobile":0},"units":["%","px","em"]},"arrowNextPosition":{"activeUnit":"px","range":{"min":0,"max":2000},"values":{"desktop":0,"tablet":0,"mobile":0},"units":["%","px","em"]}} /--></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"metadata":{"name":"Our Product"},"className":"craftify-our-products","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"24px","left":"24px","top":"40px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group craftify-our-products" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:24px;padding-bottom:40px;padding-left:24px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"40px","left":"0","right":"0"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:40px;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Our Products', 'craftify' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'All', 'craftify' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Living', 'craftify' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Kitchen', 'craftify' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Bedroom', 'craftify' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__( 'Terrace', 'craftify' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg","id":72,"dimRatio":0,"customOverlayColor":"#b9b4b2","isUserOverlayColor":true,"minHeight":350,"contentPosition":"top left","style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left" style="border-radius:12px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b4b2"></span><img class="wp-block-cover__image-background wp-image-72" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"8px","right":"8px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"30px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:30px;margin-top:0;margin-bottom:0;padding-top:4px;padding-right:8px;padding-bottom:4px;padding-left:8px"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-text-color has-link-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( '30%', 'craftify' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5"><a href="#"><?php echo esc_html__( 'White Fabric Sofa', 'craftify' ); ?></a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium-small"} -->
<p class="has-base-color has-text-color has-link-color has-medium-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( '$112.00', 'craftify' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/living.jpg","id":130,"dimRatio":0,"customOverlayColor":"#b9b4b2","isUserOverlayColor":true,"minHeight":350,"style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:12px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b4b2"></span><img class="wp-block-cover__image-background wp-image-130" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/living.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5"><a href="#"><?php echo esc_html__( 'White Fabric Sofa', 'craftify' ); ?></a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium-small"} -->
<p class="has-base-color has-text-color has-link-color has-medium-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( '$112.00', 'craftify' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/kitchen.jpg","id":127,"dimRatio":0,"customOverlayColor":"#b9b4b2","isUserOverlayColor":true,"minHeight":350,"isDark":false,"style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:12px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b4b2"></span><img class="wp-block-cover__image-background wp-image-127" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/kitchen.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5"><a href="#"><?php echo esc_html__( 'White Fabric Sofa', 'craftify' ); ?></a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium-small"} -->
<p class="has-base-color has-text-color has-link-color has-medium-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( '$112.00', 'craftify' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/kitchen.jpg","id":127,"dimRatio":0,"customOverlayColor":"#b9b4b2","isUserOverlayColor":true,"minHeight":350,"isDark":false,"style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:12px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b4b2"></span><img class="wp-block-cover__image-background wp-image-127" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/kitchen.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5"><a href="#"><?php echo esc_html__( 'White Fabric Sofa', 'craftify' ); ?></a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium-small"} -->
<p class="has-base-color has-text-color has-link-color has-medium-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( '$112.00', 'craftify' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } ?>