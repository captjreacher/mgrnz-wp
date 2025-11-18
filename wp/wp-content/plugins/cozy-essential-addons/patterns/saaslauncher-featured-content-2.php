<?php

/**
 * Title: PRO: Featured Content layout 2
 * Slug: cozy-essential-addons/saaslauncher-featured-content-2
 * Categories: saaslauncher-about
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/rocket_img.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"}},"border":{"width":"1px","color":"#292929","radius":"60px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-border-color" style="border-color:#292929;border-width:1px;border-radius:60px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"0px"}},"typography":{"lineHeight":"1.3","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Featured Content', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.4"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="line-height:1.4"><?php esc_html_e('Optimizing SaaS – Smarter Solutions, Better Results', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"gradient":"gradient-twelve","style":{"border":{"radius":"70px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}}},"fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:70px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px"><?php esc_html_e('Discover More', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"70px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"color":{"background":"#0ec97f3d"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:70px;background-color:#0ec97f3d;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px"><?php esc_html_e('Schedule Demo', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":12814,"sizeSlug":"full","linkDestination":"none","align":"right","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image alignright size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_media[0]) ?>" alt="" class="wp-image-12814" style="border-radius:50%" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->