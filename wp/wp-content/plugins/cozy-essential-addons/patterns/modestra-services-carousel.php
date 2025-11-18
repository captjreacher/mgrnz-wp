<?php

/**
 * Title: PRO: Services Carousel
 * Slug: cozy-essential-addons/modestra-services-carousel
 * Categories: modestra
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/service_image_4.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"7rem","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:7rem;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"740px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"18px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-bottom:18px"><!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"15px","right":"15px"}},"border":{"radius":"50px","width":"1px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-modestra-group-gradient-border has-transparent-background-color has-background" style="border-width:1px;border-radius:50px;padding-top:8px;padding-right:15px;padding-bottom:8px;padding-left:15px"><!-- wp:heading {"level":5,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
                    <h5 class="wp-block-heading is-style-default has-heading-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Our Services', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"textAlign":"left"} -->
            <h2 class="wp-block-heading has-text-align-left"><?php esc_html_e('Innovative Services Designed for Your Success', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"24px"}}}} -->
            <p class="has-text-align-left" style="margin-top:24px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. Ut enim ad minim veniam, quis nostrud.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:cozy-block/featured-content-box {"blockClientId":"4d64877f-0bce-4e44-b890-ec0d9ca7fea0","display":"carousel","pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#4F43FF","color":"#252525","activeColorHover":"#FF598E","colorHover":"#a5a5a5","align":"center","verticalPosition":-50,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":50,"backgroundColor":"#4F43FF","color":"#FFFFFE","backgroundColorHover":"#FF598E","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":true,"slidesPerView":3.5,"spaceBetween":40,"speed":700}} -->
        <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_4d64877f_0bce_4e44_b890_ec0d9ca7fea0">
            <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:64px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":4619,"dimRatio":0,"customOverlayColor":"#c3c3c6","isUserOverlayColor":true,"minHeight":360,"isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|white-primary"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c3c3c6"></span><img class="wp-block-cover__image-background wp-image-4619" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Branding', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:64px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":4619,"dimRatio":0,"customOverlayColor":"#c3c3c6","isUserOverlayColor":true,"minHeight":360,"isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|secodnary-white"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c3c3c6"></span><img class="wp-block-cover__image-background wp-image-4619" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Digital Marketing', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:64px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":4619,"dimRatio":0,"customOverlayColor":"#c3c3c6","isUserOverlayColor":true,"minHeight":360,"isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|black-primary"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c3c3c6"></span><img class="wp-block-cover__image-background wp-image-4619" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Business Strategy', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:64px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":4619,"dimRatio":0,"customOverlayColor":"#c3c3c6","isUserOverlayColor":true,"minHeight":360,"isDark":false,"style":{"border":{"radius":"20px"},"color":{"duotone":"var:preset|duotone|white-secondary"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-radius:20px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c3c3c6"></span><img class="wp-block-cover__image-background wp-image-4619" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"28px"}}},"textColor":"heading-color","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('UI/UX', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-buttons-hover-translate-effect","style":{"spacing":{"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-buttons-hover-translate-effect" style="margin-top:28px"><!-- wp:button {"gradient":"gradient-primary-secondary","className":"is-style-button-hover-white-arrow-style","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}},"border":{"radius":"80px"}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-white-arrow-style has-normal-font-size"><a class="wp-block-button__link has-gradient-primary-secondary-gradient-background has-background wp-element-button" style="border-radius:80px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
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
</div>
<!-- /wp:group -->