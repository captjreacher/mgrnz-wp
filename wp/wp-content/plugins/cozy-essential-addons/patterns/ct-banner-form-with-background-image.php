<?php

/**
 * Title: PRO: Banner Block with Form layout 3
 * Slug: cozy-essential-addons/ct-banner-form-with-background-image
 * Categories: ct-patterns,fotawp-banner
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/patterns-media/ct_pattern_img.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"0rem"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-right:0;padding-bottom:0rem;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":1175,"dimRatio":50,"customGradient":"linear-gradient(135deg,rgb(1,1,1) 0%,rgba(0,0,0,0.1) 100%)"} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(135deg,rgb(1,1,1) 0%,rgba(0,0,0,0.1) 100%)"></span><img class="wp-block-cover__image-background wp-image-1175" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"7rem"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"60px"}},"textColor":"background"} -->
                            <h2 class="wp-block-heading has-text-align-left has-background-color has-text-color" style="font-size:60px;font-style:normal;font-weight:500">Experience the new era of website building.</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":1.7},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"tertiary-light","fontSize":"small"} -->
                            <p class="has-text-align-left has-tertiary-light-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);line-height:1.7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"0px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">Schedule an Appointment</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"3rem","bottom":"10px","left":"3rem"}}},"backgroundColor":"background","textColor":"sub-heading-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-sub-heading-color-color has-background-background-color has-text-color has-background" style="padding-top:2rem;padding-right:3rem;padding-bottom:10px;padding-left:3rem"><!-- wp:contact-form-7/contact-form-selector {"id":50,"title":"Contact form 1","className":"ct-newsletter-blockwithform"} -->
                            <div class="wp-block-contact-form-7-contact-form-selector ct-newsletter-blockwithform">[contact-form-7 id="50" title="Contact form 1"]</div>
                            <!-- /wp:contact-form-7/contact-form-selector -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->