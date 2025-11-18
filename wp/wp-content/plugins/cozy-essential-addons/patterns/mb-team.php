<?php

/**
 * Title: Mighty Builder Teams (PRO)
 * Slug: cozy-essential-addons/mb-team
 * Categories: mighty-builders
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/team_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/team_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/team_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/testimonial_2.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"gradient":"light-shade-color","className":"mighty-builders-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group mighty-builders-fade-up has-light-shade-color-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"80px","left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
            <h1 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600"><?php esc_html_e('Meet the Team', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"textColor":"light-color","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"50px"}},"fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-light-color-color has-text-color has-link-color wp-element-button" style="border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Visit All Team', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"54px"},"blockGap":{"left":"30px"}}}} -->
            <div class="wp-block-columns" style="margin-top:54px"><!-- wp:column {"style":{"spacing":{"blockGap":"30px"}}} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"mighty-builders-team-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group mighty-builders-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":459,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":{"topLeft":"150px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"className":"mighty-builders-cover-hover","layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left mighty-builders-cover-hover" style="border-top-left-radius:150px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-459" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                    <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                    <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"mighty-builders-team-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group mighty-builders-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":144,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":{"topLeft":"150px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"className":"mighty-builders-cover-hover","layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left mighty-builders-cover-hover" style="border-top-left-radius:150px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-144" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                    <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                    <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Founder', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"30px"}}} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"mighty-builders-team-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group mighty-builders-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":467,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"150px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"className":"mighty-builders-cover-hover","layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left mighty-builders-cover-hover" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:150px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-467" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                    <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Matt Patrick', 'cozy-essential-addons') ?></h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                    <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Project Manager', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"mighty-builders-team-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group mighty-builders-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":466,"dimRatio":0,"isUserOverlayColor":true,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"150px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"className":"mighty-builders-cover-hover","layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left mighty-builders-cover-hover" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:150px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-466" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                    <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Lacy Larrat', 'cozy-essential-addons') ?></h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                    <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Finance Head', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->