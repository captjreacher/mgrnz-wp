<?php

/**
 * Title: RB PRO: Features/Services Block
 * Slug: cozy-essential-addons/rb-services-features
 * Categories: reshape-block-patterns
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/featured_icon_1.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/featured_icon_2.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/featured_icon_3.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/featured_icon_4.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/featured_icon_5.png',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/rb-assets/featured_icon_6.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"textColor":"primary"} -->
        <h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color"><?php echo esc_html('Our Services', 'cozy-essential-addons') ?></h6>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
            <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","textColor":"heading-color"} -->
                <h2 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color"><?php echo esc_html('Exploring Our Range of Services and Key Features', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.9}},"textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.9"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"30px","right":"30px","top":"14px","bottom":"14px"}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:14px;padding-right:30px;padding-bottom:14px;padding-left:30px"><?php echo esc_html('More Services', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"40px"},"blockGap":{"top":"var:preset|spacing|60","left":"42px"}}}} -->
    <div class="wp-block-columns" style="padding-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"7px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:7px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":718,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-718" style="border-radius:50px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Research &amp; Plan', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"7px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:7px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":718,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-718" style="border-radius:50px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Business Strategy', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"7px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:7px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":718,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-718" style="border-radius:50px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Mobile App', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"15px"},"blockGap":{"top":"var:preset|spacing|60","left":"42px"}}}} -->
    <div class="wp-block-columns" style="padding-top:15px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"7px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:7px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":718,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-718" style="border-radius:50px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('UI/UX', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"7px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:7px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":718,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[4]) ?>" alt="" class="wp-image-718" style="border-radius:50px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Digital Marketing', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"7px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow-hover","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow-hover has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:7px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"id":718,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[5]) ?>" alt="" class="wp-image-718" style="border-radius:50px;object-fit:cover;width:50px;height:50px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('Branding', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
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