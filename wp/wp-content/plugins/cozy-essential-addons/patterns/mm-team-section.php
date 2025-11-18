<?php

/**
 * Title: Team Section
 * Slug: musicmantra/mm-team-section
 * Categories: musicmantra-patterns
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mm-assets/singer_1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mm-assets/singer_2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mm-assets/singer_3.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/mm-assets/singer_4.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"96%"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:120px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
        <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Artist behind Rock', 'cozy-essential-addons') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-bottom:40px"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Meet the', 'cozy-essential-addons') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
            <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color"><?php esc_html_e('Members', 'musicmantra') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1327,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 42%,rgb(0,0,0) 100%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|30"}},"className":"musicmantra-team-member","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center musicmantra-team-member" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 42%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-1327" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"musicmantra-team-info","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group musicmantra-team-info"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"28px"}},"textColor":"foregound-alt"} -->
                        <h3 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Matt Peter', 'musicmantra') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
                        <h6 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color"><?php esc_html_e('Lead Guitarist', 'musicmantra') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:social-links {"iconColor":"background","iconColorValue":"#0E0E0E","iconBackgroundColor":"foregound-alt","iconBackgroundColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                            <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":1330,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 46%,rgb(0,0,0) 100%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|30"}},"className":"musicmantra-team-member","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center musicmantra-team-member" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 46%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-1330" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"musicmantra-team-info","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group musicmantra-team-info"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"28px"}},"textColor":"foregound-alt"} -->
                        <h3 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Parker Larret', 'musicmantra') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"textAlign":"center","level":6} -->
                        <h6 class="wp-block-heading has-text-align-center"><?php esc_html_e('Vocalist', 'musicmantra') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:social-links {"iconColor":"background","iconColorValue":"#0E0E0E","iconBackgroundColor":"foregound-alt","iconBackgroundColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                            <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":1329,"dimRatio":50,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|30"}},"className":"musicmantra-team-member","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center musicmantra-team-member" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1329" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"musicmantra-team-info","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group musicmantra-team-info"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"28px"}},"textColor":"foregound-alt"} -->
                        <h3 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Liya Garret', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
                        <h6 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color"><?php esc_html_e('Vocalist', 'musicmantra') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:social-links {"iconColor":"background","iconColorValue":"#0E0E0E","iconBackgroundColor":"foregound-alt","iconBackgroundColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                            <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[3]) ?>","id":1331,"dimRatio":50,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"className":"musicmantra-team-member","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center musicmantra-team-member" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1331" alt="" src="<?php echo esc_url($ct_patterns_media[3]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"musicmantra-team-info","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group musicmantra-team-info"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"28px"}},"textColor":"foregound-alt"} -->
                        <h3 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:500"><?php esc_html_e('Alex Loyan', 'cozy-essential-addons') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
                        <h6 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color"><?php esc_html_e('Lead Singer', 'cozy-essential-addons') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:social-links {"iconColor":"background","iconColorValue":"#0E0E0E","iconBackgroundColor":"foregound-alt","iconBackgroundColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                            <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->