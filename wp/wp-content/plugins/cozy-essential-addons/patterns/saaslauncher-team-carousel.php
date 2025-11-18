<?php

/**
 * Title: PRO: Team Carousel
 * Slug: cozy-essential-addons/saaslauncher-team-carousel
 * Categories: saaslauncher-team
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_4.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-team"],"patternName":"cozy-essential-addons/saaslauncher-team-carousel","name":"PRO: Team Carousel"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:0;padding-bottom:7rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-bottom:0px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-giga-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Meet Our Team', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0%","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0%"><!-- wp:cozy-block/teams {"blockClientId":"67572cae-056b-4247-b287-4bf0e356cb87","layout":"carousel","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#4A3AFD","color":"#FFFFFE","activeColorHover":"#4A3AFD","colorHover":"#4A3AFD","align":"center","positionVertical":-50,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"backgroundColor":"#fff","color":"#4A3AFD","backgroundColorHover":"#4A3AFD","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"speed":700,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3.6,"spaceBetween":30}}} -->
        <div class="cozy-block-teams display-carousel  swiper-container hover-show" id="cozyBlock_67572cae_056b_4247_b287_4bf0e356cb87">
            <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":6089,"dimRatio":80,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><img class="wp-block-cover__image-background wp-image-6089" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-fourteen-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                                </ul>
                                <!-- /wp:social-links -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":6091,"dimRatio":80,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><img class="wp-block-cover__image-background wp-image-6091" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-fourteen-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Lia Potmen', 'cozy-essential-addons') ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Liya Industries', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                                </ul>
                                <!-- /wp:social-links -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":6090,"dimRatio":80,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><img class="wp-block-cover__image-background wp-image-6090" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-fourteen-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert Pinket', 'cozy-essential-addons') ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Pinket Industries', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                                </ul>
                                <!-- /wp:social-links -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":6091,"dimRatio":80,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><img class="wp-block-cover__image-background wp-image-6091" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-fourteen-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Darci M', 'cozy-essential-addons') ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Darci Industries', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                                </ul>
                                <!-- /wp:social-links -->
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
        <!-- /wp:cozy-block/teams -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->