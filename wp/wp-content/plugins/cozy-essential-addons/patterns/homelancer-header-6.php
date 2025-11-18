<?php

/**
 * Title: PRO: Header Layout 6
 * Slug: cozy-essential-addons/homelancer-header-6
 * Description: Header layout Layout 6
 * Categories: homelancer-header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_env.png',
    $homelancer_url . 'assets/images/icon_phone.png',
    $homelancer_url . 'assets/images/icon_map.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"28px","bottom":"28px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"48px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48px"><!-- wp:image {"id":1209,"width":"48px","height":"48px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1209" style="object-fit:contain;width:48px;height:48px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><?php esc_html_e('Mail Us', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":5,"fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('email@example.com', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"48px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48px"><!-- wp:image {"id":1208,"width":"48px","height":"48px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1208" style="object-fit:contain;width:48px;height:48px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><?php esc_html_e('Call Us', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":5,"fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('+1 (000) 012-3456', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"48px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48px"><!-- wp:image {"id":1215,"width":"48px","height":"48px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1215" style="object-fit:contain;width:48px;height:48px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><?php esc_html_e('Location', 'cozy-essential-addons') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":5,"fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e('New York, NY 0089,Newyork', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6px","bottom":"6px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:6px;padding-right:var(--wp--preset--spacing--40);padding-bottom:6px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:navigation {"textColor":"heading-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"homelancer-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"400","lineHeight":"2"},"spacing":{"blockGap":"24px"}},"fontSize":"normal","layout":{"type":"flex","justifyContent":"center"}} /-->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
            <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover has-normal-font-size" style="font-style:normal;font-weight:500"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"width":"1px","radius":"4px"},"spacing":{"padding":{"left":"14px","right":"14px","top":"8px","bottom":"8px"}},"typography":{"textTransform":"none"}},"fontSize":"medium"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-primary-background-color has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:4px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;text-transform:none"><?php esc_html_e('Quick Call', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"width":"1px","radius":"4px"},"spacing":{"padding":{"left":"14px","right":"14px","top":"8px","bottom":"8px"}},"typography":{"textTransform":"none"}},"fontSize":"medium"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:4px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;text-transform:none"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->