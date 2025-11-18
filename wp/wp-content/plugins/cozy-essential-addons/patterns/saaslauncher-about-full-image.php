<?php

/**
 * Title: PRO: About Section with Full Image
 * Slug: cozy-essential-addons/saaslauncher-about-full-image
 * Categories: saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about.jpg',
    $saaslauncher_url . 'assets/images/rating_star.png',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-about"],"patternName":"cozy-essential-addons/saaslauncher-about-full-image","name":"PRO: About Section with Full Image"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":12245,"dimRatio":0,"customOverlayColor":"#bfbdbc","isUserOverlayColor":false,"minHeight":580,"isDark":false,"style":{"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="border-radius:24px;min-height:580px"><img class="wp-block-cover__image-background wp-image-12245" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bfbdbc"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"60px","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column"><!-- wp:image {"id":2316,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2316" style="object-fit:contain;width:100px;height:20px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"normal"} -->
            <h4 class="wp-block-heading has-normal-font-size" style="text-transform:uppercase"><?php esc_html_e('We\'re a creative and talented team of designers', 'cozy-essential-addons') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400"}}} -->
            <h3 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:400"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'cozy-essential-addons') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px","bottom":"0px"},"blockGap":{"left":"44px"}}}} -->
            <div class="wp-block-columns" style="margin-top:40px;margin-bottom:0px"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"style":"none","width":"0px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/counter {"blockClientId":"59c13ee6-abec-43a7-96b2-ec8bfcb8b006","endNumber":"100","styles":{"fontFamily":"Public Sans","fontSize":"64px","color":"#FFFFFD","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_59c13ee6_abec_43a7_96b2_ec8bfcb8b006"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"giga"} -->
                        <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-giga-font-size"><?php esc_html_e('+', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-big-font-size"><?php esc_html_e('Pre-built Sections', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}}} -->
                    <p style="margin-top:10px"><?php esc_html_e('From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"style":"none","width":"0px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/counter {"blockClientId":"5166b946-61d9-46c3-8c45-276d6114b341","endNumber":"20","styles":{"fontFamily":"Public Sans","fontSize":"64px","color":"#FFFFFD","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_5166b946_61d9_46c3_8c45_276d6114b341"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"giga"} -->
                        <h2 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-giga-font-size"><?php esc_html_e('+', 'cozy-essential-addons') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-big-font-size"><?php esc_html_e('Years in Industry', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}}} -->
                    <p style="margin-top:10px"><?php esc_html_e('From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->