<?php

/**
 * Title: PRO: Testimonials Carousel
 * Slug: cozy-essential-addons/hb-testimonials-carousel
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_1.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_2.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_3.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/reviews_star.png',
);
?>
<!-- wp:group {"metadata":{"name":"Testimonials"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"http://localhost:8888/dowp/wp-content/uploads/2024/06/testimonialbg-2.jpg","id":2051,"dimRatio":90,"overlayColor":"background-alt","isUserOverlayColor":true,"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2051" alt="" src="http://localhost:8888/dowp/wp-content/uploads/2024/06/testimonialbg-2.jpg" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"className":"handyman-blocks-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group handyman-blocks-fade-up" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
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

            <!-- wp:cozy-block/testimonial {"blockClientId":"aa332d93-fa0c-4e2b-becb-4d6fbf2cbf28","carouselOptions":{"pagination":{"enabled":true,"width":7,"height":3,"borderRadius":1,"activeWidth":15,"activeBorderRadius":1,"activeColor":"#FFB84F","color":"#FFFFFF","activeColorHover":"#FF4F4F","colorHover":"#FF4F4F","positionVertical":-45},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#FFFFFF","color":"#FFB84F","backgroundColorHover":"#FFB84F","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":true,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"3","spaceBetween":30,"speed":700}}} -->
            <div class="cozy-block-testimonial display-carousel   swiper-container hover-show" id="cozyBlock_aa332d93_fa0c_4e2b_becb_4d6fbf2cbf28">
                <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                    <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","color":"#f2ede66e","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium has-border-color" style="border-color:#f2ede66e;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                    <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'cozy-essential-addons') ?></h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:cozy-block/carousel -->

                    <!-- wp:cozy-block/carousel -->
                    <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","color":"#f2ede66e","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium has-border-color" style="border-color:#f2ede66e;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                    <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert Linken', 'cozy-essential-addons') ?></h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Counseller', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:cozy-block/carousel -->

                    <!-- wp:cozy-block/carousel -->
                    <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","color":"#f2ede66e","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium has-border-color" style="border-color:#f2ede66e;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                    <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Liyana Torq', 'cozy-essential-addons') ?></h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Yoga Coach', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:cozy-block/carousel -->

                    <!-- wp:cozy-block/carousel -->
                    <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","color":"#f2ede66e","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group blockbooster-hover-box is-style-handyman-blocks-boxshadow-medium has-border-color" style="border-color:#f2ede66e;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                    <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert Linken', 'cozy-essential-addons') ?></h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Counseller', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
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
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->