<?php

/**
 * Title: PRO: Offer & Promotion Carousel
 * Slug: cozy-essential-addons/hb-promotion-carousel
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo4.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Offer \u0026 Promotion Carousel"},"style":{"spacing":{"padding":{"top":"100px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Offer &amp; Promotions', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"05d07765-4df1-416f-9439-3b60cc20de1c","display":"carousel","gridOptions":{"enableMasonry":false,"columnCount":2,"gap":40},"pagination":{"enabled":true,"width":7,"height":3,"borderRadius":1,"activeWidth":15,"activeBorderRadius":1,"activeColor":"#FFB84F","color":"#252525","activeColorHover":"#164861","colorHover":"#FF4F4F","verticalPosition":-40},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"backgroundColor":"#FFB84F","color":"#FFFFFF","backgroundColorHover":"#FF4F4F","colorHover":"#fff"},"sliderOptions":{"loop":true,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700}} -->
    <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_05d07765_4df1_416f_9439_3b60cc20de1c">
        <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"style":"dashed","width":"1px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"borderColor":"meta-color","className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-border-color has-meta-color-border-color" style="border-style:dashed;border-width:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":396,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-396" /></figure>
                        <!-- /wp:image -->


                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title"} -->
                    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('30% OFF for First Five', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"style":"dashed","width":"1px"}},"borderColor":"meta-color","className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-border-color has-meta-color-border-color" style="border-style:dashed;border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":402,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-402" /></figure>
                        <!-- /wp:image -->


                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title"} -->
                    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('50% OFF for Veterans', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"border":{"style":"dashed","width":"1px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"borderColor":"meta-color","className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-border-color has-meta-color-border-color" style="border-style:dashed;border-width:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":396,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-396" /></figure>
                        <!-- /wp:image -->


                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title"} -->
                    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('30% OFF for First Five', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"style":"dashed","width":"1px"}},"borderColor":"meta-color","className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container has-border-color has-meta-color-border-color" style="border-style:dashed;border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":402,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                        <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-402" /></figure>
                        <!-- /wp:image -->


                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Featured Title"} -->
                    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('50% OFF for Veterans', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"placeholder":"Read More","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->
        </div>
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->