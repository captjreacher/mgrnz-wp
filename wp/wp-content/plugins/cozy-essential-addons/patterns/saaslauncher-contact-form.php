<?php

/**
 * Title: PRO: Contact with form
 * Slug: cozy-essential-addons/saaslauncher-contact-form
 * Categories: saaslauncher-contact
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/pro-icons/icon_map.png',
    $saaslauncher_url . 'assets/images/pro-icons/icon_call.png',
    $saaslauncher_url . 'assets/images/pro-icons/icon_message.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"7rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}}},"gradient":"center-bottom-gradient","layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull has-center-bottom-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"dimensions":{"minHeight":"0px"},"border":{"width":"1px","radius":"80px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:80px;min-height:0px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Contact Us', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"xxx-large"} -->
    <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Get in Touch with Our Team', 'cozy-essential-addons') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
    <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Have a question, project idea, or just want to say hello? Our team is here and ready to help. Reach out and let’s start the conversation today — we’d love to hear from you.', 'cozy-essential-addons') ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color"><?php esc_html_e('Contact Details', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns" style="margin-top:40px;margin-bottom:0"><!-- wp:column {"width":"68px"} -->
                <div class="wp-block-column" style="flex-basis:68px"><!-- wp:image {"id":719,"width":"68px","height":"68px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                    <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-719" style="object-fit:cover;width:68px;height:68px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Location:', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Metricity Angel loss USA, HWY 1235', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns" style="margin-top:40px;margin-bottom:0"><!-- wp:column {"width":"68px"} -->
                <div class="wp-block-column" style="flex-basis:68px"><!-- wp:image {"id":712,"width":"68px","height":"68px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                    <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-712" style="object-fit:cover;width:68px;height:68px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Phone:', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('+1 (000) 012-3456', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns" style="margin-top:40px;margin-bottom:0"><!-- wp:column {"width":"68px"} -->
                <div class="wp-block-column" style="flex-basis:68px"><!-- wp:image {"id":712,"width":"68px","height":"68px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                    <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-712" style="object-fit:cover;width:68px;height:68px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Email:', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"big"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('email@yoursite.com', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"44px","right":"44px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"20px"}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:44px;padding-bottom:28px;padding-left:44px"><!-- wp:contact-form-7/contact-form-selector {"id":85,"hash":"a82a9d4","title":"Contact form 1"} -->
                <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="a82a9d4" title="Contact form 1"]</div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->