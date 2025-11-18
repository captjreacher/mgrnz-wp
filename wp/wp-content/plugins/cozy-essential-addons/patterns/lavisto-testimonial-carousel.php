<?php

/**
 * Title: PRO: Testimonial Carousel
 * Slug: cozy-essential-addons/lavisto-testimonial-carousel
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/testimonial_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/testimonial_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/testimonial_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/team_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/rating_star.png',
);
?>
<!-- wp:group {"metadata":{"name":"Testimonials"},"style":{"spacing":{"padding":{"top":"40px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
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
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Beautiful Words From Our Customers!', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/testimonial {"blockClientId":"3ba932f6-6645-4f44-8d11-9445c3c061b4","carouselOptions":{"pagination":{"enabled":true,"width":20,"height":7,"borderRadius":11,"activeWidth":20,"activeBorderRadius":11,"activeColor":"#FF8000","color":"#0039CA","activeColorHover":"#0039CA","colorHover":"#FF8000","positionVertical":-44},"navigation":{"enabled":false,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"3","spaceBetween":30,"speed":700}}} -->
    <div class="cozy-block-testimonial display-carousel   swiper-container hover-show" id="cozyBlock_3ba932f6_6645_4f44_8d11_9445c3c061b4">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E0E6F4"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group blockbooster-hover-box is-style-default has-border-color has-light-color-background-color has-background" style="border-color:#E0E6F4;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
                            <h5 class="wp-block-heading" style="font-style:normal;font-weight:400"><?php esc_html_e('Benzamin Clark', 'cozy-essential-addons') ?></h5>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"borderColor":"border-color","backgroundColor":"light-color","className":"blockbooster-hover-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group blockbooster-hover-box is-style-default has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
                            <h5 class="wp-block-heading" style="font-style:normal;font-weight:400"><?php esc_html_e('Robert Linken', 'cozy-essential-addons') ?></h5>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","width":"1px","color":"#E0E6F4"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group blockbooster-hover-box is-style-default has-border-color has-light-color-background-color has-background" style="border-color:#E0E6F4;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
                            <h5 class="wp-block-heading" style="font-style:normal;font-weight:400"><?php esc_html_e('Liyana Torq', 'cozy-essential-addons') ?></h5>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"borderColor":"border-color","backgroundColor":"light-color","className":"blockbooster-hover-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group blockbooster-hover-box is-style-default has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($ct_patterns_media[4]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[3]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
                            <h5 class="wp-block-heading" style="font-style:normal;font-weight:400"><?php esc_html_e('Robert Linken', 'cozy-essential-addons') ?></h5>
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
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/testimonial -->
</div>
<!-- /wp:group -->