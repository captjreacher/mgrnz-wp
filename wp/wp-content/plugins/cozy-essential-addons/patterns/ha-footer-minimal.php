<?php

/**
 * Title: Footer Layout Minimal
 * Slug: cozy-essential-addons/ha-footer-minimal
 * Categories: ha-patterns-pro
 */
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"120px"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group has-background-background-color has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"64px"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:600"><?php echo esc_html('Let\'s Connect Today', 'cozy-essential-addons') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}}} -->
        <p class="has-text-align-center" style="line-height:1.7"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
        <div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"textAlign":"center","backgroundColor":"heading-color","textColor":"background","style":{"spacing":{"padding":{"left":"35px","right":"35px","top":"20px","bottom":"20px"}}},"className":"is-style-button-hover-primary-bgcolor","fontSize":"medium"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-background-color has-heading-color-background-color has-text-color has-background has-text-align-center wp-element-button" style="padding-top:20px;padding-right:35px;padding-bottom:20px;padding-left:35px"><?php echo esc_html('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50"},"margin":{"top":"0"}},"border":{"top":{"color":"var:preset|color|neutral-color","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--neutral-color);border-top-width:1px;margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foreground"} -->
        <p class="has-foreground-color has-text-color has-link-color"><?php echo esc_html('Proudly powered by WordPress | Theme: Hello Agency by  CozyThemes.', 'cozy-essential-addons') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"twitter"} /-->

            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->