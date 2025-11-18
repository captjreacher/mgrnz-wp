<?php

/**
 * Title: PRO: Team Carousel
 * Slug: cozy-essential-addons/mp-team-carousel
 * Categories: mighty-plumbers
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/team_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/team_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mp/team_3.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Our Team Carousel"},"style":{"spacing":{"padding":{"top":"90px","bottom":"110px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:110px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"},"margin":{"bottom":"60px"}}},"gradient":"light-shade-color","className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group mighty-plumbers-fade-up has-light-shade-color-gradient-background has-background" style="margin-bottom:60px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700"><?php esc_html_e('Meet Our Team', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/teams {"blockClientId":"cc0af534-5602-44e3-a596-076120ea1fc3","layout":"carousel","carouselOptions":{"pagination":{"enabled":true,"width":12,"height":12,"borderRadius":12,"activeWidth":12,"activeBorderRadius":10,"activeColor":"#EB7100","color":"#062A60","activeColorHover":"#062A60","colorHover":"#EB7100","positionVertical":-46},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"backgroundColor":"#062A60","color":"#FFFFFF","backgroundColorHover":"#EB7100","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":true,"speed":700,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30}}} -->
    <div class="cozy-block-teams display-carousel  swiper-container hover-show" id="cozyBlock_cc0af534_5602_44e3_a596_076120ea1fc3">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mighty-plumbers-team-box is-style-default has-light-color-background-color has-background" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":131,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-131" style="border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"64px","bottom":"16px","left":"24px","right":"20px"}},"color":{"background":"#eb7100cf"}},"className":"team-name","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group team-name has-background" style="background-color:#eb7100cf;padding-top:64px;padding-right:20px;padding-bottom:16px;padding-left:24px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Entrepreneur', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mighty-plumbers-team-box is-style-default has-light-color-background-color has-background" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":161,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-161" style="border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"64px","bottom":"16px","left":"24px","right":"20px"}},"color":{"background":"#eb7100cf"}},"className":"team-name","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group team-name has-background" style="background-color:#eb7100cf;padding-top:64px;padding-right:20px;padding-bottom:16px;padding-left:24px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Entrepreneur', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mighty-plumbers-team-box is-style-default has-light-color-background-color has-background" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":162,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[2]) ?>" alt="" class="wp-image-162" style="border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"64px","bottom":"16px","left":"24px","right":"20px"}},"color":{"background":"#eb7100cf"}},"className":"team-name","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group team-name has-background" style="background-color:#eb7100cf;padding-top:64px;padding-right:20px;padding-bottom:16px;padding-left:24px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Entrepreneur', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mighty-plumbers-team-box is-style-default has-light-color-background-color has-background" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":161,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"}}} -->
                    <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[1]) ?>" alt="" class="wp-image-161" style="border-radius:0px;object-fit:cover" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"64px","bottom":"16px","left":"24px","right":"20px"}},"color":{"background":"#eb7100cf"}},"className":"team-name","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group team-name has-background" style="background-color:#eb7100cf;padding-top:64px;padding-right:20px;padding-bottom:16px;padding-left:24px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Entrepreneur', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
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
    <!-- /wp:cozy-block/teams -->
</div>
<!-- /wp:group -->