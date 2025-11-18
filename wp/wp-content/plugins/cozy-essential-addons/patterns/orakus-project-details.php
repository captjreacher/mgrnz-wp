<?php

/**
 * Title: PRO: Project / Portfolio Details
 * Slug: cozy-essential-addons/orakus-project-details
 * Categories: orakus-portfolio, orakus-about
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/featured_2.jpg',
    $orakus_url . 'assets/images/featured_3.jpg',
    $orakus_url . 'assets/images/featured_4.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":538,"isUserOverlayColor":true,"minHeight":560,"gradient":"primary-gradient","contentPosition":"bottom center","sizeSlug":"full","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="min-height:560px"><img class="wp-block-cover__image-background wp-image-538 size-full" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"><?php esc_html_e('Lighting Decoration', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":540,"isUserOverlayColor":true,"minHeight":560,"gradient":"primary-gradient","contentPosition":"bottom center","sizeSlug":"full","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="min-height:560px"><img class="wp-block-cover__image-background wp-image-540 size-full" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"><?php esc_html_e('Dinning Table Set', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:cover {"url":"<?php echo esc_url($orakus_images[2]) ?>","id":548,"isUserOverlayColor":true,"minHeight":560,"gradient":"primary-gradient","contentPosition":"bottom center","sizeSlug":"full","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="min-height:560px"><img class="wp-block-cover__image-background wp-image-548 size-full" alt="" src="<?php echo esc_url($orakus_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"><?php esc_html_e('Office Working Table', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"jumbo"} -->
                <h1 class="wp-block-heading has-jumbo-font-size"><?php esc_html_e('The Wooden Aesthetic', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#b0aeae"}}},"color":{"text":"#b0aeae"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#b0aeae"><?php esc_html_e('Location', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5,"fontSize":"medium"} -->
                    <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('2345 Beach,Rd Metrocity USA, HWY 1235', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#b0aeae"}}},"color":{"text":"#b0aeae"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#b0aeae"><?php esc_html_e('Project Date', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5,"fontSize":"medium"} -->
                    <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('12 Jan 2035', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#b0aeae"}}},"color":{"text":"#b0aeae"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#b0aeae"><?php esc_html_e('Client', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5,"fontSize":"medium"} -->
                    <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Ample Technology', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#b0aeae"}}},"color":{"text":"#b0aeae"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#b0aeae"><?php esc_html_e('Type', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5,"fontSize":"medium"} -->
                    <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Commercial', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
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