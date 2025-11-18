<?php

/**
 * Title: PRO: Team Grid
 * Slug: cozy-essential-addons/saaslauncher-team-grid
 * Categories: saaslauncher-team
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_5.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/team_6.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-team"],"patternName":"cozy-essential-addons/saaslauncher-team-grid","name":"PRO: Team Grid"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}}},"gradient":"center-top-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-center-top-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0rem","bottom":"0rem"},"margin":{"bottom":"84px"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
    <div class="wp-block-group" style="margin-bottom:84px;padding-top:0rem;padding-right:0;padding-bottom:0rem;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Our Teams', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":749,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-749 size-full" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":758,"dimRatio":0,"customOverlayColor":"#a99190","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-758 size-full" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a99190"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":759,"dimRatio":0,"customOverlayColor":"#b2aeb0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-759 size-full" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b2aeb0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":758,"dimRatio":0,"customOverlayColor":"#a99190","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-758 size-full" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a99190"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[4]) ?>","id":759,"dimRatio":0,"customOverlayColor":"#b2aeb0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-759 size-full" alt="" src="<?php echo esc_url($ct_patterns_media[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b2aeb0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[5]) ?>","id":749,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":410,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"12px"},"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:12px;margin-bottom:28px;min-height:410px"><img class="wp-block-cover__image-background wp-image-749 size-full" alt="" src="<?php echo esc_url($ct_patterns_media[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} -->
                <p class="has-text-align-left has-meta-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"20px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color" style="margin-top:20px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"black-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"24px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

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