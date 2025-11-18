<?php

/**
 * Title: PRO: Hero Section with Counter
 * Slug: cozy-essential-addons/homelancer-service-hero
 * Description: Hero Section with Counter for Homelancer pro
 * Categories: homelancer-hero
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/hero.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:64px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Reliable Solutions for Every Corner of Your Home', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"secondary"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button"><?php esc_html_e('Book Service Now', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1651,"dimRatio":0,"customOverlayColor":"#8d837e","isUserOverlayColor":false,"minHeight":580,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="border-radius:24px;min-height:580px"><img class="wp-block-cover__image-background wp-image-1651 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#8d837e"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/counter {"blockClientId":"99a79e6f-7d65-4fc2-bce4-73d6814ffb6b","endNumber":"100","textAlign":"left","styles":{"fontFamily":"","fontSize":"48px","color":"#FFFFFE","fontWeight":700}} -->
                <div class="cozy-block-counter" id="cozyBlock_99a79e6f_7d65_4fc2_bce4_73d6814ffb6b"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color">+</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Certified Experts Team', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/counter {"blockClientId":"e0988046-7081-47e9-b62b-be7d2d151cea","endNumber":"30","textAlign":"left","styles":{"fontFamily":"","fontSize":"48px","color":"#FFFFFE","fontWeight":700}} -->
                <div class="cozy-block-counter" id="cozyBlock_e0988046_7081_47e9_b62b_be7d2d151cea"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color">+</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Years in Industry', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/counter {"blockClientId":"91a8ef73-94d1-4820-8e7c-04fd14b7fd7c","endNumber":"5000","textAlign":"left","styles":{"fontFamily":"","fontSize":"48px","color":"#FFFFFE","fontWeight":700}} -->
                <div class="cozy-block-counter" id="cozyBlock_91a8ef73_94d1_4820_8e7c_04fd14b7fd7c"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color">+</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Happy Customers', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cozy-block/counter {"blockClientId":"b3bce43c-93b9-46f0-8870-c052b52ff8a9","textAlign":"left","styles":{"fontFamily":"","fontSize":"48px","color":"#FFFFFE","fontWeight":700}} -->
                <div class="cozy-block-counter" id="cozyBlock_b3bce43c_93b9_46f0_8870_c052b52ff8a9"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color">+</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Projects Completed', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->