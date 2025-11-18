<?php

/**
 * Title: PRO: Team Grid
 * Slug: cozy-essential-addons/orakus-team-grid
 * Categories: orakus-team
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/team_1.jpg',
    $orakus_url . 'assets/images/team_2.jpg',
    $orakus_url . 'assets/images/team_3.jpg',
    $orakus_url . 'assets/images/team_21.jpg',
    $orakus_url . 'assets/images/team_22.jpg',
    $orakus_url . 'assets/images/team_23.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["orakus-team"],"patternName":"orakus/orakus-team-grid","name":"Team Section"},"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"4rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:48px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"textTransform":"uppercase"}},"textColor":"foreground-alt","fontSize":"small"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Meet Our Team', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0;font-style:normal;font-weight:500"><?php esc_html_e('Meet the Creative Minds Behind Our Designs', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"},"margin":{"top":"32px"}}}} -->
    <div class="wp-block-columns" style="margin-top:32px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"1px","color":"#E7E6E6"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":6089,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":430,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-6089 size-full" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
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
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"1px","color":"#E7E6E6"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":6089,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":430,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-6089 size-full" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
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
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"1px","color":"#E7E6E6"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[2]) ?>","id":6089,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":430,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-6089 size-full" alt="" src="<?php echo esc_url($orakus_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
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

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"},"margin":{"top":"32px"}}}} -->
    <div class="wp-block-columns" style="margin-top:32px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"1px","color":"#E7E6E6"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[3]) ?>","id":6089,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":430,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-6089 size-full" alt="" src="<?php echo esc_url($orakus_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
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
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"1px","color":"#E7E6E6"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[4]) ?>","id":6089,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":430,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-6089 size-full" alt="" src="<?php echo esc_url($orakus_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
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
        <div class="wp-block-column"><!-- wp:group {"className":"orakus-hover-box","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"1px","color":"#E7E6E6"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group orakus-hover-box has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[5]) ?>","id":6089,"dimRatio":0,"customOverlayColor":"#ada4a0","isUserOverlayColor":false,"minHeight":430,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-6089 size-full" alt="" src="<?php echo esc_url($orakus_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ada4a0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
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