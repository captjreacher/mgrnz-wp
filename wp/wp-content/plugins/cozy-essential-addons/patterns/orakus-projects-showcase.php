<?php

/**
 * Title: PRO: Project / Portfolio Showcase
 * Slug: cozy-essential-addons/orakus-projects-showcase
 * Categories: orakus-portfolio
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/featured_1.jpg',
    $orakus_url . 'assets/images/featured_2.jpg',
    $orakus_url . 'assets/images/featured_3.jpg',
    $orakus_url . 'assets/images/featured_4.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"64px","margin":{"bottom":"64px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"840px","wideSize":"780px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"1px","color":"#E7E6E6","radius":"60px"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-border-color" style="border-color:#E7E6E6;border-width:1px;border-radius:60px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":5,"fontSize":"small"} -->
                    <h5 class="wp-block-heading has-small-font-size"><?php esc_html_e('Portfolio Showcase', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"jumbo"} -->
            <h1 class="wp-block-heading has-text-align-left has-jumbo-font-size" style="line-height:1.3"><?php esc_html_e('Interior Inspirations &amp; Design Highlights', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"","wideSize":"","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
            <p class="has-text-align-left has-medium-font-size"><?php esc_html_e('We are passionate interior designers who believe your home should tell your story. With a unique blend of creativity, precision, and warmth, we transform ordinary spaces into timeless, functional sanctuaries.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"18px","bottom":"18px"}}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:18px;padding-right:32px;padding-bottom:18px;padding-left:32px"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":13651,"dimRatio":0,"customOverlayColor":"#d9d1c2","isUserOverlayColor":false,"minHeight":450,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:450px"><img class="wp-block-cover__image-background wp-image-13651" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d9d1c2"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><?php esc_html_e('Interior Design &amp; Styling', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e('View Details', 'cozy-essential-addons') ?></a></div>
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
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":13655,"dimRatio":0,"customOverlayColor":"#cfc9c6","isUserOverlayColor":false,"minHeight":450,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:450px"><img class="wp-block-cover__image-background wp-image-13655" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cfc9c6"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><?php esc_html_e('Bedroom Collections', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e('View Details', 'cozy-essential-addons') ?></a></div>
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

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"48px","left":"48px"},"margin":{"top":"48px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[2]) ?>","id":13658,"dimRatio":0,"customOverlayColor":"#b0a79a","isUserOverlayColor":false,"minHeight":450,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:450px"><img class="wp-block-cover__image-background wp-image-13658" alt="" src="<?php echo esc_url($orakus_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b0a79a"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><?php esc_html_e('Bathroom Collections', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e('View Details', 'cozy-essential-addons') ?></a></div>
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
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[3]) ?>","id":13659,"dimRatio":0,"customOverlayColor":"#c5c4c4","isUserOverlayColor":false,"minHeight":450,"isDark":false,"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:450px"><img class="wp-block-cover__image-background wp-image-13659" alt="" src="<?php echo esc_url($orakus_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c5c4c4"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:24px;margin-bottom:0"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><?php esc_html_e('Living Room Collections', 'cozy-essential-addons') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e('View Details', 'cozy-essential-addons') ?></a></div>
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