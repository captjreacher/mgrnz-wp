<?php

/**
 * Title: PRO: About Layout 3
 * Slug: cozy-essential-addons/saaslauncher-about-3
 * Categories: saaslauncher-about
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about_2.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"patternName":"cozy-essential-addons/saaslauncher-about-3","name":"PRO: About Layout 3"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"48px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":12245,"dimRatio":0,"customOverlayColor":"#bfbdbc","isUserOverlayColor":false,"minHeight":386,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:386px"><img class="wp-block-cover__image-background wp-image-12245" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bfbdbc"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:heading {"style":{"spacing":{"margin":{"top":"28px"}},"typography":{"lineHeight":"1.3"}}} -->
            <h2 class="wp-block-heading" style="margin-top:28px;line-height:1.3"><?php esc_html_e('Transforming Ideas into Digital Success', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"className":"is-style-button-with-shadow-style-one","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"border":{"radius":"60px"}},"fontSize":"medium"} -->
                <div class="wp-block-button is-style-button-with-shadow-style-one"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px"><?php esc_html_e('Learn More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":11919,"dimRatio":0,"customOverlayColor":"#b9b6b5","isUserOverlayColor":false,"minHeight":820,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:820px"><img class="wp-block-cover__image-background wp-image-11919" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b6b5"></span>
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