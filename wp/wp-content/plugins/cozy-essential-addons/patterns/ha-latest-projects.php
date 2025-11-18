<?php

/**
 * Title: Latest Project Block
 * Slug: cozy-essential-addons/ha-latest-projects
 * Categories: ha-patterns-pro
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/project_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/project_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-animate" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Latest', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
            <h2 class="wp-block-heading" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Projects', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:60px"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":486,"dimRatio":90,"minHeight":500,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-486" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#ffffff00"}},"className":"hello-agency-text-stroke","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading hello-agency-text-stroke has-text-color has-xx-large-font-size" style="color:#ffffff00;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html('Website', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"primary","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-primary-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html('Development', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":487,"dimRatio":90,"minHeight":500,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-487" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#ffffff00"}},"className":"hello-agency-text-stroke","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading hello-agency-text-stroke has-text-color has-xx-large-font-size" style="color:#ffffff00;font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html('SaaS', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"primary","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-primary-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php echo esc_html('Development', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->