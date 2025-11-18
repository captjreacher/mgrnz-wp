<?php

/**
 * Title: PRO: Header Layout 4
 * Slug: cozy-essential-addons/homelancer-header-4
 * Description: Header layout Layout 4
 * Categories: homelancer-header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_call_light.png',
    $homelancer_url . 'assets/images/icon_email_light.png',
    $homelancer_url . 'assets/images/icon_mark.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"15px","bottom":"15px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1203,"width":"20px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1203" style="object-fit:contain;width:20px;height:auto" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('+1 (000) 012-3456', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1076,"width":"20px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1076" style="object-fit:contain;width:20px;height:20px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('sample@example.com', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1077,"width":"20px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1077" style="object-fit:contain;width:20px;height:20px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('New York, NY 0089,Newyork', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#113C3D","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#F5F8F6","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover has-normal-font-size" style="font-style:normal;font-weight:500"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"width":"1px","radius":"10px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"typography":{"textTransform":"none"}},"fontSize":"medium"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:10px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;text-transform:none"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"width":"1px","radius":"10px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"typography":{"textTransform":"none"}},"fontSize":"medium"} -->
                    <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:10px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;text-transform:none"><?php esc_html_e('Schedule an Appointment', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"10px","bottom":"10px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:navigation {"textColor":"heading-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"homelancer-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"400","lineHeight":"2"},"spacing":{"blockGap":"24px"}},"fontSize":"normal","layout":{"type":"flex","justifyContent":"center"}} /-->

            <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"transparent","textColor":"primary"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->