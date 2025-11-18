<?php

/**
 * Title: PRO: Partners/Brands Showcase Carousel
 * Slug: cozy-essential-addons/hb-brands-carousel
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_13.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_11.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_12.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_4.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_14.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_3.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/brand_7.png'
);
?>
<!-- wp:group {"metadata":{"name":"Brands Showcase Carousel"},"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1} -->
        <h1 class="wp-block-heading has-text-align-center"><?php esc_html_e('Trusted Brands &amp; Partners', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"handyman-blocks-brands-carousel","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group handyman-blocks-brands-carousel"><!-- wp:cozy-block/featured-content-box {"blockClientId":"93ebaa98-de33-47f0-b21c-aa4d0ca538b7","display":"carousel","pagination":{"enabled":true,"width":7,"height":3,"borderRadius":1,"activeWidth":15,"activeBorderRadius":1,"activeColor":"#FFB84F","color":"#2A2722","activeColorHover":"#FF4F4F","colorHover":"#FF4F4F","verticalPosition":-30},"navigation":{"enabled":false,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":true,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"6","spaceBetween":100,"speed":700}} -->
        <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_93ebaa98_de33_47f0_b21c_aa4d0ca538b7">
            <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:group {"lock":{"move":false,"remove":true},"metadata":{"name":"Featured Image"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"className":"cozy-layout-wrapper"} -->
                        <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1468,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                            <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-1468" /></figure>
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
                        <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1466,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                            <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-1466" /></figure>
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
                        <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1467,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                            <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-1467" /></figure>
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
                        <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1460,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                            <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-1460" /></figure>
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
                        <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1469,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                            <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[4]) ?>" alt="" class="wp-image-1469" /></figure>
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
                        <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1459,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                            <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[5]) ?>" alt="" class="wp-image-1459" /></figure>
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
                        <div class="wp-block-group cozy-layout-wrapper" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"id":1456,"sizeSlug":"full","linkDestination":"none","lock":{"move":true,"remove":true},"align":"center","className":"cozy-featured-content-box__featured-image"} -->
                            <figure class="wp-block-image aligncenter size-full cozy-featured-content-box__featured-image"><img src="<?php echo esc_url($ct_patterns_images[6]) ?>" alt="" class="wp-image-1456" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->
            </div>
            <div class="swiper-pagination cozy-pagination"></div>
        </div>
        <!-- /wp:cozy-block/featured-content-box -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->