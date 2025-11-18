<?php

/**
 * Title: PRO: Banner With Video Background
 * Slug: cozy-essential-addons/lavisto-banner-with-videobg
 * Categories: lavisto
 */
$ct_patterns_media = array(
    'https://videos.pexels.com/video-files/2711221/2711221-uhd_2560_1440_24fps.mp4',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"lavisto-header","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group lavisto-header has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1442,"isUserOverlayColor":true,"backgroundType":"video","minHeight":700,"gradient":"primary-gradient","contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"30px","bottom":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-cover has-light-color-color has-text-color has-link-color" style="padding-top:30px;padding-right:var(--wp--preset--spacing--60);padding-bottom:30px;padding-left:var(--wp--preset--spacing--60);min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover"></video>
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:navigation {"ref":778} /--></div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":false} /-->

                        <!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"5px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"x-large"} /-->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"15px"}}} -->
                            <hr class="wp-block-separator has-alpha-channel-opacity" />
                            <!-- /wp:separator -->

                            <!-- wp:heading {"level":5,"fontSize":"small"} -->
                            <h5 class="wp-block-heading has-small-font-size"><?php esc_html_e('Luxury Hotel', 'cozy-essential-addons') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"15px"}}} -->
                            <hr class="wp-block-separator has-alpha-channel-opacity" />
                            <!-- /wp:separator -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                    <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h5 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('+1 (012) 345-6789', 'cozy-essential-addons') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"className":"is-style-button-hover-hard-black-shadow","fontFamily":"montagu-slab"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-hard-black-shadow has-montagu-slab-font-family" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php esc_html_e('Booking Enquiry', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:cover {"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":700,"contentPosition":"center center","isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-100 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"120px"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:24px;font-size:120px;text-transform:uppercase"><?php esc_html_e('Lavisto for Luxury', 'cozy-essential-addons') ?></h1>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->