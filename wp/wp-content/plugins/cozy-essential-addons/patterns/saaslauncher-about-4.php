<?php

/**
 * Title: PRO: About Layout 4
 * Slug: cozy-essential-addons/saaslauncher-about-4
 * Categories: saaslauncher-about
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/saaslauncher/about_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"}},"border":{"width":"1px","color":"#292929","radius":"60px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-border-color" style="border-color:#292929;border-width:1px;border-radius:60px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"0px"}},"typography":{"lineHeight":"1.3","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('About Us', 'cozy-essential-addons') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
            <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'cozy-essential-addons') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":12245,"dimRatio":0,"customOverlayColor":"#bfbdbc","isUserOverlayColor":false,"minHeight":370,"isDark":false,"style":{"spacing":{"margin":{"top":"100px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="margin-top:100px;min-height:370px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bfbdbc"></span><img class="wp-block-cover__image-background wp-image-12245" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":11919,"dimRatio":0,"customOverlayColor":"#b9b6b5","isUserOverlayColor":false,"minHeight":704,"isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:704px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b6b5"></span><img class="wp-block-cover__image-background wp-image-11919" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
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