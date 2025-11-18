<?php

/**
 * Title: Portfolio Grid Block
 * Slug: cozy-essential-addons/ha-portfolio-grid
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"80px","top":"80px"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
            <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Portfolios', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"},"margin":{"top":"60px","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"22px","left":"0","right":"0"}},"border":{"width":"1px"}},"borderColor":"neutral-color","className":"ha-portfolio-grid","layout":{"type":"constrained"}} -->
            <div class="wp-block-group ha-portfolio-grid has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:0;padding-right:0;padding-bottom:22px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":1190,"dimRatio":0,"minHeight":523,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover" style="min-height:523px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1190" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"23px","bottom":"0px"}}},"fontSize":"big"} -->
                <h3 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:23px;margin-bottom:0px;font-style:normal;font-weight:500"><?php echo esc_html('CRM Integration', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"30px"}}} -->
        <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"25px","left":"0","right":"0"}},"border":{"width":"1px"}},"borderColor":"neutral-color","className":"ha-portfolio-grid","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group ha-portfolio-grid has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:0;padding-right:0;padding-bottom:25px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":1237,"dimRatio":0,"minHeight":210,"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover" style="min-height:210px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1237" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:20px;font-style:normal;font-weight:500"><?php echo esc_html('Sales Analysis', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"25px","left":"0","right":"0"}},"border":{"width":"1px"}},"borderColor":"neutral-color","className":"ha-portfolio-grid","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group ha-portfolio-grid has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:0;padding-right:0;padding-bottom:25px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[2]) ?>","id":689,"dimRatio":0,"minHeight":210,"isDark":false,"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="min-height:210px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-689" alt="" src="<?php echo esc_url($ct_patterns_images[2]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:20px;font-style:normal;font-weight:500"><?php echo esc_html('Sales Analysis', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"25px","left":"0","right":"0"}},"border":{"width":"1px"}},"borderColor":"neutral-color","className":"ha-portfolio-grid","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group ha-portfolio-grid has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:0;padding-right:0;padding-bottom:25px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[3]) ?>","id":487,"dimRatio":0,"minHeight":210,"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover" style="min-height:210px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-487" alt="" src="<?php echo esc_url($ct_patterns_images[3]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:20px;font-style:normal;font-weight:500"><?php echo esc_html('Sales Analysis', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"25px","left":"0","right":"0"}},"border":{"width":"1px"}},"borderColor":"neutral-color","className":"ha-portfolio-grid","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group ha-portfolio-grid has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:0;padding-right:0;padding-bottom:25px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[4]) ?>","id":486,"dimRatio":0,"minHeight":210,"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover" style="min-height:210px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-486" alt="" src="<?php echo esc_url($ct_patterns_images[4]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:20px;font-style:normal;font-weight:500"><?php echo esc_html('Sales Analysis', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->
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