<?php

/**
 * Title: PRO: Product Grid
 * Slug: cozy-essential-addons/storemate-product-grid
 * Categories: storemate
 */
?>
<!-- wp:group {"metadata":{"categories":["storemate"],"patternName":"cozy-essential-addons/storemate-product-grid","name":"PRO: Product Grid"},"className":"storemate-slide-up","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group storemate-slide-up" style="padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Featured Products</h4>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"storemate-more-products is-style-button-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"border":{"radius":"0px","bottom":{"color":"var:preset|color|heading-color","width":"2px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-button storemate-more-products is-style-button-hover-secondary-color"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/product-carousel {"blockClientId":"eeda8b12-baae-4b9a-afc2-a9762c2c1df5","namespace":"cozy-block/product-carousel","saleBadge":{"enabled":true,"display":"flex","position":"right","top":12,"right":6,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"percent","labelAfter":"","padding":{"top":10,"right":8,"bottom":10,"left":8},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#007766","typography":{"fontFamily":"sans-serif","fontSize":12,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007766","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":-40},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#013839","color":"#ffffff","backgroundColorHover":"#e56404","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"4","spaceBetween":26,"speed":2000}} -->
<div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_eeda8b12_baae_4b9a_afc2_a9762c2c1df5"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
<div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template","layout":{"type":"default"}} -->
<!-- wp:group {"className":"storemate-product-box","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group storemate-product-box"><!-- wp:group {"className":"storemate-product-image","style":{"spacing":{"margin":{"bottom":"14px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group storemate-product-image" style="margin-bottom:14px"><!-- wp:post-featured-image {"isLink":true,"height":"350px","style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:columns {"className":"storemate-product-buttons","style":{"spacing":{"blockGap":{"left":"1px"}}}} -->
<div class="wp-block-columns storemate-product-buttons"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/product-carousel --></div>
<!-- /wp:group -->