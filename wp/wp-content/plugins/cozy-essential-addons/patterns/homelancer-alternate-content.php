<?php

/**
 * Title: PRO: Alternate Content Section
 * Slug: cozy-essential-addons/homelancer-alternate-content
 * Description: Contact Section
 * Categories: homelancer-about
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/about.jpg',
    $homelancer_url . 'assets/images/p5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"6rem"}}},"layout":{"type":"constrained","contentSize":"1269px"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"}},"fontSize":"giga"} -->
        <h1 class="wp-block-heading has-text-align-center has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Making Your Home Service Needs a Reality', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":580,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-radius:24px;min-height:580px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"jumbo"} -->
            <h2 class="wp-block-heading has-jumbo-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Our Mission', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"84px"},"margin":{"top":"84px"}}}} -->
    <div class="wp-block-columns" style="margin-top:84px"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"jumbo"} -->
            <h2 class="wp-block-heading has-jumbo-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Our Mission', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement', 'cozy-essential-addons') ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement', 'cozy-essential-addons') ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement', 'cozy-essential-addons') ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button"><?php esc_html_e('Explore More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":580,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-radius:24px;min-height:580px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
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

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"44px"},"margin":{"top":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"giga"} -->
                <h1 class="wp-block-heading has-giga-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('25+', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Years in Industry', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"giga"} -->
                <h1 class="wp-block-heading has-giga-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('10+', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Years of Warranty', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"giga"} -->
                <h1 class="wp-block-heading has-giga-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('20,000+', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Happy Customers', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"giga"} -->
                <h1 class="wp-block-heading has-giga-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('100+', 'cozy-essential-addons') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Awards Winning', 'cozy-essential-addons') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->