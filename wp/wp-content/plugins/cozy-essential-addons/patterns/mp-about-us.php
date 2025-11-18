<?php

/**
 * Title: PRO: About Us With Number Counter
 * Slug: cozy-essential-addons/mp-about-us
 * Categories: mighty-plumbers
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mb/about.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"About Us with Counter"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"120px","top":"120px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"mighty-plumbers-slide-up"} -->
        <div class="wp-block-column is-vertically-aligned-center mighty-plumbers-slide-up" style="flex-basis:50%"><!-- wp:image {"id":102,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-102" style="border-radius:0px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"mighty-plumbers-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center mighty-plumbers-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                <!-- /wp:separator -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
                <p class="has-primary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('About Us', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"16px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-primary-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:16px;margin-bottom:0"><?php esc_html_e('Trusted plumbers with a commitment to excellence!', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"16px","bottom":"20px"}}}} -->
            <p style="margin-top:16px;margin-bottom:20px"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/counter {"blockClientId":"4d5464af-eb78-4def-a8b7-0a1739a4a85e","endNumber":"20","styles":{"fontFamily":"default","fontSize":48,"color":"#EB7100","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_4d5464af_eb78_4def_a8b7_0a1739a4a85e"><span>0</span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:cozy-block/icon-picker {"blockClientId":"6fbefe1d-9812-4186-b0e4-1a40572fd6ee","iconSize":28,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#EB7100"} -->
                        <div class="cozy-block-icon-picker default" id="cozyBlock_6fbefe1d_9812_4186_b0e4_1a40572fd6ee"><svg width="28" height="28" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#EB7100">
                                <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                            </svg></div>
                        <!-- /wp:cozy-block/icon-picker -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} -->
                    <h4 class="wp-block-heading has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('In Industry', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/counter {"blockClientId":"add896a6-99f7-41c5-a829-fcd7321cc947","endNumber":"50","styles":{"fontFamily":"default","fontSize":48,"color":"#EB7100","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_add896a6_99f7_41c5_a829_fcd7321cc947"><span>0</span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:cozy-block/icon-picker {"blockClientId":"8c68902b-bf36-4a57-8c30-49045dd58863","iconSize":28,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#EB7100"} -->
                        <div class="cozy-block-icon-picker default" id="cozyBlock_8c68902b_bf36_4a57_8c30_49045dd58863"><svg width="28" height="28" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#EB7100">
                                <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                            </svg></div>
                        <!-- /wp:cozy-block/icon-picker -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} -->
                    <h4 class="wp-block-heading has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Experts Team', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/counter {"blockClientId":"8891268a-82d0-4c7b-b6a8-8e5869db41b5","endNumber":"500","styles":{"fontFamily":"default","fontSize":48,"color":"#EB7100","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_8891268a_82d0_4c7b_b6a8_8e5869db41b5"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:cozy-block/icon-picker {"blockClientId":"3d4fc06b-e7b5-49c3-bebf-d60f4d04d1c7","iconSize":28,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#EB7100"} -->
                        <div class="cozy-block-icon-picker default" id="cozyBlock_3d4fc06b_e7b5_49c3_bebf_d60f4d04d1c7"><svg width="28" height="28" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#EB7100">
                                <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                            </svg></div>
                        <!-- /wp:cozy-block/icon-picker -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} -->
                    <h4 class="wp-block-heading has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Project Completed', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"22px","bottom":"22px"}},"border":{"radius":"0px"},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;padding-top:22px;padding-right:var(--wp--preset--spacing--70);padding-bottom:22px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"medium"} -->
                <p class="has-primary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Call Us :', 'cozy-essential-addons') ?> <a href="#"><?php esc_html_e('+1 (012) 345-6789', 'cozy-essential-addons') ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->