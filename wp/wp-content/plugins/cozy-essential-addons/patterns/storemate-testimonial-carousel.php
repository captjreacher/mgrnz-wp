<?php

/**
 * Title: PRO: Storemate Testimonial Carousel
 * Slug: cozy-essential-addons/storemate-testimonial-carousel
 * Categories: storemate
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/team_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/team_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/team_3.jpg',

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"className":"storemate-zoom-in-up","layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group storemate-zoom-in-up" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:60px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"44px"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:44px;font-style:normal;font-weight:600"><?php esc_html_e('Testimonials', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/testimonial {"blockClientId":"f82f0404-d5b6-4fed-a867-8bf6892f7502","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007766","color":"#012526","activeColorHover":"#e56404","colorHover":"#e56404","positionVertical":-40},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":40,"iconBoxHeight":40,"borderRadius":50,"backgroundColor":"#007766","color":"#FFFFFF","backgroundColorHover":"#e56404","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"3","spaceBetween":30,"speed":700}}} -->
    <div class="cozy-block-testimonial display-carousel swiper-container hover-show" id="cozyBlock_f82f0404_d5b6_4fed_a867_8bf6892f7502">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"760px"}} -->
                <div class="wp-block-group has-light-shade-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('“The best Football Products”', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'cozy-essential-addons') ?></p>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"760px"}} -->
                <div class="wp-block-group has-light-shade-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('“The best Football Products”', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"760px"}} -->
                <div class="wp-block-group has-light-shade-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('“The best Football Products”', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"760px"}} -->
                <div class="wp-block-group has-light-shade-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('“The best Football Products”', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
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
        </div>
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/testimonial -->
</div>
<!-- /wp:group -->