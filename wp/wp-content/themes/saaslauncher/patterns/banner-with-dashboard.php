<?php

/**
 * Title: Banner With Dashboard
 * Slug: saaslauncher/banner-with-dashboard
 * Categories: saaslauncher-hero
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/launcher-dash.png',
    $saaslauncher_url . 'assets/images/star.png',
    $saaslauncher_url . 'assets/images/star_bg.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"gradient":"center-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-center-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":640,"isDark":false,"sizeSlug":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover is-light" style="margin-top:0px;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":1979,"source":"file","title":"star_icons"},"backgroundSize":"contain","backgroundRepeat":"no-repeat"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-animated-border","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-saaslauncher-animated-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:1px;padding-right:12px;padding-bottom:1px;padding-left:12px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":1859,"width":"20px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"3px","left":"0","right":"0"}}}} -->
                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:3px;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-1859" style="object-fit:contain;width:20px;height:20px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"x-small"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('4.9 Ratings based on 1,000+ reviews', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
                <div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"className":"saaslauncher-big-title is-style-default","style":{"typography":{"fontSize":"74px","lineHeight":"1.3","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h1 class="wp-block-heading has-text-align-center saaslauncher-big-title is-style-default has-light-color-color has-text-color has-link-color" style="font-size:74px;letter-spacing:0px;line-height:1.3"><?php esc_html_e('Build Quickly. Grow Rapidly. No Coding Required', 'saaslauncher') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"lineHeight":"1.5"}},"textColor":"foreground-alt","fontSize":"medium"} -->
                    <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size" style="line-height:1.5"><?php esc_html_e('Get your website up and running quickly with powerful, scalable SaaS solutions designed to boost performance and drive business growth effortlessly.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:44px"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"border":{"radius":"60px","width":"0px","style":"none"},"spacing":{"padding":{"left":"28px","right":"28px","top":"15px","bottom":"15px"}}},"fontSize":"medium"} -->
                    <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-radius:60px;padding-top:15px;padding-right:28px;padding-bottom:15px;padding-left:28px"><?php esc_html_e('Start Free Trial', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"primary-shade-2","className":"is-style-button-with-shadow-style-two","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}},"border":{"radius":"60px"}},"fontSize":"medium"} -->
                    <div class="wp-block-button is-style-button-with-shadow-style-two"><a class="wp-block-button__link has-primary-shade-2-background-color has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Schedule Demo', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="margin-top:64px"><!-- wp:group {"className":"is-style-saaslauncher-overflow-hidden","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","borderColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
                <div class="wp-block-group is-style-saaslauncher-overflow-hidden has-border-color has-primary-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":1897,"sizeSlug":"full","linkDestination":"none","align":"full","className":"is-style-saaslauncher-image-hover-zoom","style":{"border":{"radius":"20px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border is-style-saaslauncher-image-hover-zoom"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1897" style="border-radius:20px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->