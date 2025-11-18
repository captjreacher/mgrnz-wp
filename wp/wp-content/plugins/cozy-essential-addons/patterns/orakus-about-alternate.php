<?php

/**
 * Title: PRO: About Alternate Image Section
 * Slug: cozy-essential-addons/orakus-about-alternate
 * Categories: orakus-about
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/about_2.jpg',
    $orakus_url . 'assets/images/wcu_image.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"foreground","fontSize":"small"} -->
            <h5 class="wp-block-heading has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-transform:uppercase"><?php esc_html_e('Our Story', 'cozy-essential-addons') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"top":"10px","bottom":"0"}}},"fontSize":"jumbo"} -->
            <h1 class="wp-block-heading has-jumbo-font-size" style="margin-top:10px;margin-bottom:0;line-height:1.3"><?php esc_html_e('Transforming Homes, One Design at a Time', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
            <p style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"typography":{"textTransform":"uppercase"}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;text-transform:uppercase"><?php esc_html_e('Schedule An Appointment', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"24px","padding":{"right":"0px","left":"0px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-right:0px;padding-left:0px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":13306,"dimRatio":0,"customOverlayColor":"#c2b6af","isUserOverlayColor":false,"minHeight":600,"isDark":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="margin-top:0px;margin-bottom:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-13306" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c2b6af"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"44px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:44px;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"24px","padding":{"right":"0px","left":"0px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-right:0px;padding-left:0px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":13306,"dimRatio":0,"customOverlayColor":"#c2b6af","isUserOverlayColor":false,"minHeight":600,"isDark":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="margin-top:0px;margin-bottom:0;min-height:600px"><img class="wp-block-cover__image-background wp-image-13306" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c2b6af"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"foreground","fontSize":"small"} -->
            <h5 class="wp-block-heading has-foreground-color has-text-color has-link-color has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-transform:uppercase"><?php esc_html_e('Our Philosophy', 'cozy-essential-addons') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3"},"spacing":{"margin":{"top":"10px","bottom":"0"}}},"fontSize":"jumbo"} -->
            <h1 class="wp-block-heading has-jumbo-font-size" style="margin-top:10px;margin-bottom:0;line-height:1.3"><?php esc_html_e('Transforming Homes, One Design at a Time', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
            <p style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"typography":{"textTransform":"uppercase"}}} -->
                <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;text-transform:uppercase"><?php esc_html_e('Schedule An Appointment', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->