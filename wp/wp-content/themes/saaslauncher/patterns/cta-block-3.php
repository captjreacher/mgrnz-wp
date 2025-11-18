<?php

/**
 * Title: Call to Action 3
 * Slug: saaslauncher/cta-block-3
 * Categories: saaslauncher-cta
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/ctabg.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-cta"],"patternName":"saaslauncher/cta-block-3","name":"Call to Action"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"3rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:3rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":"24px","width":"0px","style":"none"}},"gradient":"center-top-large-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group is-style-default has-center-top-large-gradient-gradient-background has-background" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":2015,"dimRatio":0,"isUserOverlayColor":true,"minHeight":480,"isDark":false,"sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"},"color":{"duotone":"unset"},"border":{"radius":"24px","width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
        <div class="wp-block-cover is-light" style="border-style:none;border-width:0px;border-radius:24px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);min-height:480px"><img class="wp-block-cover__image-background wp-image-2015 size-large" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-default","style":{"typography":{"lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"giga"} -->
                <h1 class="wp-block-heading has-text-align-center is-style-default has-light-color-color has-text-color has-link-color has-giga-font-size" style="line-height:1.3"><?php esc_html_e('Try It Free. Scale When You’re Ready.', 'saaslauncher') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Get started without limits. Explore all features at your own pace — upgrade only when your business grows.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:44px"><!-- wp:button {"backgroundColor":"light-color","textColor":"black-color","className":"is-style-button-with-shadow-style-two","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"24px","bottom":"24px"}},"border":{"radius":"60px"},"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}}} -->
                    <div class="wp-block-button is-style-button-with-shadow-style-two"><a class="wp-block-button__link has-black-color-color has-light-color-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:24px;padding-right:40px;padding-bottom:24px;padding-left:40px;font-size:18px"><?php esc_html_e('Try Free Today', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->