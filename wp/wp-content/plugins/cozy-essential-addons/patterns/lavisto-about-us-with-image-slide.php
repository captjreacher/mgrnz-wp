<?php

/**
 * Title: PRO: About Us with Image Slide Showcase
 * Slug: cozy-essential-addons/lavisto-about-us-with-image-slide
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_4.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"About Us with image showcase"},"style":{"spacing":{"padding":{"top":"110px","bottom":"90px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:0;padding-bottom:90px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"64px"}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:64px"><?php esc_html_e('Experience the Luxury Lifestyle at Lavisto!', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px","bottom":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px;margin-bottom:40px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"45px","right":"45px","top":"18px","bottom":"18px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:18px;padding-right:45px;padding-bottom:18px;padding-left:45px"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"2461f989-35fc-46c2-a196-bb94a9697acb","display":"carousel","layout":"gallery","pagination":{"enabled":true,"width":20,"height":7,"borderRadius":20,"activeWidth":20,"activeBorderRadius":20,"activeColor":"#FF8000","color":"#0039CA","activeColorHover":"#0039CA","colorHover":"#FF8000","verticalPosition":-30},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"backgroundColor":"#203B80","color":"#FFFFFF","backgroundColorHover":"#FF8000","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":true,"slidesPerView":"1.6","spaceBetween":24,"speed":700}} -->
    <div class="cozy-block-featured-content-box display-carousel layout-gallery  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_2461f989_35fc_46c2_a196_bb94a9697acb">
        <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1184,"dimRatio":0,"customOverlayColor":"#948d95","isUserOverlayColor":true,"minHeight":540,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#948d95"></span><img class="wp-block-cover__image-background wp-image-1184" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":1279,"dimRatio":0,"customOverlayColor":"#b7a090","isUserOverlayColor":true,"minHeight":540,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b7a090"></span><img class="wp-block-cover__image-background wp-image-1279" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":1018,"dimRatio":0,"customOverlayColor":"#9b95b4","isUserOverlayColor":true,"minHeight":540,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b95b4"></span><img class="wp-block-cover__image-background wp-image-1018" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":1078,"dimRatio":0,"customOverlayColor":"#757277","isUserOverlayColor":true,"minHeight":540,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#757277"></span><img class="wp-block-cover__image-background wp-image-1078" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
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