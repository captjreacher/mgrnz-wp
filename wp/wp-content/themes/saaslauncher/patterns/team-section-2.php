<?php

/**
 * Title: Team Section 2
 * Slug: saaslauncher/team-section-2
 * Categories: saaslauncher-team
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/team_1.jpg',
    $saaslauncher_url . 'assets/images/team_2.jpg',
    $saaslauncher_url . 'assets/images/team_3.jpg',
    $saaslauncher_url . 'assets/images/team_23.jpg'
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-team"],"patternName":"saaslauncher/team-section-2","name":"Team Section 2"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Meet Our Team', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"48px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":6089,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"gradient":"gradient-fourteen","contentPosition":"bottom center","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:360px"><img class="wp-block-cover__image-background wp-image-6089" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":758,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"gradient":"gradient-fourteen","contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:360px"><img class="wp-block-cover__image-background wp-image-758 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Emily r', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - EmTech', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":759,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"gradient":"gradient-fourteen","contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:360px"><img class="wp-block-cover__image-background wp-image-759 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert M', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Rober Tech', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[3]) ?>","id":2241,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"gradient":"gradient-fourteen","contentPosition":"bottom center","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:360px"><img class="wp-block-cover__image-background wp-image-2241 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-gradient-fourteen-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Lexy P', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Lexy Industries', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->