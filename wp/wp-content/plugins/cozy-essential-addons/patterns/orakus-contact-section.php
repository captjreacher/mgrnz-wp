<?php

/**
 * Title: PRO: Contact Section
 * Slug: cozy-essential-addons/orakus-contact-section
 * Categories: orakus-contact
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/icon_location.png',
    $orakus_url . 'assets/images/icon_call.png',
    $orakus_url . 'assets/images/icon_email.png',
    $orakus_url . 'assets/images/icon_clock.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"48px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:48px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"xxx-large"} -->
            <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;text-transform:none"><?php esc_html_e('Feel Free to Contact Us Anytime — We\'re Always Here to Support You', 'cozy-essential-addons') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"40px","bottom":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:40px;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":681,"width":"52px","height":"52px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[0]) ?>" alt="" class="wp-image-681" style="object-fit:contain;width:52px;height:52px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Address', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                    <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('123 Sample St, Sydney NSW 2000 USA', 'cozy-essential-addons') ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":676,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($orakus_images[1]) ?>" alt="" class="wp-image-676" style="object-fit:contain" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Phone', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                    <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('+1 (000) 012-3456', 'cozy-essential-addons') ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":680,"width":"52px","height":"52px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[2]) ?>" alt="" class="wp-image-680" style="object-fit:contain;width:52px;height:52px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Email', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                    <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('yourmail@example.com', 'cozy-essential-addons') ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":683,"width":"52px","height":"52px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($orakus_images[3]) ?>" alt="" class="wp-image-683" style="object-fit:contain;width:52px;height:52px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                    <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Office Hour', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                    <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('Monday- Friday : 9:00AM - 8:00PM', 'cozy-essential-addons') ?></a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"40px"},"padding":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:40px;padding-top:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Follow us on', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:social-links {"iconBackgroundColor":"heading-color","iconBackgroundColorValue":"#0F0106","style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links has-icon-background-color" style="margin-top:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"width":"0px","style":"none","radius":"20px"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"64px","right":"64px"}}},"backgroundColor":"background-alt"} -->
        <div class="wp-block-column is-vertically-aligned-center has-background-alt-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;padding-top:48px;padding-right:64px;padding-bottom:48px;padding-left:64px"><!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('Drop your message below', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:contact-form-7/contact-form-selector {"id":651,"hash":"ca116b5","title":"Contact form 1"} -->
            <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="ca116b5" title="Contact form 1"]</div>
            <!-- /wp:contact-form-7/contact-form-selector -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->