<?php

/**
 * Title: PRO: About Layout 8
 * Slug: cozy-essential-addons/saaslauncher-about-8
 * Categories: saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_2.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"patternName":"cozy-essential-addons/saaslauncher-about-8","name":"PRO: About Layout 8"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-xxx-large-font-size"><?php esc_html_e('About Us', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat sed nunc at laoreet. In ultricies aliquam dui cursus volutpat. Morbi vitae tortor eu velit fermentum ultricies in at dolor.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"64px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:64px"><!-- wp:heading {"level":3,"fontSize":"big"} -->
                <h3 class="wp-block-heading has-big-font-size"><?php esc_html_e('Mission', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat sed nunc at laoreet. In ultricies aliquam dui cursus volutpat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"level":3,"fontSize":"big"} -->
                <h3 class="wp-block-heading has-big-font-size"><?php esc_html_e('Vision', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat sed nunc at laoreet. In ultricies aliquam dui cursus volutpat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":11919,"dimRatio":0,"customOverlayColor":"#b9b6b5","isUserOverlayColor":false,"minHeight":580,"isDark":false,"style":{"spacing":{"margin":{"top":"230px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="margin-top:230px;min-height:580px"><img class="wp-block-cover__image-background wp-image-11919" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b6b5"></span>
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