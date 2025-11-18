<?php

/**
 * Title: PRO: Rooms WooCommerce Carousel
 * Slug: cozy-essential-addons/lavisto-room-woocommerce
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mb/about.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Room and Suite WooCommerce"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Room Showcase"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:100px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:60px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"bottom","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"54px"}},"textColor":"heading-color"} -->
                    <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:54px"><?php esc_html_e('Rooms &amp; Suites', 'cozy-essential-addons') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
                <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"heading-color","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"18px","textTransform":"uppercase"},"spacing":{"padding":{"left":"45px","right":"45px","top":"18px","bottom":"18px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-button-hover-hard-black-shadow","fontFamily":"montagu-slab"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-heading-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:18px;padding-right:45px;padding-bottom:18px;padding-left:45px"><?php esc_html_e('View More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cozy-block/product-carousel {"blockClientId":"f2c6d1f5-64fb-43ae-a796-c688f1953259","namespace":"cozy-block/product-carousel","layout":"carousel","saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":7,"labelBefore":"","contentType":"percent","labelAfter":"OFF","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#FF8000","typography":{"color":"#FFFFFF"},"labelTypography":{"color":"#FFFFFF"}},"pagination":{"enabled":true,"width":20,"height":7,"borderRadius":10,"activeWidth":20,"activeBorderRadius":10,"activeColor":"#FF8000","color":"#0039CA","activeColorHover":"#0039CA","colorHover":"#FF8000","verticalPosition":-40},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"backgroundColor":"#203B80","color":"#FFFFFF","backgroundColorHover":"#FF8000","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":true,"slidesPerView":"2","spaceBetween":30,"speed":700}} -->
        <div class="cozy-block-product-carousel layout-carousel hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_f2c6d1f5_64fb_43ae_a796_c688f1953259"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
            <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
                <!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"isUserOverlayColor":true,"minHeight":580,"gradient":"dark-gradient","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center has-light-color-color has-text-color has-link-color" style="padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px;min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"","level":4,"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"x-large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

                        <!-- wp:group {"style":{"border":{"top":{"color":"#e1e7f585","width":"1px"}},"spacing":{"padding":{"top":"20px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group" style="border-top-color:#e1e7f585;border-top-width:1px;padding-top:20px"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
                            <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"light-color","fontFamily":"montagu-slab","fontSize":"big","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} /-->

                                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:read-more {"content":"Explore More","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"}},"border":{"width":"1px"},"typography":{"textTransform":"uppercase"}},"className":"is-style-readmore-hover-black-shadow","fontFamily":"montagu-slab"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
            <div class="swiper-button-prev cozy-block-button-prev"></div>
            <div class="swiper-button-next cozy-block-button-next"></div>
            <div class="swiper-pagination cozy-pagination"></div>
        </div>
        <!-- /wp:cozy-block/product-carousel -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->