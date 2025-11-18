<?php

/**
 * Title: PRO: Testimonial Carousel
 * Slug: cozy-essential-addons/saaslauncher-testimonial-carousel
 * Categories: saaslauncher-testimonial
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/rating_star.png',
    $saaslauncher_url . 'assets/images/testimonial_1.jpg',
    $saaslauncher_url . 'assets/images/testimonial_2.jpg',
    $saaslauncher_url . 'assets/images/testimonial_3.jpg',
    $saaslauncher_url . 'assets/images/team_2.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-testimonial"],"patternName":"cozy-essential-addons/saaslauncher-testimonial-carousel","name":"PRO: Testimonial Carousel"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"840px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"primary-shade-2","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-saaslauncher-gradient-border has-border-color has-border-color-border-color has-primary-shade-2-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"none"}},"textColor":"light-color","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="text-transform:none"><?php esc_html_e('Testimonials and Reviews', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="line-height:1.3"><?php esc_html_e('Join Thousands of Satisfied Customers!', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('See why thousands of businesses trust us! Discover how our SaaS solutions have helped clients streamline operations and achieve success.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/testimonial {"blockClientId":"978c5f59-2b99-49c0-ad7d-dec29c821187","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#4A3AFD","color":"#FFFFFE","activeColorHover":"#6F79FF","colorHover":"#6F79FF","align":"center","positionVertical":-50,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#FFFFFE","color":"#4A3AFD","backgroundColorHover":"#4A3AFD","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700}}} -->
    <div class="cozy-block-testimonial display-carousel   swiper-container hover-show" id="cozyBlock_978c5f59_2b99_49c0_ad7d_dec29c821187">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Lysa Potmen', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"id":2316,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2316" style="width:94px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Lysa Potmen', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"id":2316,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2316" style="width:94px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Lysa Potmen', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"id":2316,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2316" style="width:94px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Lysa Potmen', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"id":2316,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-2316" style="width:94px" /></figure>
                    <!-- /wp:image -->
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