<?php

/**
 * Title: PRO:Testimonial Carousel with Column 3
 * Slug: cozy-essential-addons/mp-testimonial-carousel-3
 * Categories: mighty-plumbers
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/testimonial_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/testimonial_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/testimonial_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/rating_star.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/quote_icon.png',
);
?>
<!-- wp:group {"metadata":{"name":"Testimonials Grid Carousel "},"style":{"spacing":{"padding":{"top":"90px","bottom":"110px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:110px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                <!-- /wp:separator -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
                <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('Testimonials', 'cozy-essential-addons') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/testimonial {"blockClientId":"32909f3c-59dc-46d5-8510-28007a2963cd","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#EB7100","color":"#062A60","activeColorHover":"#062A60","colorHover":"#EB7100","positionVertical":-23},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#062A60","color":"#FFFFFF","backgroundColorHover":"#EB7100","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":true,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"3","spaceBetween":30,"speed":700}}} -->
    <div class="cozy-block-testimonial display-carousel   swiper-container hover-show" id="cozyBlock_32909f3c_59dc_46d5_8510_28007a2963cd">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:group {"style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|secondary","width":"2px"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-mighty-plumbers-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group blockbooster-hover-box is-style-mighty-plumbers-boxshadow has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:60px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:16px"><!-- wp:image {"id":2415,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;object-fit:cover;width:120px;height:120px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'cozy-essential-addons') ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:image {"id":4435,"width":"131px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-4435" style="width:131px;height:auto" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
                        <p class="has-text-align-center" style="margin-top:0;margin-bottom:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:image {"id":212,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}},"className":"reviews-quote"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized reviews-quote"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-212" style="object-fit:cover;width:90px;height:90px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:group {"style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|secondary","width":"2px"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-mighty-plumbers-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group blockbooster-hover-box is-style-mighty-plumbers-boxshadow has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:60px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:16px"><!-- wp:image {"id":2415,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;object-fit:cover;width:120px;height:120px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'cozy-essential-addons') ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:image {"id":4435,"width":"131px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-4435" style="width:131px;height:auto" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
                        <p class="has-text-align-center" style="margin-top:0;margin-bottom:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:image {"id":212,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}},"className":"reviews-quote"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized reviews-quote"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-212" style="object-fit:cover;width:90px;height:90px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:group {"style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|secondary","width":"2px"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-mighty-plumbers-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group blockbooster-hover-box is-style-mighty-plumbers-boxshadow has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:60px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:16px"><!-- wp:image {"id":2415,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;object-fit:cover;width:120px;height:120px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'cozy-essential-addons') ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:image {"id":4435,"width":"131px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-4435" style="width:131px;height:auto" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
                        <p class="has-text-align-center" style="margin-top:0;margin-bottom:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:image {"id":212,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}},"className":"reviews-quote"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized reviews-quote"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-212" style="object-fit:cover;width:90px;height:90px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:60px;padding-bottom:60px"><!-- wp:group {"style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|secondary","width":"2px"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-mighty-plumbers-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group blockbooster-hover-box is-style-mighty-plumbers-boxshadow has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:60px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:16px"><!-- wp:image {"id":2415,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;object-fit:cover;width:120px;height:120px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'cozy-essential-addons') ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:image {"id":4435,"width":"131px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-4435" style="width:131px;height:auto" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
                        <p class="has-text-align-center" style="margin-top:0;margin-bottom:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:image {"id":212,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}},"className":"reviews-quote"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized reviews-quote"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-212" style="object-fit:cover;width:90px;height:90px" /></figure>
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
    <!-- /wp:cozy-block/testimonial -->
</div>
<!-- /wp:group -->