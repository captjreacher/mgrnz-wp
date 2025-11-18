<?php

/**
 * Title: Header layout large: multiple buttons
 * Slug: cozy-essential-addons/ha-header-large
 * Categories: ha-patterns-pro
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:0;padding-bottom:20px;padding-left:0"><!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|neutral-color","width":"1px"},"right":{},"left":{}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-color:var(--wp--preset--color--neutral-color);border-bottom-width:1px;padding-top:15px;padding-right:var(--wp--preset--spacing--50);padding-bottom:15px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","className":"is-style-list-style-no-bullet"} -->
                <ul class="is-style-list-style-no-bullet has-heading-color-color has-text-color" style="padding-right:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item {"fontSize":"normal"} -->
                    <li class="has-normal-font-size"><?php echo esc_html('+1 (012) 345-6789', 'cozy-essential-addons') ?></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","className":"is-style-list-style-no-bullet"} -->
                <ul class="is-style-list-style-no-bullet has-heading-color-color has-text-color" style="padding-right:0;padding-left:0;font-style:normal;font-weight:600"><!-- wp:list-item {"fontSize":"normal"} -->
                    <li class="has-normal-font-size"><?php echo esc_html('email@example.com', 'cozy-essential-addoms') ?></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:group -->

            <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                <!-- wp:social-link {"url":"#","service":"behance"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"15px","bottom":"15px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:15px;padding-right:var(--wp--preset--spacing--50);padding-bottom:15px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-top:20px;padding-bottom:20px"><!-- wp:site-logo {"width":70,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"level":3,"fontSize":"large"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{},"bottom":{"style":"none","width":"0px"},"left":{}},"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;padding-top:15px;padding-bottom:15px"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-color","style":{"border":{"width":"1px","color":"#ffffff","radius":"0px"},"color":{"background":"#ffffff00"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor" style="font-size:16px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-color-color has-text-color has-background has-border-color wp-element-button" style="border-color:#ffffff;border-width:1px;border-radius:0px;background-color:#ffffff00"><?php echo esc_html('Request Demo', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"heading-color","textColor":"background","style":{"border":{"width":"1px","color":"#ffffff","radius":"0px"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor" style="font-size:16px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-background-color has-heading-color-background-color has-text-color has-background has-border-color wp-element-button" style="border-color:#ffffff;border-width:1px;border-radius:0px"><?php echo esc_html('Schedule an Appointment', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|neutral-color","width":"1px"},"bottom":{"width":"0px","style":"none"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"},"fontSize":"x-small"} -->
    <div class="wp-block-group has-x-small-font-size" style="border-top-color:var(--wp--preset--color--neutral-color);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"ref":35,"layout":{"type":"flex","justifyContent":"left"},"fontSize":"medium"} /--></div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->