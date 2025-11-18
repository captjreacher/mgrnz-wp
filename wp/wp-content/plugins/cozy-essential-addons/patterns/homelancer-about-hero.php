<?php

/**
 * Title: PRO: Hero Section for About
 * Slug: cozy-essential-addons/homelancer-about-hero
 * Description: Hero Section for Homelancer pro
 * Categories: homelancer-hero
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/hero.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"margin":{"bottom":"60px"},"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top" style="margin-bottom:60px"><!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Premium Home Solutions, Reliable Care', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover"} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"secondary"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button"><?php esc_html_e('Schedule an Appointment', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1649,"dimRatio":0,"customOverlayColor":"#737373","isUserOverlayColor":false,"minHeight":580,"sizeSlug":"large","style":{"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="border-radius:24px;min-height:580px"><img class="wp-block-cover__image-background wp-image-1649 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#737373"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->