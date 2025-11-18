<?php

/**
 * Title: PRO: Team Layout 3
 * Slug: cozy-essential-addons/orakus-team-layout-3
 * Categories: orakus-team
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/team_1.jpg',
    $orakus_url . 'assets/images/team_2.jpg',
    $orakus_url . 'assets/images/team_3.jpg'
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["orakus-team"],"patternName":"cozy-essential-addons/orakus-team-layout-2","name":"Team Section"},"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:500"><?php esc_html_e('Meet the people who bring our furniture dreams to life.', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px","width":"1px"}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":582,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":380,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-582 size-full" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                    <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px","width":"1px"}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":589,"dimRatio":0,"customOverlayColor":"#a99190","isUserOverlayColor":false,"minHeight":380,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-589 size-full" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a99190"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                    <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px","width":"1px"}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[2]) ?>","id":590,"dimRatio":0,"customOverlayColor":"#b2aeb0","isUserOverlayColor":false,"minHeight":380,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:380px"><img class="wp-block-cover__image-background wp-image-590 size-full" alt="" src="<?php echo esc_url($orakus_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b2aeb0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px","bottom":"24px"}}}} -->
                    <p class="has-text-align-center" style="margin-top:12px;margin-bottom:24px"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#0F0106","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->