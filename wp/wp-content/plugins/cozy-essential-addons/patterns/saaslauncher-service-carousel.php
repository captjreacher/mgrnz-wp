<?php

/**
 * Title: PRO: Services Carousel
 * Slug: cozy-essential-addons/saaslauncher-service-carousel
 * Categories: saaslauncher-service
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/icon_101.png',
    $saaslauncher_url . 'assets/images/icon_102.png',
    $saaslauncher_url . 'assets/images/icon_103.png',
    $saaslauncher_url . 'assets/images/icon_104.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-service"],"patternName":"cozy-essential-addons/saaslauncher-service-carousel","name":"Service Carousel"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"0","right":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:7rem;padding-right:0;padding-bottom:7rem;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"48px"}},"position":{"type":""}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:48px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0px"}},"position":{"type":""}},"layout":{"type":"constrained","contentSize":"740px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Our Services', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
            <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('See why thousands of businesses trust us! Discover how our SaaS solutions have helped clients streamline operations and achieve success.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0%","right":"0"},"margin":{"top":"64px","bottom":"0px"}},"position":{"type":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:64px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0%"><!-- wp:cozy-block/featured-content-box {"blockClientId":"ee1ff8e1-b595-4a26-a499-f2d03ab589ef","display":"carousel","pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#4A3AFD","color":"#FFFFFE","activeColorHover":"#2C1FE3","colorHover":"#4A3AFD","align":"center","verticalPosition":-50,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"backgroundColor":"#fff","color":"#4A3AFD","backgroundColorHover":"#4A3AFD","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"reverseDirection":false,"delay":2500},"centeredSlides":false,"slidesPerView":2.5,"spaceBetween":24,"speed":700}} -->
        <div class="cozy-block-featured-content-box display-carousel layout-default  cozy-featured-content-box__swiper-container hover-show" id="cozyBlock_ee1ff8e1_b595_4a26_a499_f2d03ab589ef">
            <div class="cozy-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"12px","width":"0px","style":"none"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"48px","right":"48px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"id":2289,"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_url[0]) ?>" alt="" class="wp-image-2289" style="object-fit:contain;width:64px;height:64px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"32px"}}},"textColor":"light-color","fontSize":"x-large"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-x-large-font-size" style="margin-top:32px"><?php esc_html_e('Web Applications', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"12px","width":"0px","style":"none"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"48px","right":"48px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"id":2289,"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_url[1]) ?>" alt="" class="wp-image-2289" style="object-fit:contain;width:64px;height:64px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"32px"}}},"textColor":"light-color","fontSize":"x-large"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-x-large-font-size" style="margin-top:32px"><?php esc_html_e('Smart Alerts &amp; Notifications', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"12px","width":"0px","style":"none"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"48px","right":"48px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"id":2289,"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_url[2]) ?>" alt="" class="wp-image-2289" style="object-fit:contain;width:64px;height:64px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"32px"}}},"textColor":"light-color","fontSize":"x-large"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-x-large-font-size" style="margin-top:32px"><?php esc_html_e('Seamless Integration', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"border":{"radius":"12px","width":"0px","style":"none"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"48px","right":"48px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"id":2289,"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_url[3]) ?>" alt="" class="wp-image-2289" style="object-fit:contain;width:64px;height:64px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"32px"}}},"textColor":"light-color","fontSize":"x-large"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-x-large-font-size" style="margin-top:32px"><?php esc_html_e('Workflow Automation', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->
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