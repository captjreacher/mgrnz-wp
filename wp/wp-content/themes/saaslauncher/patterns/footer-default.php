<?php

/**
 * Title: Footer Default
 * Slug: saaslauncher/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/saaslauncher.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","className":"saaslauncher-footer","style":{"spacing":{"padding":{"top":"0px","right":"0","left":"0","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#ffffff29","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group alignfull saaslauncher-footer has-dark-shade-background-color has-background" style="border-top-color:#ffffff29;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"0px"}}}} -->
            <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column {"width":"45%","style":{"border":{"width":"0px","style":"none"}}} -->
                <div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:45%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":1939,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1939" style="object-fit:cover;width:40px;height:40px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:site-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"600"}}} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color"><?php esc_html_e('Need Help Getting Started? We’re Here to Help.', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"border":{"bottom":{"width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground-alt","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-foreground-alt-color has-text-color has-link-color has-big-font-size" style="border-bottom-width:1px;font-style:normal;font-weight:400"><?php esc_html_e('sample@example.com', 'saaslauncher') ?></h4>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"saaslauncher-footer-list"} -->
                <div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Company', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"medium"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-medium-font-size"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('About Us', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Career', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Blog', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Contact Us', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"saaslauncher-footer-list"} -->
                <div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Quick Links', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"medium"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-medium-font-size"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Privacy Policy', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Terms &amp; Conditions', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Services', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Features', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                        <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Pricing', 'saaslauncher') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"","className":"saaslauncher-footer-list"} -->
                <div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Social Links', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"saaslauncher-footer-list","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"28px","bottom":"0"},"padding":{"left":"0px","top":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group saaslauncher-footer-list" style="margin-top:28px;margin-bottom:0;padding-top:0px;padding-left:0px"><!-- wp:list {"className":"is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"light-color","fontSize":"medium"} -->
                        <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-no-bullet has-light-color-color has-text-color has-link-color has-medium-font-size"><!-- wp:list-item -->
                            <li><a href="#"><?php esc_html_e('Facebook', 'saaslauncher') ?></a></li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                            <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('X (Twitter)', 'saaslauncher') ?></a></li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                            <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('Linkedin', 'saaslauncher') ?></a></li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"}}}} -->
                            <li style="margin-top:10px;margin-bottom:10px"><a href="#"><?php esc_html_e('YouTube', 'saaslauncher') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
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

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"style":"none","width":"0px"}}},"layout":{"type":"constrained","contentSize":"1260px","wideSize":"1260px"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"32px","bottom":"32px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#ffffff1a","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="border-top-color:#ffffff1a;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:0;padding-bottom:32px;padding-left:0"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"lineHeight":"1.5"}},"textColor":"foreground-alt","fontSize":"normal"} -->
            <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | SaasLauncher by CozyThemes.', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","className":"saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"50%"}}} -->
        <div class="wp-block-button saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->