<?php

/**
 * Title: PRO: About Layout 7
 * Slug: cozy-essential-addons/saaslauncher-about-7
 * Categories: saaslauncher-about
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"cozy-essential-addons/saaslauncher-about-7","name":"PRO: About Layout 7"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.4"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="line-height:1.4"><?php esc_html_e('Building', 'cozy-essential-addons') ?> <em><?php esc_html_e('Future-Ready Brands', 'cozy-essential-addons') ?></em> <?php esc_html_e('with Creativity &amp; Technology', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"big"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Digital Marketing', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"20px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:20px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"big"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Branding', 'cozy-essential-addons') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'cozy-essential-addons') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":12245,"dimRatio":0,"customOverlayColor":"#bfbdbc","isUserOverlayColor":false,"minHeight":500,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bfbdbc"></span><img class="wp-block-cover__image-background wp-image-12245" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
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
</div>
<!-- /wp:group -->