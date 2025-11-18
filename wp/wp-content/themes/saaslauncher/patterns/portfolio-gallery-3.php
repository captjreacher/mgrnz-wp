<?php

/**
 * Title: Portfolio Gallery 3
 * Slug: saaslauncher/portfolio-gallery-3
 * Categories: saaslauncher-gallery
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/work_1.png',
    $saaslauncher_url . 'assets/images/work_2.png',
    $saaslauncher_url . 'assets/images/work_3.png',
    $saaslauncher_url . 'assets/images/work_4.png',
    $saaslauncher_url . 'assets/images/work_5.png',
    $saaslauncher_url . 'assets/images/work_6.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-gallery"],"patternName":"saaslauncher/portfolio-gallery-2","name":"Portfolio Gallery"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-xxx-large-font-size"><?php esc_html_e('Portfolio Gallery', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"},"margin":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":1512,"dimRatio":0,"customOverlayColor":"#abad9b","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="border-radius:0px;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:310px"><img class="wp-block-cover__image-background wp-image-1512 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#abad9b"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":1510,"dimRatio":0,"customOverlayColor":"#bcb390","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="border-radius:0px;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:310px"><img class="wp-block-cover__image-background wp-image-1510 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bcb390"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":1485,"dimRatio":0,"customOverlayColor":"#d1d4d5","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="border-radius:0px;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:310px"><img class="wp-block-cover__image-background wp-image-1485 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d1d4d5"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"},"margin":{"top":"20px"}}}} -->
    <div class="wp-block-columns" style="margin-top:20px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[3]) ?>","id":1478,"dimRatio":0,"customOverlayColor":"#b9c1ca","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="border-radius:0px;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:310px"><img class="wp-block-cover__image-background wp-image-1478 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9c1ca"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[4]) ?>","id":1046,"dimRatio":0,"customOverlayColor":"#b8b7b8","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="border-radius:0px;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:310px"><img class="wp-block-cover__image-background wp-image-1046 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b8b7b8"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[5]) ?>","id":47,"dimRatio":0,"customOverlayColor":"#a39d96","isUserOverlayColor":false,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="border-radius:0px;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:310px"><img class="wp-block-cover__image-background wp-image-47 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a39d96"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->