<?php

/**
 * Title: PRO: Rooms & Suite Carousel
 * Slug: cozy-essential-addons/lavisto-room-carousel
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/icon_guest.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/icon_bed.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/icon_bathroom.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_5.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/room_2.jpg',

);
?>
<!-- wp:group {"metadata":{"name":"Room and Suite Carousel"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Room Showcase"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:100px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
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

        <!-- wp:cozy-block/featured-content-box {"blockClientId":"f83085cd-cb0d-4cdb-a798-a50a13bc096c","display":"carousel","pagination":{"enabled":true,"width":20,"height":7,"borderRadius":60,"activeWidth":20,"activeBorderRadius":10,"activeColor":"#FF8000","color":"#0039CA","activeColorHover":"#0039CA","colorHover":"#FF8000","verticalPosition":-40},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":50,"iconBoxHeight":50,"borderRadius":1,"backgroundColor":"#203B80","color":"#FFFFFF","backgroundColorHover":"#FF8000","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":true,"slidesPerView":"2","spaceBetween":30,"speed":700}} -->
        <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_f83085cd_cb0d_4cdb_a798_a50a13bc096c">
            <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":942,"dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":580,"contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"left":"32px","right":"32px","top":"32px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-942" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"lavisto-room-price","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                                <div class="wp-block-group lavisto-room-price"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"14px","right":"14px"}}},"backgroundColor":"light-color","textColor":"dark-color","fontSize":"small"} -->
                                    <p class="has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:10px;padding-right:14px;padding-bottom:10px;padding-left:14px;text-transform:uppercase"><?php esc_html_e('$270/Night', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
                                <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:34px"><a href="#"><?php esc_html_e('Deluxe Room', 'cozy-essential-addons') ?></a></h2>
                                <!-- /wp:heading -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"24px"}},"border":{"top":{"color":"#e1e7f585","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="border-top-color:#e1e7f585;border-top-width:1px;padding-top:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":974,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-974" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('4 Guests', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":964,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-964" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('2 Beds', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":976,"width":"22px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-976" style="object-fit:contain;width:22px;height:auto" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('1 Bathroom', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[4]) ?>","id":1159,"dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":580,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"left":"32px","right":"32px","top":"32px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1159" alt="" src="<?php echo esc_url($ct_patterns_media[4]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"lavisto-room-price","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                                <div class="wp-block-group lavisto-room-price"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"14px","right":"14px"}}},"backgroundColor":"light-color","textColor":"dark-color","fontSize":"small"} -->
                                    <p class="has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:10px;padding-right:14px;padding-bottom:10px;padding-left:14px;text-transform:uppercase"><?php esc_html_e('$270/Night', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
                                <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:34px"><a href="#"><?php esc_html_e('Deluxe Room', 'cozy-essential-addons') ?></a></h2>
                                <!-- /wp:heading -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"24px"}},"border":{"top":{"color":"#e1e7f585","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="border-top-color:#e1e7f585;border-top-width:1px;padding-top:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":974,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-974" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('4 Guests', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":964,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-964" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('2 Beds', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":976,"width":"22px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-976" style="object-fit:contain;width:22px;height:auto" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('1 Bathroom', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[5]) ?>","id":1184,"dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":580,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"left":"32px","right":"32px","top":"32px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1184" alt="" src="<?php echo esc_url($ct_patterns_media[5]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"lavisto-room-price","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                                <div class="wp-block-group lavisto-room-price"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"14px","right":"14px"}}},"backgroundColor":"light-color","textColor":"dark-color","fontSize":"small"} -->
                                    <p class="has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:10px;padding-right:14px;padding-bottom:10px;padding-left:14px;text-transform:uppercase"><?php esc_html_e('$270/Night', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
                                <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:34px"><a href="#"><?php esc_html_e('Deluxe Room', 'cozy-essential-addons') ?></a></h2>
                                <!-- /wp:heading -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"24px"}},"border":{"top":{"color":"#e1e7f585","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="border-top-color:#e1e7f585;border-top-width:1px;padding-top:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":974,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-974" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('4 Guests', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":964,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-964" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('2 Beds', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":976,"width":"22px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-976" style="object-fit:contain;width:22px;height:auto" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('1 Bathroom', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[6]) ?>","id":942,"dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":580,"contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"left":"32px","right":"32px","top":"32px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px;min-height:580px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-942" alt="" src="<?php echo esc_url($ct_patterns_media[6]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"lavisto-room-price","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                                <div class="wp-block-group lavisto-room-price"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"14px","right":"14px"}}},"backgroundColor":"light-color","textColor":"dark-color","fontSize":"small"} -->
                                    <p class="has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color has-small-font-size" style="padding-top:10px;padding-right:14px;padding-bottom:10px;padding-left:14px;text-transform:uppercase"><?php esc_html_e('$270/Night', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"34px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color"} -->
                                <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:34px"><a href="#"><?php esc_html_e('Deluxe Room', 'cozy-essential-addons') ?></a></h2>
                                <!-- /wp:heading -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"24px"}},"border":{"top":{"color":"#e1e7f585","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                                <div class="wp-block-group" style="border-top-color:#e1e7f585;border-top-width:1px;padding-top:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":974,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-974" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('4 Guests', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":964,"width":"22px","height":"22px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-964" style="object-fit:contain;width:22px;height:22px" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('2 Beds', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:image {"id":976,"width":"22px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-976" style="object-fit:contain;width:22px;height:auto" /></figure>
                                        <!-- /wp:image -->

                                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('1 Bathroom', 'cozy-essential-addons') ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
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
</div>
<!-- /wp:group -->