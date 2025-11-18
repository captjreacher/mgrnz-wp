<?php

/**
 * Title: PRO: Offer & Promotion Carousel
 * Slug: cozy-essential-addons/homelancer-offer-carousel
 * Description: Offer Carousel for Homelancer pro
 * Categories: homelancer-offer
 * Inserter: true
 */
$homelancer_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/homelancer/offer_1.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/homelancer/offer_2.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/homelancer/offer_3.png',
);
?>
<!-- wp:group {"metadata":{"categories":["homelancer-offer"],"patternName":"cozy-essential-addons/homelancer-offer-carousel","name":"Offer Carousel"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"64px","bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"54px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:54px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Offer &amp; Promotions', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"f7472f28-487c-4065-a944-1b92e96dfb3c","display":"carousel","gridOptions":{"enableMasonry":false,"columnCount":3,"gap":24},"pagination":{"enabled":true,"gap":4,"width":10,"height":10,"borderRadius":10,"activeWidth":28,"activeHeight":10,"activeBorderRadius":10,"activeBorder":{"width":"","style":"","color":""},"activeOffset":0,"activeColor":"#F3752B","color":"#113C3D","activeColorHover":"#113C3D","colorHover":"#F3752B","activeBorderHover":"","align":"center","verticalPosition":-47,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"border":{"width":"","style":"","color":""},"backgroundColor":"#113C3D","color":"#FFFFFE","backgroundColorHover":"#F3752B","colorHover":"#FFFFFE","borderHover":""},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"reverseDirection":false,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":24,"speed":700}} -->
    <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_f7472f28_487c_4065_a944_1b92e96dfb3c">
        <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1872,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1872" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1873,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1873" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1872,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1872" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1873,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1873" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1872,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1872" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:image {"id":1874,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1874" /></figure>
                    <!-- /wp:image -->
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