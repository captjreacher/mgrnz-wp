<?php

/**
 * Title: Service Box Block
 * Slug: cozy-essential-addons/ha-servcies-box
 * Categories: ha-patterns-pro
 */
// $hello_agency_url = trailingslashit(get_template_directory_uri());
// $hello_agency_images = array(
//     $hello_agency_url . 'assets/images/about_img.jpg',
// );
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/hello-agency-assets/p5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"hello-agency-services-group hello-agency-animate","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group hello-agency-services-group hello-agency-animate" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}},"className":"hello-agency-text-stroke"} -->
            <h2 class="wp-block-heading has-text-align-center hello-agency-text-stroke" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Our', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"56px","letterSpacing":"1.5px"}}} -->
            <h2 class="wp-block-heading has-text-align-center" style="font-size:56px;letter-spacing:1.5px;text-transform:uppercase"><?php echo esc_html('Services', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
        <p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"70px"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns" style="margin-top:70px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px"}},"borderColor":"neutral-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:image {"align":"full","id":486,"height":260,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image alignfull size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[0]) ?>" alt="" class="wp-image-486" style="height:260px" height="260" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:32px;font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html('Digital Marketing', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html('WE SHAPE YOUR BRAND IDENTITY AND POSITION IT UNIQUELY FOR GROWTH AND RECOGNITION IN THE MARKET.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"textColor":"heading-color","style":{"color":{"background":"#ffffff00"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size has-normal-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-text-color has-background wp-element-button" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px"}},"borderColor":"neutral-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:image {"align":"full","id":487,"height":260,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image alignfull size-large is-resized"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-487" style="height:260px" height="260" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:32px;font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html('Digital Marketing', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html('WE SHAPE YOUR BRAND IDENTITY AND POSITION IT UNIQUELY FOR GROWTH AND RECOGNITION IN THE MARKET.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"textColor":"heading-color","style":{"color":{"background":"#ffffff00"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size has-normal-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-text-color has-background wp-element-button" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px"}},"borderColor":"neutral-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-neutral-color-border-color" style="border-width:1px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:image {"align":"full","id":689,"height":260,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image alignfull size-large is-resized"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-689" style="height:260px" height="260" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}}} -->
                <h3 class="wp-block-heading" style="margin-top:32px;font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html('Digital Marketing', 'cozy-essential-addons') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html('WE SHAPE YOUR BRAND IDENTITY AND POSITION IT UNIQUELY FOR GROWTH AND RECOGNITION IN THE MARKET.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"textColor":"heading-color","style":{"color":{"background":"#ffffff00"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size has-normal-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-text-color has-background wp-element-button" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->