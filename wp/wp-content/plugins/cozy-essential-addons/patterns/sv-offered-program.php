<?php

/**
 * Title: PRO: Offered Program Section
 * Slug: cozy-essential-addons/sv-offered-program
 * Categories: smartversity
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/p1.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/p2.jpg',
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/smv/p3.jpg',

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"smartversity-header"} -->
            <h1 class="wp-block-heading smartversity-header" style="font-style:normal;font-weight:400"><?php echo esc_html_e('What We Offer', 'cozy-essential-addons') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"normal"} -->
            <p class="has-normal-font-size" style="line-height:1.5"><?php echo esc_html_e('At University’s beautiful campus, you’ll find a diverse and welcoming community that will teach you life skills along with having fun. McClintock\'s eye for detail certainly helped narrow the whereabouts of&nbsp;<em>lorem ipsum\'s</em>&nbsp;origin, however, the “how and when” still remain something of a mystery, with competing theories and timelines.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"color":{"background":"#ffffff00"},"border":{"radius":"0px","width":"1px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;background-color:#ffffff00"><?php echo esc_html_e('Explore all Programs', 'cozy-essential-addons') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"50px"}}}} -->
    <div class="wp-block-columns" style="margin-top:50px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"smartversity-offer-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group smartversity-offer-box"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":1501,"dimRatio":70,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"radius":"5px"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-default" style="border-radius:5px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-1501" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big","fontFamily":"dm-sans"} -->
                        <h4 class="wp-block-heading has-dm-sans-font-family has-big-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Academic', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|extra-color"}}}},"textColor":"extra-color","fontSize":"normal"} -->
                        <p class="has-text-align-left has-extra-color-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_e('We help any small- to mid-sized companies build durable businesses that transcend external fluctuations.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"background":"#ffffff00"},"typography":{"textDecoration":"underline"}},"className":"is-style-button-hover-secondary-color"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-color" style="text-decoration:underline"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"smartversity-offer-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group smartversity-offer-box"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":1516,"dimRatio":70,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:5px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-1516" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big","fontFamily":"dm-sans"} -->
                        <h4 class="wp-block-heading has-dm-sans-font-family has-big-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Research', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|extra-color"}}}},"textColor":"extra-color","fontSize":"normal"} -->
                        <p class="has-text-align-left has-extra-color-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_e('We help any small- to mid-sized companies build durable businesses that transcend external fluctuations.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"background":"#ffffff00"},"typography":{"textDecoration":"underline"}},"className":"is-style-button-hover-secondary-color"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-color" style="text-decoration:underline"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"smartversity-offer-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group smartversity-offer-box"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[2]) ?>","id":1517,"dimRatio":70,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:5px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-1517" alt="" src="<?php echo esc_url($ct_patterns_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big","fontFamily":"dm-sans"} -->
                        <h4 class="wp-block-heading has-dm-sans-font-family has-big-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_e('Art &amp; Culture', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|extra-color"}}}},"textColor":"extra-color","fontSize":"normal"} -->
                        <p class="has-text-align-left has-extra-color-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_e('We help any small- to mid-sized companies build durable businesses that transcend external fluctuations.', 'cozy-essential-addons') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"background":"#ffffff00"},"typography":{"textDecoration":"underline"}},"className":"is-style-button-hover-secondary-color"} -->
                            <div class="wp-block-button is-style-button-hover-secondary-color" style="text-decoration:underline"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html_e('Read More', 'cozy-essential-addons') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->