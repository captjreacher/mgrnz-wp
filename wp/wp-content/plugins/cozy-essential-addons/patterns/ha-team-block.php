<?php

/**
 * Title: Team Block with Text Center
 * Slug: cozy-essential-addons/ha-team-block
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/team_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/team_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/team_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"80px","top":"80px"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
            <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Team', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"70px"},"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:70px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":590,"dimRatio":80,"minHeight":460,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.74) 100%)","contentPosition":"bottom center","style":{"spacing":{"blockGap":"1rem","padding":{"top":"30px","bottom":"30px"}}},"className":"hello-agency-team-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center hello-agency-team-box" style="padding-top:30px;padding-bottom:30px;min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.74) 100%)"></span><img class="wp-block-cover__image-background wp-image-590" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-big-font-size"><?php echo esc_html('Tom Hank', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","textColor":"foreground"} -->
                <p class="has-text-align-center has-foreground-color has-text-color"><?php echo esc_html('Chief Technical Officer', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":603,"dimRatio":80,"minHeight":460,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.74) 100%)","contentPosition":"bottom center","style":{"spacing":{"blockGap":"1rem","padding":{"top":"30px","bottom":"30px"}}},"className":"hello-agency-team-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center hello-agency-team-box" style="padding-top:30px;padding-bottom:30px;min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.74) 100%)"></span><img class="wp-block-cover__image-background wp-image-603" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-big-font-size"><?php echo esc_html('Melinda K', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","textColor":"foreground"} -->
                <p class="has-text-align-center has-foreground-color has-text-color"><?php echo esc_html('Chief Technical Officer', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[2]) ?>","id":604,"dimRatio":80,"minHeight":460,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.74) 100%)","contentPosition":"bottom center","style":{"spacing":{"blockGap":"1rem","padding":{"top":"30px","bottom":"30px"}}},"className":"hello-agency-team-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center hello-agency-team-box" style="padding-top:30px;padding-bottom:30px;min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0.74) 100%)"></span><img class="wp-block-cover__image-background wp-image-604" alt="" src="<?php echo esc_url($ct_patterns_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-big-font-size"><?php echo esc_html('Theory M', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","textColor":"foreground"} -->
                <p class="has-text-align-center has-foreground-color has-text-color"><?php echo esc_html('Chief Technical Officer', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->