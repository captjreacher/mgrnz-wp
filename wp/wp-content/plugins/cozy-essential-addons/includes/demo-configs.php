<?php
function cozythemes_demo_importer_get_templates_lists($theme_slug)
{
    switch ($theme_slug):
        case "fotawp":
            $demo_templates_lists = array(
                'fotawp' => array(
                    'title' => esc_html__('FotaWP', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/default/',
                    'plugins' => ''
                ),
                'fotawp-free-2' => array(
                    'title' => esc_html__('Grid News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/grid-news/',
                    'plugins' => ''
                ),
                'fotawp-free-3' => array(
                    'title' => esc_html__('Fota Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-22/',
                    'plugins' => ''
                ),
                'fotawp-free-4' => array(
                    'title' => esc_html__('Minimal Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-23/',
                    'plugins' => ''
                ),
                'fotawp-free-5' => array(
                    'title' => esc_html__('Travel Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-24/',
                    'plugins' => ''
                ),
                'fotawp-pro-1' => array(
                    'title' => esc_html__('FotaWP Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotademo-pro/',
                    'plugins' => ''
                ),
                'fotawp-pro-2' => array(
                    'title' => esc_html__('StartUp Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('startup agency', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/startup-agency/',
                    'plugins' => ''
                ),

                'fotawp-pro-3' => array(
                    'title' => esc_html__('Tech/Gadget Blog', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-1/',
                    'plugins' => ''
                ),
                'fotawp-pro-4' => array(
                    'title' => esc_html__('Lawyer/Law Firm', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-2/',
                    'plugins' => ''
                ),
                'fotawp-pro-5' => array(
                    'title' => esc_html__('GYM/Fitness Club', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-3/',
                    'plugins' => ''
                ),
                'fotawp-pro-6' => array(
                    'title' => esc_html__('News/Magazine', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-4/',
                    'plugins' => ''
                ),
                'fotawp-pro-7' => array(
                    'title' => esc_html__('Fashion Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-5/',
                    'plugins' => ''
                ),
                'fotawp-pro-8' => array(
                    'title' => esc_html__('Photographer/Freelancer', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-6/',
                    'plugins' => ''
                ),
                'fotawp-pro-9' => array(
                    'title' => esc_html__('Furniture/Decor Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-7/',
                    'plugins' => ''
                ),
                'fotawp-pro-10' => array(
                    'title' => esc_html__('App Landing Page', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-8/',
                    'plugins' => ''
                ),
                'fotawp-pro-11' => array(
                    'title' => esc_html__('Corporate Business', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-9/',
                    'plugins' => ''
                ),
                'fotawp-pro-12' => array(
                    'title' => esc_html__('Portfolio/Freelancer', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-10/',
                    'plugins' => ''
                ),
                'fotawp-pro-13' => array(
                    'title' => esc_html__('News/Magazine 2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-11/',
                    'plugins' => ''
                ),
                'fotawp-pro-14' => array(
                    'title' => esc_html__('Gym Club/Fitness Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-12/',
                    'plugins' => ''
                ),
                'fotawp-pro-15' => array(
                    'title' => esc_html__('Electronics Store/Shop', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-13/',
                    'plugins' => ''
                ),
                'fotawp-pro-16' => array(
                    'title' => esc_html__('Kids Care/Pre-School', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-14/',
                    'plugins' => ''
                ),
                'fotawp-pro-17' => array(
                    'title' => esc_html__('Construction Company', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-15/',
                    'plugins' => ''
                ),
                'fotawp-pro-18' => array(
                    'title' => esc_html__('Insurance Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-16/',
                    'plugins' => ''
                ),
                'fotawp-pro-19' => array(
                    'title' => esc_html__('Hospital/Medical/Health', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-17/',
                    'plugins' => ''
                ),
                'fotawp-pro-20' => array(
                    'title' => esc_html__('News/Magazine 3', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-18/',
                    'plugins' => ''
                ),
                'fotawp-pro-21' => array(
                    'title' => esc_html__('HVAC Services', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-19/',
                    'plugins' => ''
                ),
                'fotawp-pro-22' => array(
                    'title' => esc_html__('Multipurpose Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-20/',
                    'plugins' => ''
                ),
                'fotawp-pro-23' => array(
                    'title' => esc_html__('Yatrilife Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'blog'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/23/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/23/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/23/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/23/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-21/',
                    'plugins' => ''
                ),
                'fotawp-pro-24' => array(
                    'title' => esc_html__('Eduversity Block Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'education'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/24/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/24/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/24/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/24/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-25/',
                    'plugins' => ''
                ),
                'fotawp-pro-25' => array(
                    'title' => esc_html__('Circle Photography Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/25/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/25/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/25/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/25/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-26/',
                    'plugins' => ''
                ),
                'fotawp-pro-26' => array(
                    'title' => esc_html__('Showfolio Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'portfolio', 'freelancer'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/26/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/26/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/26/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/26/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotafse-demo-27/',
                    'plugins' => ''
                ),
            );
            break;
        case "fotablog":
            $demo_templates_lists = array(
                'fotablog' => array(
                    'title' => esc_html__('Fotablog', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fotablog', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fotablog/',
                    'plugins' => ''
                ),
            );
            break;
        case "weblogger":
            $demo_templates_lists = array(
                'weblogger' => array(
                    'title' => esc_html__('WeBlogger', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('WeBlogger', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/weblogger/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-agency":
            $demo_templates_lists = array(
                'fotablog' => array(
                    'title' => esc_html__('Fota Agency', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fota Agency', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-agency/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-home-solutions":
            $demo_templates_lists = array(
                'fota-home-solutions' => array(
                    'title' => esc_html__('Fota Home Solutions', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fota home solutions', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-home-solutions/',
                    'plugins' => ''
                ),
                'home-solutions-pro' => array(
                    'title' => esc_html__('Home Solution Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('home servcies pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/home-solutions-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-speakers":
            $demo_templates_lists = array(
                'fota-speakers' => array(
                    'title' => esc_html__('Fota Speakers', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fota Speakers', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-speakers/',
                    'plugins' => ''
                ),
                'fota-speakers-pro' => array(
                    'title' => esc_html__('Speakers Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fota speakers pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/speakers-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "atozshop":
            $demo_templates_lists = array(
                'atozshop' => array(
                    'title' => esc_html__('AtozShop', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('atozshop', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/atozshop/',
                    'plugins' => ''
                ),
                'atozshop-pro' => array(
                    'title' => esc_html__('AtozShop Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('atozshop pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/atozshop-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "reshape-block":
            $demo_templates_lists = array(
                'reshape-block' => array(
                    'title' => esc_html__('Reshape Block', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('reshape-block', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/reshape-block/',
                    'plugins' => ''
                ),
                'reshape-pro' => array(
                    'title' => esc_html__('Reshape Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('reshape pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/reshape-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-magazine":
            $demo_templates_lists = array(
                'fota-magazine' => array(
                    'title' => esc_html__('Fota Magazine', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('fota-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-magazine/',
                    'plugins' => ''
                ),
                'fota-magazine-pro' => array(
                    'title' => esc_html__('Fota Magazine Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fota magazine pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-magazine-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "targetify":
            $demo_templates_lists = array(
                'targetify' => array(
                    'title' => esc_html__('Targetify', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('targetify', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/targetify/',
                    'plugins' => ''
                ),
                'targetify-pro' => array(
                    'title' => esc_html__('Targetify Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('targetify pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/targetify/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/targetify-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "musicmantra":
            $demo_templates_lists = array(
                'musicmantra' => array(
                    'title' => esc_html__('MusicMantra', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('musicmantra', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/musicmantra/',
                    'plugins' => ''
                ),
                'musicmantra-pro' => array(
                    'title' => esc_html__('MusicMantra Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('music mantra pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/musicmantra-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "hello-agency":
            $demo_templates_lists = array(
                'hello-agency' => array(
                    'title' => esc_html__('Hello Agency', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Hello Agency', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-agency/',
                    'plugins' => ''
                ),
                'hello-blogger' => array(
                    'title' => esc_html__('Hello Blogger', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Hello Blogger', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-blogger/',
                    'plugins' => ''
                ),
                'hello-agency-pro' => array(
                    'title' => esc_html__('Agency Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('hello agency pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-agency-pro/',
                    'plugins' => ''
                ),
                'hello-agency-pro-2' => array(
                    'title' => esc_html__('Light Agency Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('hello agency light version', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-agency-pro-2/',
                    'plugins' => ''
                ),

            );
            break;
        case "smartversity":
            $demo_templates_lists = array(
                'smartversity' => array(
                    'title' => esc_html__('Smartversity', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('smartversity', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/smartversity/',
                    'plugins' => ''
                ),
                'smartversity-pro' => array(
                    'title' => esc_html__('Smartversity Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('smartversity pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/smartversity-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "revivenews":
            $demo_templates_lists = array(
                'revivenews' => array(
                    'title' => esc_html__('Revivenews', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('revivenews', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews/',
                    'plugins' => ''
                ),
                'revivenews-pro' => array(
                    'title' => esc_html__('Revivenews Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('revivenews pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews-pro/',
                    'plugins' => ''
                ),
                'revivenews-pro-2' => array(
                    'title' => esc_html__('Revivenews Pro 2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('revivenews pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews-pro-2/',
                    'plugins' => ''
                ),
                'revivenews-pro-3' => array(
                    'title' => esc_html__('Revivenews Pro 3', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('revivenews pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews-pro-3/',
                    'plugins' => ''
                )
            );
            break;
        case "storemate":
            $demo_templates_lists = array(
                'storemate' => array(
                    'title' => esc_html__('Storemate', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('storemate', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate/',
                    'plugins' => ''
                ),
                'storemate-pro' => array(
                    'title' => esc_html__('Storemate Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('storemate pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-pro/',
                    'plugins' => ''
                ),
                'storemate-decor' => array(
                    'title' => esc_html__('Arts & Decor PRO', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('arts decor pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-decor/',
                    'plugins' => ''
                ),
                'storemate-electronics' => array(
                    'title' => esc_html__('Electronics & Gadgets PRO', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Electronics & Gadgets pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-electronics/',
                    'plugins' => ''
                ),
                'storemate-beauty' => array(
                    'title' => esc_html__('Cosmetics and Beauty PRO', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Beauty and Cosmetics pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-beauty/',
                    'plugins' => ''
                ),
            );
            break;
        case "blockbooster":
            $demo_templates_lists = array(
                'blockbooster' => array(
                    'title' => esc_html__('Blockbooster', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('blockbooster', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/screenshot.jpg',
                    'demo_url' => 'https://themedemos.cozythemes.com/blockbooster/',
                    'plugins' => ''
                ),
                'blockbooster-v2' => array(
                    'title' => esc_html__('Blockbooster V2', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('blockbooster', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/blockbooster-v2/',
                    'plugins' => ''
                ),
                'blockbooster-pro' => array(
                    'title' => esc_html__('Blockbooster Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('blockbooster pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/screenshot.jpg',
                    'demo_url' => 'https://themedemos.cozythemes.com/blockbooster-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "homedroid":
            $demo_templates_lists = array(
                'homedroid' => array(
                    'title' => esc_html__('Homedroid', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('homedroid', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/homedroid/',
                    'plugins' => ''
                ),
                'homedroid-pro' => array(
                    'title' => esc_html__('Homedroid Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('homedroid pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homedroid/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/homedroid-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "publishtify":
            $demo_templates_lists = array(
                'publishtify' => array(
                    'title' => esc_html__('Publishtify', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('publishtify', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/publishtify/',
                    'plugins' => ''
                ),
                'publishtify-pro' => array(
                    'title' => esc_html__('Publishtify Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('publishtify pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/publishtify/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/publishtify-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "mighty-builders":
            $demo_templates_lists = array(
                'mighty-builders' => array(
                    'title' => esc_html__('Mighty Builders', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('mighty-builders', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/mighty-builders/',
                    'plugins' => ''
                ),
                'mighty-builders-pro' => array(
                    'title' => esc_html__('Mighty Builders Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('mighty-builders pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-builders/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/mighty-builders-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "mighty-plumbers":
            $demo_templates_lists = array(
                'mighty-plumbers' => array(
                    'title' => esc_html__('Mighty Plumbers', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('mighty-plumbers', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/mighty-plumbers/',
                    'plugins' => ''
                ),
                'mighty-plumbers-pro' => array(
                    'title' => esc_html__('Mighty Plumbers Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('mighty-plumbers pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/mighty-plumbers-pro/',
                    'plugins' => ''
                ),
                'mighty-plumbers-pro2' => array(
                    'title' => esc_html__('Mighty Plumbers Pro 2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('mighty-plumbers pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/mighty-plumbers/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/mighty-plumbers-pro2/',
                    'plugins' => ''
                ),
            );
            break;
        case "magnewspress":
            $demo_templates_lists = array(
                'magnewspress' => array(
                    'title' => esc_html__('MagnewsPress', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('magnewspress', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/magnewspress/',
                    'plugins' => ''
                ),
                'magnewspress-2' => array(
                    'title' => esc_html__('Demo 2', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('magnewspress', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/magnewspress-2/',
                    'plugins' => ''
                ),
                'magnewspress-3' => array(
                    'title' => esc_html__('Demo 3 ', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('magnewspress', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/magnewspress-3/',
                    'plugins' => ''
                ),
                'magnewspress-4' => array(
                    'title' => esc_html__('Demo 4', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('magnewspress', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/magnewspress-4/',
                    'plugins' => ''
                ),
                'magnewspress-5' => array(
                    'title' => esc_html__('Demo 5', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('magnewspress', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/free/5/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/magnewspress-5/',
                    'plugins' => ''
                ),
                'magnewspress-pro' => array(
                    'title' => esc_html__('MagnewsPress Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('magnewspress pro', 'news and magazine'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/magnewspress/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/magnewspress-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "lavisto":
            $demo_templates_lists = array(
                'lavisto' => array(
                    'title' => esc_html__('Lavisto', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('lavisto', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/lavisto/',
                    'plugins' => ''
                ),
                'lavisto-pro' => array(
                    'title' => esc_html__('Lavisto Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('lavisto pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/lavisto-pro/',
                    'plugins' => ''
                ),
                'lavisto-pro-2' => array(
                    'title' => esc_html__('Lavisto Pro 2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('lavisto pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/lavisto-pro-2/',
                    'plugins' => ''
                ),
                'lavisto-pro-3' => array(
                    'title' => esc_html__('Lavisto Pro 3', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('lavisto pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/lavisto/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/lavisto-pro-3/',
                    'plugins' => ''
                ),
            );
            break;
        case "handyman-blocks":
            $demo_templates_lists = array(
                'handyman-blocks' => array(
                    'title' => esc_html__('Handyman Blocks', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('handyman blocks', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/handyman-blocks/',
                    'plugins' => ''
                ),
                'handyman-blocks-pro' => array(
                    'title' => esc_html__('Handyman Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('handyman blocks pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/handyman-blocks-pro/',
                    'plugins' => ''
                ),
                'handyman-blocks-pro-2' => array(
                    'title' => esc_html__('Handyman Pro 2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('handyman blocks pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/handyman-blocks-pro-2/',
                    'plugins' => ''
                ),
                'handyman-blocks-pro-3' => array(
                    'title' => esc_html__('Handyman Pro 3', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('handyman blocks pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/handyman-blocks/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/handyman-blocks-pro-3/',
                    'plugins' => ''
                ),
            );
            break;
        case "yatrilife":
            $demo_templates_lists = array(
                'yatrilife' => array(
                    'title' => esc_html__('Yatrilife', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('yatrilife, blog', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/yatrilife/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/yatrilife/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/yatrilife/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/yatrilife/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/yatrilife/',
                    'plugins' => ''
                )
            );
            break;
        case "fota-corporate":
            $demo_templates_lists = array(
                'fota-corporate' => array(
                    'title' => esc_html__('Fota Corporate', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('fota-corporate, blog', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-corporate/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-corporate/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-corporate/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-corporate/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/fota-corporate/',
                    'plugins' => ''
                )
            );
            break;
        case "photolancer":
            $demo_templates_lists = array(
                'photolancer' => array(
                    'title' => esc_html__('Photolancer', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('photolancer', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/photolancer/',
                    'plugins' => ''
                ),
                'photolancer-pro' => array(
                    'title' => esc_html__('Photolancer Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('photolancer pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/photolancer/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/photolancer-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "saaslauncher":
            $demo_templates_lists = array(
                'saaslauncher' => array(
                    'title' => esc_html__('SaasLauncher', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher/',
                    'plugins' => ''
                ),
                'saaslauncher-2' => array(
                    'title' => esc_html__('Bakery', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-2/',
                    'plugins' => ''
                ),
                'saaslauncher-3' => array(
                    'title' => esc_html__('Personal Blog', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-3/',
                    'plugins' => ''
                ),
                'saaslauncher-4' => array(
                    'title' => esc_html__('Book Author', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-4/',
                    'plugins' => ''
                ),
                'saaslauncher-5' => array(
                    'title' => esc_html__('Freelance Photographer', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/5/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-5/',
                    'plugins' => ''
                ),
                'saaslauncher-6' => array(
                    'title' => esc_html__('Digital Agency', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/6/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-6/',
                    'plugins' => ''
                ),
                'saaslauncher-7' => array(
                    'title' => esc_html__('Pet Care', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/7/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/7/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/7/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/7/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-7/',
                    'plugins' => ''
                ),
                'saaslauncher-8' => array(
                    'title' => esc_html__('Web Hosting Company', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/8/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/8/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/8/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/8/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-8/',
                    'plugins' => ''
                ),
                'saaslauncher-9' => array(
                    'title' => esc_html__('Coffee Shop', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/9/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/9/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/9/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/9/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-9/',
                    'plugins' => ''
                ),
                'saaslauncher-10' => array(
                    'title' => esc_html__('Life Menterio', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/10/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/10/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/10/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/10/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-10/',
                    'plugins' => ''
                ),
                'saaslauncher-11' => array(
                    'title' => esc_html__('SaasLauncher Light', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('saaslauncher', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/11/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/11/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/11/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/free/11/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-11/',
                    'plugins' => ''
                ),
                'saaslauncher-pro' => array(
                    'title' => esc_html__('SaasLauncher Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-2' => array(
                    'title' => esc_html__('SaasLauncher Pro 2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-2/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-3' => array(
                    'title' => esc_html__('SaasLauncher Pro 3', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-3/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-4' => array(
                    'title' => esc_html__('AI', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-4/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-5' => array(
                    'title' => esc_html__('Cyber Security', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/5/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-5/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-6' => array(
                    'title' => esc_html__('Newsbase', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/6/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-6/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-7' => array(
                    'title' => esc_html__('Storebase', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/7/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/7/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/7/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/7/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-7/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-8' => array(
                    'title' => esc_html__('Entrepreneur/Influencer', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/8/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/8/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/8/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/8/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-8/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-9' => array(
                    'title' => esc_html__('Corporate Business', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/9/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/9/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/9/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/9/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-9/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-10' => array(
                    'title' => esc_html__('Travel Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/10/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/10/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/10/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/10/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-10/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-11' => array(
                    'title' => esc_html__('Consulting/Business', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/11/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/11/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/11/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/11/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-11/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-12' => array(
                    'title' => esc_html__('Portfolio/Freelancer', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/12/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/12/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/12/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/12/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-12/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-13' => array(
                    'title' => esc_html__('Photo Studio', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/13/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/13/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/13/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/13/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-13/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-14' => array(
                    'title' => esc_html__('Digital Marketing Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/14/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/14/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/14/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/14/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-14/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-15' => array(
                    'title' => esc_html__('Chatbot', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/15/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/15/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/15/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/15/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-15/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-16' => array(
                    'title' => esc_html__('Resume/Portfolio', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/16/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/16/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/16/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/16/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-16/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-17' => array(
                    'title' => esc_html__('Medical/Healthcare', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/17/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/17/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/17/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/17/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-17/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-18' => array(
                    'title' => esc_html__('Finance Service/Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/18/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/18/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/18/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/18/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-18/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-19' => array(
                    'title' => esc_html__('Charity/NON Profit', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/19/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/19/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/19/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/19/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-19/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-20' => array(
                    'title' => esc_html__('Hotels/Resort', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/20/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/20/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/20/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/20/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-20/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-21' => array(
                    'title' => esc_html__('Real Estate Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/21/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/21/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/21/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/21/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-21/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-22' => array(
                    'title' => esc_html__('Construction Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/22/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/22/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/22/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/22/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-22/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-23' => array(
                    'title' => esc_html__('Gym/Fitness Club', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/23/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/23/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/23/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/23/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-23/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-24' => array(
                    'title' => esc_html__('Education Consultancy', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/24/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/24/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/24/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/24/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-24/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-25' => array(
                    'title' => esc_html__('Cafe & Restaurant', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/25/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/25/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/25/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/25/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-25/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-26' => array(
                    'title' => esc_html__('Lawyer / Law Firm', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/26/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/26/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/26/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/26/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-26/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-27' => array(
                    'title' => esc_html__('Handyman', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/27/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/27/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/27/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/27/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-27/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-28' => array(
                    'title' => esc_html__('Digital Creative Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/28/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/28/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/28/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/28/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-28/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-29' => array(
                    'title' => esc_html__('Cleaning Services', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/29/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/29/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/29/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/29/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-29/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-30' => array(
                    'title' => esc_html__('Home Decor', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/30/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/30/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/30/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/30/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-30/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-31' => array(
                    'title' => esc_html__('Software Company', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/31/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/31/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/31/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/31/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-31/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-32' => array(
                    'title' => esc_html__('Digital Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/32/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/32/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/32/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/32/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-32/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-33' => array(
                    'title' => esc_html__('Minimal Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/33/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/33/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/33/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/33/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-33/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-34' => array(
                    'title' => esc_html__('SaaS Startup Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/34/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/34/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/34/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/34/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-34/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-35' => array(
                    'title' => esc_html__('Marketing Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/35/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/35/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/35/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/35/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-35/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-36' => array(
                    'title' => esc_html__('SaaS App/Products', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/36/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/36/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/36/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/36/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-36/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-37' => array(
                    'title' => esc_html__('Decor & Furniture Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/37/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/37/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/37/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/37/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-37/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-38' => array(
                    'title' => esc_html__('Fashion Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/38/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/38/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/38/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/38/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-38/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-39' => array(
                    'title' => esc_html__('Jewellery Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/39/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/39/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/39/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/39/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-39/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-40' => array(
                    'title' => esc_html__('Cosmetics & Skin Care', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/40/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/40/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/40/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/40/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-40/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-41' => array(
                    'title' => esc_html__('Grocery Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/41/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/41/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/41/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/41/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-41/',
                    'plugins' => ''
                ),
                'saaslauncher-pro-42' => array(
                    'title' => esc_html__('Electronics & Gadget Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('saaslauncher pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/42/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/42/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/42/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/saaslauncher/pro/42/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/saaslauncher-pro-42/',
                    'plugins' => ''
                ),

            );

            break;
        case "modestra":
            $demo_templates_lists = array(
                'modestra' => array(
                    'title' => esc_html__('DEMO 01', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('modestra', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/modestra/',
                    'plugins' => ''
                ),
                'modestra-2' => array(
                    'title' => esc_html__('DEMO 02', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('modestra', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/modestra-2/',
                    'plugins' => ''
                ),
                'modestra-pro' => array(
                    'title' => esc_html__('DEMO PRO 01', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('modestra pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/modestra-pro/',
                    'plugins' => ''
                ),
                'modestra-pro-2' => array(
                    'title' => esc_html__('DEMO PRO 02', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('modestra pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/modestra-pro-2/',
                    'plugins' => ''
                ),
                'modestra-pro-3' => array(
                    'title' => esc_html__('DEMO PRO 03', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('modestra pro'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/modestra/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/modestra-pro-3/',
                    'plugins' => ''
                ),
            );
            break;
        case "jetnews-magazine":
            $demo_templates_lists = array(
                'jetnews-magazine' => array(
                    'title' => esc_html__('Default', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine/',
                    'plugins' => ''
                ),
                'jetnews-magazine-2' => array(
                    'title' => esc_html__('Health Mag', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-2/',
                    'plugins' => ''
                ),
                'jetnews-magazine-3' => array(
                    'title' => esc_html__('Travel Mag', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-3/',
                    'plugins' => ''
                ),
                'jetnews-magazine-4' => array(
                    'title' => esc_html__('Beauty Blog', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-4/',
                    'plugins' => ''
                ),
                'jetnews-magazine-5' => array(
                    'title' => esc_html__('Technology Mag', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/5/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-5/',
                    'plugins' => ''
                ),
                'jetnews-magazine-6' => array(
                    'title' => esc_html__('News Magazine', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/6/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-6/',
                    'plugins' => ''
                ),
                'jetnews-magazine-7' => array(
                    'title' => esc_html__('Minimal Blog', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/7/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/7/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/7/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/free/7/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-7/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro' => array(
                    'title' => esc_html__('Default Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-2' => array(
                    'title' => esc_html__('Global News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-2/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-3' => array(
                    'title' => esc_html__('Global Mag', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-3/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-4' => array(
                    'title' => esc_html__('Tech News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-4/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-5' => array(
                    'title' => esc_html__('NewsMagzin', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/5/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-5/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-6' => array(
                    'title' => esc_html__('RightNews', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/6/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-6/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-7' => array(
                    'title' => esc_html__('Classic News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/7/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/7/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/7/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/7/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-7/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-8' => array(
                    'title' => esc_html__('Classic Magazine', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/8/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/8/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/8/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/8/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-8/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-9' => array(
                    'title' => esc_html__('MagazineVX', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/9/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/9/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/9/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/9/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-9/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-10' => array(
                    'title' => esc_html__('MagazineVZ', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/10/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/10/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/10/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/10/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-10/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-11' => array(
                    'title' => esc_html__('History News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/11/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/11/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/11/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/11/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-11/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-12' => array(
                    'title' => esc_html__('Gadget Blog', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/12/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/12/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/12/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/12/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-12/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-13' => array(
                    'title' => esc_html__('Sport News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/13/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/13/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/13/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/13/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-13/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-14' => array(
                    'title' => esc_html__('Automotive', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/14/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/14/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/14/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/14/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-14/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-15' => array(
                    'title' => esc_html__('Quick News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/15/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/15/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/15/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/15/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-15/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-16' => array(
                    'title' => esc_html__('Aqua News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/16/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/16/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/16/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/16/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-16/',
                    'plugins' => ''
                ),
                'jetnews-magazine-pro-17' => array(
                    'title' => esc_html__('World News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('jetnews-magazine pro', 'photography'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/17/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/17/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/17/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/jetnews-magazine/pro/17/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/jetnews-magazine-pro-17/',
                    'plugins' => ''
                ),
            );
            break;
        case "shopmighty":
            $demo_templates_lists = array(
                'shopmighty' => array(
                    'title' => esc_html__('Shopmighty', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('shopmighty', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/shopmighty/',
                    'plugins' => ''
                ),
                'shopmighty-pro' => array(
                    'title' => esc_html__('Shopmighty Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('shopmighty pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/shopmighty/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/shopmighty-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "woxstore":
            $demo_templates_lists = array(
                'woxstore' => array(
                    'title' => esc_html__('WoxStore', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('woxstore', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore/',
                    'plugins' => ''
                ),
                'woxstore-2' => array(
                    'title' => esc_html__('WoxStore V2', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('woxstore', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-2/',
                    'plugins' => ''
                ),
                'woxstore-pro' => array(
                    'title' => esc_html__('WoxStore Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('woxstore pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro/',
                    'plugins' => ''
                ),
                'woxstore-pro-2' => array(
                    'title' => esc_html__('Fashion & Clothing V2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fashion and clothing', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-2/',
                    'plugins' => ''
                ),
                'woxstore-pro-3' => array(
                    'title' => esc_html__('Cosmetic and Makeup Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('cosmetics and Makeup', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-3/',
                    'plugins' => ''
                ),
                'woxstore-pro-4' => array(
                    'title' => esc_html__('Footwear & Shoes Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Footwear and Shoes', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-4/',
                    'plugins' => ''
                ),
                'woxstore-pro-5' => array(
                    'title' => esc_html__('Fashion & Accessories', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Fashoion and Accessories', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/5/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-5/',
                    'plugins' => ''
                ),
                'woxstore-pro-6' => array(
                    'title' => esc_html__('Watch Store / Watches', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Watch Store', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/6/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-6/',
                    'plugins' => ''
                ),
                'woxstore-pro-7' => array(
                    'title' => esc_html__('Glasses / Eye Wear', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Glasses and Eye Wear', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/7/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/7/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/7/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/7/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-7/',
                    'plugins' => ''
                ),
                'woxstore-pro-8' => array(
                    'title' => esc_html__('Riding Gears', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('riding gears', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/8/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/8/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/8/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/8/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-8/',
                    'plugins' => ''
                ),
                'woxstore-pro-9' => array(
                    'title' => esc_html__('Fitwox', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Fitness and Sports Wear', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/9/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/9/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/9/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/9/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-9/',
                    'plugins' => ''
                ),
                'woxstore-pro-10' => array(
                    'title' => esc_html__('BagStore', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Bags Store', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/10/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/10/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/10/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/woxstore/pro/10/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/woxstore-pro-10/',
                    'plugins' => ''
                ),
            );
            break;
        case "grocefycart":
            $demo_templates_lists = array(
                'grocefycart' => array(
                    'title' => esc_html__('GrocefyCart', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('grocefycart', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/grocefycart/',
                    'plugins' => ''
                ),
                'grocefycart-pro' => array(
                    'title' => esc_html__('GrocefyCart Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('grocefycart pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/grocefycart/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/grocefycart-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "orakus":
            $demo_templates_lists = array(
                'orakus' => array(
                    'title' => esc_html__('Orakus', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('orakus', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/orakus/',
                    'plugins' => ''
                ),
                'orakus-pro' => array(
                    'title' => esc_html__('Orakus Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('orakus pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/orakus-pro/',
                    'plugins' => ''
                ),
                'orakus-pro-2' => array(
                    'title' => esc_html__('Orakus Interiors', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('orakus pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/orakus-pro-2/',
                    'plugins' => ''
                ),
                'orakus-pro-3' => array(
                    'title' => esc_html__('Orakus Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('orakus pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/orakus/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/orakus-pro-3/',
                    'plugins' => ''
                ),
            );
            break;
        case "homelancer":
            $demo_templates_lists = array(
                'homelancer' => array(
                    'title' => esc_html__('Homelancer', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('homelancer', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homelancer/free/1/content.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homelancer/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homelancer/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/homelancer/',
                    'plugins' => ''
                ),
                'homelancer-pro' => array(
                    'title' => esc_html__('Homelancer Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('homelancer pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homelancer/pro/1/content.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homelancer/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/homelancer/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/homelancer-pro/',
                    'plugins' => ''
                ),
            );
            break;
        default:
            $demo_templates_lists = array();
    endswitch;

    return $demo_templates_lists;
}
