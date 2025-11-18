<?php

/**
 * Title: PRO: Achievement Stats With Video Background
 * Slug: cozy-essential-addons/lavisto-stats-video
 * Categories: lavisto
 */
$ct_patterns_media = array(
    'https://videos.pexels.com/video-files/2711221/2711221-uhd_2560_1440_24fps.mp4'
);
?>
<!-- wp:group {"metadata":{"name":"Achievement Stats Video Background"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1442,"dimRatio":70,"isUserOverlayColor":true,"backgroundType":"video","minHeight":640,"gradient":"primary-gradient","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover"></video>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/counter {"blockClientId":"e101522e-322e-464d-a856-fc845371d22d","endNumber":"50","styles":{"fontFamily":"\u0022Montagu Slab\u0022","fontSize":64,"color":"#FFFFFF","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_e101522e_322e_464d_a856_fc845371d22d"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:10px"><!-- wp:cozy-block/icon-picker {"blockClientId":"06ce55dc-4b17-40b7-a0c2-e9b3064c6e63","iconSize":24,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#FFFFFF"} -->
                            <div class="cozy-block-icon-picker default" id="cozyBlock_06ce55dc_4b17_40b7_a0c2_e9b3064c6e63"><svg width="24" height="24" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#FFFFFF">
                                    <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                                </svg></div>
                            <!-- /wp:cozy-block/icon-picker -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"left","level":4} -->
                    <h4 class="wp-block-heading has-text-align-left"><?php esc_html_e('Year\'s In Industry', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/counter {"blockClientId":"f92e8032-a988-42a2-b933-72e6a7551261","endNumber":"150","styles":{"fontFamily":"\u0022Montagu Slab\u0022","fontSize":64,"color":"#FFFFFF","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_f92e8032_a988_42a2_b933_72e6a7551261"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:10px"><!-- wp:cozy-block/icon-picker {"blockClientId":"e68f7558-a20d-4295-a959-d2ec4c640a0d","iconSize":24,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#FFFFFF"} -->
                            <div class="cozy-block-icon-picker default" id="cozyBlock_e68f7558_a20d_4295_a959_d2ec4c640a0d"><svg width="24" height="24" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#FFFFFF">
                                    <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                                </svg></div>
                            <!-- /wp:cozy-block/icon-picker -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"left","level":4} -->
                    <h4 class="wp-block-heading has-text-align-left"><?php esc_html_e('Branches Worldwide!', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/counter {"blockClientId":"2b08a895-65f8-48b7-9743-d22990291e1b","endNumber":"100","styles":{"fontFamily":"\u0022Montagu Slab\u0022","fontSize":64,"color":"#FFFFFF","fontWeight":700}} -->
                        <div class="cozy-block-counter" id="cozyBlock_2b08a895_65f8_48b7_9743_d22990291e1b"><span><?php esc_html_e('0', 'cozy-essential-addons') ?></span></div>
                        <!-- /wp:cozy-block/counter -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:10px"><!-- wp:cozy-block/icon-picker {"blockClientId":"ee875636-2c64-4812-aab1-bd2bde16f7ef","iconSize":24,"iconViewBox":{"vx":"0","vy":"0","vw":"22","vh":"22"},"iconPath":"M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z","iconColor":"#FFFFFF"} -->
                            <div class="cozy-block-icon-picker default" id="cozyBlock_ee875636_2c64_4812_aab1_bd2bde16f7ef"><svg width="24" height="24" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#FFFFFF">
                                    <path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z"></path>
                                </svg></div>
                            <!-- /wp:cozy-block/icon-picker -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"left","level":4} -->
                    <h4 class="wp-block-heading has-text-align-left"><?php esc_html_e('Countries', 'cozy-essential-addons') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'cozy-essential-addons') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->