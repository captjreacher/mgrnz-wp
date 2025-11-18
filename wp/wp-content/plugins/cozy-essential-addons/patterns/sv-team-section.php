<?php

/**
 * Title: PRO: Our Team
 * Slug: cozy-essential-addons/sv-team-section
 * Categories: smartversity
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/team_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/team_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/team_3.jpg',

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"neutral-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-neutral-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"50px"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:50px"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"smartversity-header"} -->
            <h1 class="wp-block-heading smartversity-header" style="font-style:normal;font-weight:400"><?php echo esc_html_e('Our Teams', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"fontSize":"normal"} -->
            <p class="has-normal-font-size"><?php echo esc_html_e('At University’s beautiful campus, you’ll find a diverse and welcoming community that will teach you life skills along with having fun. McClintock\'s eye for detail certainly helped with competing theories and timelines.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"color":{"background":"#ffffff00"},"border":{"radius":"0px","width":"1px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;background-color:#ffffff00"><?php esc_html_e('Meet all Teams', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":467,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-467" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Matt Copeland', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php echo esc_html_e('Chairman', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":459,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-459" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html_e('John Doe', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php echo esc_html_e('Principal', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":466,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-466" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Liyana Pott', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php echo esc_html_e('Head of Department', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
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