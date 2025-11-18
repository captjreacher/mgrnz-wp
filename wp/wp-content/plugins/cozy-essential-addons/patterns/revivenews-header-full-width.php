<?php

/**
 * Title: Header full width layout
 * Slug: cozy-essential-addons/revivenews-header-full-width
 * Categories: revivenews
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:20px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|40","bottom":"20px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"className":"revivenews-header","layout":{"type":"constrained","contentSize":"1440px"}} -->
    <div class="wp-block-group revivenews-header" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cozy-block/date-time {"blockClientId":"b39e60db-0b2c-461c-8646-a4b1d1b879eb"} -->
                <div class="cozy-block-date-time flex" id="cozyBlock_b39e60db_0b2c_461c_8646_a4b1d1b879eb">
                    <div class="cozy-date"></div>
                    <div class="cozy-time"></div>
                </div>
                <!-- /wp:cozy-block/date-time -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":48} /-->

                    <!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"x-large"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_e('Subscribes Newsletter', 'cozy-essential-addons') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|neutral-color","width":"1px"},"top":{"color":"var:preset|color|neutral-color","width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"backgroundColor":"background","textColor":"foreground-alt","className":"revivenews-header","layout":{"type":"constrained","contentSize":"1440px"}} -->
    <div class="wp-block-group revivenews-header has-foreground-alt-color has-background-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--neutral-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--neutral-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"ref":4,"textColor":"heading-color","overlayMenu":"always"} /-->

            <!-- wp:navigation {"ref":1787,"textColor":"heading-color","overlayBackgroundColor":"foreground-alt","overlayTextColor":"heading-color","className":"revivenews-navigation full-width-nav","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"3"},"spacing":{"blockGap":"30px"}},"fontSize":"normal"} /-->

            <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"color":{"background":"#ffffff00"},"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->