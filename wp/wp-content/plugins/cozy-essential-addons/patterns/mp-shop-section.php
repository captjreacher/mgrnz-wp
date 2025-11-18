<?php

/**
 * Title: PRO: Shop Section
 * Slug: cozy-essential-addons/mp-shop-section
 * Categories: mighty-plumbers
 */
?>
<!-- wp:group {"metadata":{"name":"Shop Section"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:48px"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e('Shop', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/product-carousel {"blockClientId":"d5deb06a-167c-4b31-8300-396836e76675","namespace":"cozy-block/product-carousel","saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"percent","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#EB7100","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"gridOptions":{"displayColumn":4,"columnGap":30}} -->
    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_d5deb06a_167c_4b31_8300_396836e76675"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
            <!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"borderColor":"dark-shade","className":"mighty-plumbers-shop","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-plumbers-shop has-border-color has-dark-shade-border-color" style="border-width:1px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"260px"} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"spacing":{"margin":{"top":"0px"}},"typography":{"textTransform":"uppercase"}},"textColor":"meta-color","fontSize":"x-small"} /-->

                    <!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"linkTarget":"_blank","style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"6px","bottom":"0px"}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

                    <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"primary","fontSize":"normal","style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

                    <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"6px"}}}} /-->

                    <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|dark-shade","width":"1px"}},"spacing":{"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--dark-shade);border-top-width:1px;margin-top:20px"><!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-outline","textColor":"heading-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"20px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"5px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}}} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:cozy-block/product-carousel -->
</div>
<!-- /wp:group -->