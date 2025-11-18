<?php

/**
 * Title: PRO: Partners Brands Showcase Carousel
 * Slug: cozy-essential-addons/lavisto-partners-carousel
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_13.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_11.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_10.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_4.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_3.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_7.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_8.png'
);
?>
<!-- wp:group {"metadata":{"name":"Partner Brands Carousel"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"light-shade","className":"lavisto-brands-carousel grascale-image","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group lavisto-brands-carousel grascale-image has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/featured-content-box {"blockClientId":"e2058a72-1fb1-4b5c-8e17-5f7f8fd05560","display":"carousel","pagination":{"enabled":false,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":30,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":1,"backgroundColor":"#ffffff00","color":"#0039CA","backgroundColorHover":"#ffffff00","colorHover":"#FF8000"},"sliderOptions":{"loop":true,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"6","spaceBetween":85,"speed":700},"metadata":{"name":"Partners Brand Carousel"}} -->
    <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_e2058a72_1fb1_4b5c_8e17_5f7f8fd05560">
        <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:image {"id":1468,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-1468" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:image {"id":1466,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-1466" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:image {"id":1465,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-1465" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:image {"id":1460,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-1460" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:image {"id":1459,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-1459" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:image {"id":1456,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_media[5]) ?>" alt="" class="wp-image-1456" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:image {"id":1463,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($ct_patterns_media[6]) ?>" alt="" class="wp-image-1463" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:cozy-block/carousel -->
        </div>
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->