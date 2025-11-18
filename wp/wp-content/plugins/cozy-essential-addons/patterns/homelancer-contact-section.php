<?php

/**
 * Title: PRO: Contact Section with Form
 * Slug: cozy-essential-addons/homelancer-contact-section
 * Description: Contact Section
 * Categories: homelancer-contact
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_location.png',
    $homelancer_url . 'assets/images/icon_call.png',
    $homelancer_url . 'assets/images/icon_email.png',
    $homelancer_url . 'assets/images/icon_clock.png',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"6rem"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1040px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"60px"}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:60px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('Feel Free to Contact Us Anytime — We’re Always Here to Support You', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
        <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"categories":["homelancer-contact"],"patternName":"homelancer/contact-with-form","name":"Contact with Form"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
        <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"100px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":681,"width":"52px","height":"52px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-681" style="object-fit:contain;width:52px;height:52px" /></figure>
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
                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-676" style="object-fit:contain" /></figure>
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
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-680" style="object-fit:contain;width:52px;height:52px" /></figure>
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
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-683" style="object-fit:contain;width:52px;height:52px" /></figure>
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

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"64px"},"padding":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:64px;padding-top:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
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

                <!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
                <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"44px","bottom":"44px","left":"64px","right":"64px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:44px;padding-right:64px;padding-bottom:44px;padding-left:64px"><!-- wp:contact-form-7/contact-form-selector {"id":651,"hash":"ca116b5","title":"Contact form 1"} -->
                        <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="ca116b5" title="Contact form 1"]</div>
                        <!-- /wp:contact-form-7/contact-form-selector -->
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