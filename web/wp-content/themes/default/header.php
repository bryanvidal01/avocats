<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <style>

        @font-face {
            font-family: 'Inter';
            src: url(<?= get_template_directory_uri();?>/assets/fonts/Inter-Black.woff2) format('woff2'),
            url(<?= get_template_directory_uri();?>/assets/fonts/Inter-Black.woff) format('woff');
            font-weight: 900;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url(<?= get_template_directory_uri();?>/assets/fonts/Inter-Regular.woff2) format('woff2'),
            url(<?= get_template_directory_uri();?>/assets/fonts/Inter-Regular.woff) format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url(<?= get_template_directory_uri();?>/assets/fonts/Inter-ExtraLight.woff2) format('woff2'),
            url(<?= get_template_directory_uri();?>/assets/fonts/Inter-ExtraLight.woff) format('woff');
            font-weight: 200;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/Inter-ExtraBold.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/Inter-ExtraBold.woff') format('woff');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Bold.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Bold.woff') format('woff');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Light.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Light.woff') format('woff');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Medium.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Medium.woff') format('woff');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Thin.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/Inter-Thin.woff') format('woff');
            font-weight: 100;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/Inter-SemiBold.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/Inter-SemiBold.woff') format('woff');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'GT Super Display';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-Light.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-Light.woff') format('woff');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'GT Super Display';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-LightItalic.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-LightItalic.woff') format('woff');
            font-weight: 300;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'GT Super Display';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-Light.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-Light.woff') format('woff');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'GT Super Display';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-LightItalic.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-LightItalic.woff') format('woff');
            font-weight: 300;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'GT Super Display';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-Light.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-Light.woff') format('woff');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'GT Super Display';
            src: url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-LightItalic.woff2') format('woff2'),
            url('<?= get_template_directory_uri();?>/assets/fonts/GTSuperDisplay-LightItalic.woff') format('woff');
            font-weight: 300;
            font-style: italic;
            font-display: swap;
        }

    </style>
    
    <?php
        $pageTitle = (is_front_page() ? get_bloginfo('description') : wp_title('', false) ) . ' | ' . get_bloginfo('name') ;
        $siteDescription = 'description';
    ?>
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $siteDescription; ?>">

    <!-- Copy & Paste Real Favicon Geenerator code : http://realfavicongenerator.net -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest" crossorigin="use-credentials">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Apple Mobile -->
    <link rel="apple-touch-icon-precomposed" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/startup.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <meta name='HandheldFriendly' content='true' />
    <meta name='format-detection' content='telephone=no' />
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Add to Home Screen -->
    <meta name="apple-mobile-web-app-title" content="" />
    <meta name="apple-mobile-web-app-capable" content="no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!-- Smart App Banner - https://developer.apple.com/library/safari/documentation/AppleApplications/Reference/SafariHTMLRef/Articles/MetaTags.html -->
    <meta name="apple-itunes-app" content="app-id=APP_ID,affiliate-data=AFFILIATE_ID,app-argument=SOME_TEXT">
    <!-- Meta Tags Generated via http://heymeta.com -->
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="<?php wp_title( '' ); ?>">
    <meta itemprop="description" content="<?php bloginfo( 'description' ); ?>">
    <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/google.jpg">
    <!-- Facebook Open Graph
    https://developers.facebook.com/tools/debug/sharing/
    https://developers.facebook.com/docs/sharing/webmasters#markup -->
    <meta property="fb:app_id" content="123456789">
    <meta property="og:url" content="<?php bloginfo( 'wpurl' ); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php wp_title( '' ); ?>">
    <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.jpg">
    <!-- Twitter Card
    https://cards-dev.twitter.com/validator
    https://dev.twitter.com/cards/getting-started -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title( '' ); ?>">
    <meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.jpg">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-module="bugReport">

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <ul>
                    <li>
                        <a href="">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Expertise
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Honoraires
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Actualités
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <a href="<?= get_site_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo" alt="">
                </a>
            </div>
            <div class="col-sm-5 text-right">
                <ul>
                    <li class="lang active low-space">
                        <a href="">
                            FR
                        </a>
                    </li>
                    <li class="lang">
                        <a href="">
                            EN
                        </a>
                    </li>
                    <li>
                        <a href="" class="button">Contact</a>
                    </li>
                    <li class="last">
                        <button class="button-menu">
                            <div class="wording">Menu</div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
