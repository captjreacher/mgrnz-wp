<?php

/**
 * Title: RB PRO: Portfolio Block
 * Slug: cozy-essential-addons/rb-portfolio-block
 * Categories: reshape-block-patterns
 */
$reshape_block_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p4.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p5.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p6.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":6,"textColor":"primary"} -->
        <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color"><?php echo esc_html('Portfolios', 'cozy-essential-addons') ?></h6>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"24px"}}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="margin-top:24px;line-height:1.5"><?php echo esc_html('Explore the Proven Excellence of Our Work in Our Expansive Portfolio', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-portfolio-box"><!-- wp:image {"id":547,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[0]) ?>" alt="" class="wp-image-547" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"className":"portfolio-overlay-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group portfolio-overlay-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html('Data Sync Module', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
                    <p style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"15px","right":"15px","top":"7px","bottom":"7px"}},"border":{"width":"1px","color":"#FEFEFE","radius":"3px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:3px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><?php echo esc_html('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-portfolio-box"><!-- wp:image {"id":546,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[1]) ?>" alt="" class="wp-image-546" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"className":"portfolio-overlay-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group portfolio-overlay-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html('Data Sync Module', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
                    <p style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"15px","right":"15px","top":"7px","bottom":"7px"}},"border":{"width":"1px","color":"#FEFEFE","radius":"3px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:3px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><?php echo esc_html('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-portfolio-box"><!-- wp:image {"id":185,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[2]) ?>" alt="" class="wp-image-185" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"className":"portfolio-overlay-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group portfolio-overlay-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html('Data Sync Module', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
                    <p style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"15px","right":"15px","top":"7px","bottom":"7px"}},"border":{"width":"1px","color":"#FEFEFE","radius":"3px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:3px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><?php echo esc_html('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-portfolio-box"><!-- wp:image {"id":547,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[3]) ?>" alt="" class="wp-image-547" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"className":"portfolio-overlay-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group portfolio-overlay-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html('Data Sync Module', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
                    <p style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"15px","right":"15px","top":"7px","bottom":"7px"}},"border":{"width":"1px","color":"#FEFEFE","radius":"3px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:3px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><?php echo esc_html('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-portfolio-box"><!-- wp:image {"id":546,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[4]) ?>" alt="" class="wp-image-546" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"className":"portfolio-overlay-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group portfolio-overlay-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html('Data Sync Module', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
                    <p style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"15px","right":"15px","top":"7px","bottom":"7px"}},"border":{"width":"1px","color":"#FEFEFE","radius":"3px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:3px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><?php echo esc_html('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"reshape-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group reshape-portfolio-box"><!-- wp:image {"id":185,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($reshape_block_images[5]) ?>" alt="" class="wp-image-185" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"className":"portfolio-overlay-content","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
                <div class="wp-block-group portfolio-overlay-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html('Data Sync Module', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
                    <p style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button {"backgroundColor":"transparent","style":{"spacing":{"padding":{"left":"15px","right":"15px","top":"7px","bottom":"7px"}},"border":{"width":"1px","color":"#FEFEFE","radius":"3px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:3px;padding-top:7px;padding-right:15px;padding-bottom:7px;padding-left:15px"><?php echo esc_html('Read More', 'cozy-essential-addons') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
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