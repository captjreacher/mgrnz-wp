<?php

/**
 * Title: PRO: Latest Projects Gallery
 * Slug: cozy-essential-addons/orakus-latest-projects
 * Categories: orakus-portfolio
 */
$orakus_url = trailingslashit(get_template_directory_uri());
$orakus_images = array(
    $orakus_url . 'assets/images/portfolio_3.jpg',
    $orakus_url . 'assets/images/portfolio_4.jpg',
    $orakus_url . 'assets/images/portfolio_5.jpg',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["orakus-portfolio"],"patternName":"cozy-essential-addons/orakus-portfolio-gallery","name":"Portfolio Gallery"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"6rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase"}},"textColor":"foreground","fontSize":"small"} -->
        <h5 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Latest Projects', 'cozy-essential-addons') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}},"fontSize":"jumbo"} -->
        <h1 class="wp-block-heading has-text-align-center has-jumbo-font-size" style="font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Showcasing Our Interior Design Masterpieces', 'cozy-essential-addons') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"44px","bottom":"64px"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:44px;margin-bottom:64px"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[0]) ?>","id":13372,"dimRatio":80,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 72%,rgb(0,0,0) 100%)","contentPosition":"bottom center","className":"is-style-orakus-cover-hover-style","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-orakus-cover-hover-style" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:450px"><img class="wp-block-cover__image-background wp-image-13372" alt="" src="<?php echo esc_url($orakus_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 72%,rgb(0,0,0) 100%)"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-large-font-size"><?php esc_html_e('Premium Office Chair', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[1]) ?>","id":13374,"dimRatio":80,"isUserOverlayColor":true,"minHeight":450,"gradient":"primary-gradient","contentPosition":"bottom center","className":"is-style-orakus-cover-hover-style","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-orakus-cover-hover-style" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:450px"><img class="wp-block-cover__image-background wp-image-13374" alt="" src="<?php echo esc_url($orakus_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-large-font-size"><?php esc_html_e('Dining Set', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($orakus_images[2]) ?>","id":13380,"dimRatio":80,"isUserOverlayColor":true,"minHeight":450,"gradient":"primary-gradient","contentPosition":"bottom center","className":"is-style-orakus-cover-hover-style","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-orakus-cover-hover-style" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px;min-height:450px"><img class="wp-block-cover__image-background wp-image-13380" alt="" src="<?php echo esc_url($orakus_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-large-font-size"><?php esc_html_e('Premium Decor', 'cozy-essential-addons') ?></h2>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-with-uparrow-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"typography":{"textTransform":"uppercase"}}} -->
        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;text-transform:uppercase"><?php esc_html_e('View all Portfolios', 'cozy-essential-addons') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->