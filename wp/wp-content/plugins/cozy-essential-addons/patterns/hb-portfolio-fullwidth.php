<?php

/**
 * Title: PRO: Portfolio Full Width Layout
 * Slug: cozy-essential-addons/hb-portfolio-fullwidth
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/p1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/p2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/p3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/p4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/p5.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hb/p6.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Portfolio Showcase 2"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"0em","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:0;padding-bottom:0em;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"handyman-blocks-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group handyman-blocks-fade-up"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Featured Portfolios', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"24px"}}}} -->
        <p class="has-text-align-center" style="margin-top:24px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"top":"0px","left":"0px"}}},"className":"handyman-blocks-fade-up"} -->
    <div class="wp-block-columns handyman-blocks-fade-up" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-handyman-blocks-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":7784,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":480,"isDark":false,"className":"handyman-blocks-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light handyman-blocks-portfolio-box" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7784" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-handyman-blocks-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":7785,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":480,"className":"handyman-blocks-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover handyman-blocks-portfolio-box" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7785" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Building', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-handyman-blocks-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[2]) ?>","id":7786,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":480,"className":"handyman-blocks-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover handyman-blocks-portfolio-box" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7786" alt="" src="<?php echo esc_url($ct_patterns_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Land Planning', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
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

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"top":"0px","left":"0px"}}},"className":"handyman-blocks-fade-up"} -->
    <div class="wp-block-columns handyman-blocks-fade-up" style="margin-top:0px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-handyman-blocks-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[3]) ?>","id":7785,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":480,"className":"handyman-blocks-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover handyman-blocks-portfolio-box" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7785" alt="" src="<?php echo esc_url($ct_patterns_images[3]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Building', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-handyman-blocks-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[4]) ?>","id":7784,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":480,"isDark":false,"className":"handyman-blocks-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light handyman-blocks-portfolio-box" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7784" alt="" src="<?php echo esc_url($ct_patterns_images[4]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-handyman-blocks-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-handyman-blocks-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[5]) ?>","id":7786,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":480,"className":"handyman-blocks-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover handyman-blocks-portfolio-box" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7786" alt="" src="<?php echo esc_url($ct_patterns_images[5]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Land Planning', 'cozy-essential-addons') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
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
<!-- /wp:group -->