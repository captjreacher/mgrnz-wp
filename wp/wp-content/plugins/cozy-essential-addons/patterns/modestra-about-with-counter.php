<?php

/**
 * Title: PRO: About Us with Counter
 * Slug: cozy-essential-addons/modestra-about-with-counter
 * Categories: modestra
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_ASSETS_URL . 'admin/images/modestra-assets/about_image.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":4620,"dimRatio":0,"customOverlayColor":"#908884","isUserOverlayColor":true,"minHeight":540,"isDark":false,"style":{"color":{"duotone":"var:preset|duotone|white-primary"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#908884"></span><img class="wp-block-cover__image-background wp-image-4620" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-modestra-group-gradient-border","style":{"dimensions":{"minHeight":"0px"},"border":{"width":"1px","radius":"60px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-modestra-group-gradient-border" style="border-width:1px;border-radius:60px;min-height:0px;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px"><!-- wp:paragraph -->
                    <p><?php esc_html_e('About Us', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"x-large"} -->
            <h3 class="wp-block-heading has-x-large-font-size" style="line-height:1.3"><?php esc_html_e('Discover Our Journey of Creative Excellence', 'cozy-essential-addons') ?></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cozy-essential-addons') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"60px"}}}} -->
            <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:cozy-block/counter {"blockClientId":"f066d0d1-0a7e-4288-8025-28931a27aaf8","endNumber":"1000","styles":{"fontFamily":"default","fontSize":64,"color":"#4F43FF","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_f066d0d1_0a7e_4288_8025_28931a27aaf8"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:cozy-block/icon-picker {"blockClientId":"11b110ce-2dd3-4fa4-b759-77bcb73b63bd","iconSize":24,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#4F43FF"} -->
                        <div class="cozy-block-icon-picker default" id="cozyBlock_11b110ce_2dd3_4fa4_b759_77bcb73b63bd"><svg width="24" height="24" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#4F43FF">
                                <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                            </svg></div>
                        <!-- /wp:cozy-block/icon-picker -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:cozy-block/counter {"blockClientId":"1c9adcad-da43-45aa-8b4e-fed50d46df40","endNumber":"50","styles":{"fontFamily":"default","fontSize":64,"color":"#4F43FF","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_1c9adcad_da43_45aa_8b4e_fed50d46df40"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:cozy-block/icon-picker {"blockClientId":"a48f38df-9789-4718-9829-faf5830156a6","iconSize":24,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#4F43FF"} -->
                        <div class="cozy-block-icon-picker default" id="cozyBlock_a48f38df_9789_4718_9829_faf5830156a6"><svg width="24" height="24" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#4F43FF">
                                <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                            </svg></div>
                        <!-- /wp:cozy-block/icon-picker -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
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