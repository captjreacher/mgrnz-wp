<?php

/**
 * Title: PRO: Testimonials Carousel
 * Slug: cozy-essential-addons/orakus-testimonial-carousel
 * Categories: orakus-testimonial
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/rating_star.png',
    $orakus_url . 'assets/images/testimonial_1.jpg',
    $orakus_url . 'assets/images/team_2.jpg',
    $orakus_url . 'assets/images/testimonial_3.jpg',
    $orakus_url . 'assets/images/team_21.jpg',
    $orakus_url . 'assets/images/team_22.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["orakus-testimonial"],"patternName":"cozy-essential-addons/orakus-testimonial-carousel","name":"Testimonials Grid"},"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"600px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} -->
        <h5 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Testimonials &amp; Reviews', 'cozy-essential-addons') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/testimonial {"blockClientId":"5f9ce80b-4657-4713-a56b-e6e4cfae6aac","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeHeight":10,"activeBorder":{"width":"","style":"","color":""},"activeOffset":0,"gap":4,"activeBorderRadius":10,"activeColor":"#B58E67","color":"#252525","activeColorHover":"#4C6E81","colorHover":"#a5a5a5","activeBorderHover":"","align":"center","positionVertical":-49,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#0F0106","color":"#FFFFFE","backgroundColorHover":"#B58E67","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":24,"speed":700}}} -->
    <div class="cozy-block-testimonial display-carousel   swiper-container hover-show" id="cozyBlock_5f9ce80b_4657_4713_a56b_e6e4cfae6aac">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"orakus-hover-box","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group orakus-hover-box has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Matt Droplet', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"orakus-hover-box","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group orakus-hover-box has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"orakus-hover-box","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group orakus-hover-box has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[3]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Liyana Torq', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Yoga Coach', 'cozy-essential-addons') ?></p>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"orakus-hover-box","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group orakus-hover-box has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[4]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Fitness Coach', 'cozy-essential-addons') ?></p>
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
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"orakus-hover-box","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group orakus-hover-box has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($orakus_images[5]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Liyana Torq', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Yoga Coach', 'cozy-essential-addons') ?></p>
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