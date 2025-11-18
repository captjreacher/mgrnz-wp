<?php

/**
 * Title: PRO: Featured Content Slider
 * Slug: cozy-essential-addons/lavisto-featured-content-slide
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/boating.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/offerbg.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/spa.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/wedding_celebration.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/banner_bg_2.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Experience the Luxury"},"style":{"spacing":{"padding":{"top":"110px","bottom":"90px","left":"var:preset|spacing|40","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:0;padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"64px"}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:64px"><?php esc_html_e('Experience the Luxury', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","top":"0","bottom":"0","left":"8.5%"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:8.5%"><!-- wp:cozy-block/featured-content-box {"blockClientId":"ca9a9d6e-1328-4b21-81bf-902035778782","display":"carousel","layout":"gallery","pagination":{"enabled":true,"width":20,"height":7,"borderRadius":20,"activeWidth":20,"activeBorderRadius":20,"activeColor":"#FF8000","color":"#0039CA","activeColorHover":"#0039CA","colorHover":"#FF8000","verticalPosition":-30},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"backgroundColor":"#203B80","color":"#FFFFFF","backgroundColorHover":"#FF8000","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":true,"slidesPerView":"1.4","spaceBetween":24,"speed":700}} -->
        <div class="cozy-block-featured-content-box display-carousel layout-gallery  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_ca9a9d6e_1328_4b21_81bf_902035778782">
            <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1184,"dimRatio":0,"customOverlayColor":"#948d95","isUserOverlayColor":true,"minHeight":540,"contentPosition":"top left","isDark":false,"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#948d95"></span><img class="wp-block-cover__image-background wp-image-1184" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                                <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading -->
                                    <h2 class="wp-block-heading"><?php esc_html_e('Delux Rooms', 'cozy-essential-addons') ?></h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px","bottom":"0px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:30px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":1278,"dimRatio":0,"customOverlayColor":"#948d95","isUserOverlayColor":true,"minHeight":540,"contentPosition":"top left","isDark":false,"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#948d95"></span><img class="wp-block-cover__image-background wp-image-1278" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                                <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading -->
                                    <h2 class="wp-block-heading"><?php esc_html_e('Boating Adventures', 'cozy-essential-addons') ?></h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px","bottom":"0px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:30px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":1278,"dimRatio":0,"customOverlayColor":"#948d95","isUserOverlayColor":true,"minHeight":540,"contentPosition":"top left","isDark":false,"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#948d95"></span><img class="wp-block-cover__image-background wp-image-1278" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                                <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading -->
                                    <h2 class="wp-block-heading"><?php esc_html_e('Swimming Pool', 'cozy-essential-addons') ?></h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px","bottom":"0px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:30px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":1278,"dimRatio":0,"customOverlayColor":"#948d95","isUserOverlayColor":true,"minHeight":540,"contentPosition":"top left","isDark":false,"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#948d95"></span><img class="wp-block-cover__image-background wp-image-1278" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                                <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading -->
                                    <h2 class="wp-block-heading"><?php esc_html_e('Yoga &amp; SPA', 'cozy-essential-addons') ?></h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px","bottom":"0px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:30px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[4]) ?>","id":1278,"dimRatio":0,"customOverlayColor":"#948d95","isUserOverlayColor":true,"minHeight":540,"contentPosition":"top left","isDark":false,"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#948d95"></span><img class="wp-block-cover__image-background wp-image-1278" alt="" src="<?php echo esc_url($ct_patterns_media[4]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                                <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading -->
                                    <h2 class="wp-block-heading"><?php esc_html_e('Wedding Celebrations!', 'cozy-essential-addons') ?></h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px","bottom":"0px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:30px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[5]) ?>","id":1278,"dimRatio":0,"customOverlayColor":"#948d95","isUserOverlayColor":true,"minHeight":540,"contentPosition":"top left","isDark":false,"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#948d95"></span><img class="wp-block-cover__image-background wp-image-1278" alt="" src="<?php echo esc_url($ct_patterns_media[5]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left"}} -->
                                <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading -->
                                    <h2 class="wp-block-heading"><?php esc_html_e('Peace Environment', 'cozy-essential-addons') ?></h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px","bottom":"0px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:30px;margin-bottom:0px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"typography":{"fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}}},"borderColor":"dark-color","className":"is-style-button-hover-hard-black-shadow-sec","fontFamily":"montagu-slab"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow-sec has-montagu-slab-font-family" style="font-size:18px;text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color has-border-color has-dark-color-border-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
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
</div>
<!-- /wp:group -->