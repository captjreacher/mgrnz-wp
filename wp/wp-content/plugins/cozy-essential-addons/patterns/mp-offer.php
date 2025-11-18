<?php

/**
 * Title: PRO: Promotion & Offer
 * Slug: cozy-essential-addons/mp-offer
 * Categories: mighty-plumbers
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/promo4.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Prpmotion \u0026 Offer"},"style":{"spacing":{"padding":{"top":"90px","bottom":"110px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:110px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"},"margin":{"bottom":"60px"}}},"gradient":"light-shade-color","className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group mighty-plumbers-fade-up has-light-shade-color-gradient-background has-background" style="margin-bottom:60px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700"><?php esc_html_e('Promotions &amp; Offers', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"bc7404c9-5c1e-4e76-9234-3a8530345f21","display":"carousel","pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#EB7100","color":"#062A60","activeColorHover":"#062A60","colorHover":"#EB7100","verticalPosition":-10},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"backgroundColor":"#FFFFFF","color":"#EB7100","backgroundColorHover":"#EB7100","colorHover":"#fff"},"sliderOptions":{"loop":true,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700}} -->
    <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_bc7404c9_5c1e_4e76_9234_3a8530345f21">
        <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":396,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-396" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":402,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-402" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":403,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-403" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                    <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":404,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-404" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
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