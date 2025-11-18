<?php

/**
 * Title: PRO: About Us with 2 Columns
 * Slug: cozy-essential-addons/lavisto-about-us-two
 * Categories: lavisto
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/meeting_hall.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/lavisto/boating.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:100px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"60px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
                <p><?php esc_html_e('Explore Lavisto!', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"style":{"typography":{"fontSize":"40px","lineHeight":"1.3"}}} -->
                <h2 class="wp-block-heading" style="font-size:40px;line-height:1.3"><?php esc_html_e('Crafting Unforgettable Moments: The Legacy of Our Luxurious Retreat', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"20px"},"margin":{"top":"60px","bottom":"0px"}}}} -->
        <div class="wp-block-columns" style="margin-top:60px;margin-bottom:0px"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1018,"dimRatio":0,"customOverlayColor":"#9b95b4","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-top:24px;padding-right:30px;padding-bottom:24px;padding-left:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b95b4"></span><img class="wp-block-cover__image-background wp-image-1018" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"x-large"} -->
                        <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-x-large-font-size"><?php esc_html_e('Luxury Rooms', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":1078,"dimRatio":0,"customOverlayColor":"#757277","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:24px;padding-right:30px;padding-bottom:24px;padding-left:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#757277"></span><img class="wp-block-cover__image-background wp-image-1078" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
                        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Library', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->