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
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Apple Mobile -->
    <link rel="apple-touch-icon-precomposed" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/startup.png">
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

<body <?php body_class(); ?> data-module="homePage">


<div class="loader">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/loader.svg" class="img-loader" alt="">
</div>
<div class="button-contact open-contact">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/button-contact.svg" alt="">
</div>

<div class="popin-contact">
    <div class="popin-contact-image">
        <img src="<?= get_template_directory_uri(); ?>/medias/28.jpg" alt="">
    </div>
    <div class="container-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="title-h2">
                        Nous<br/>
                        <i>contacter</i>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/picto-cross.svg" class="close-popin" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        CABINET<br/>
                        CHAUVEAU MULON & ASSOCIÉS<br/>
                        27 rue Duret, 75116 Paris<br/>
                        Tél. : +33 1 42 68 24 24<br/>
                        Fax : +33 1 42 68 24 30<br/>
                    </p>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="https://www.google.com/maps/place/27+Rue+Duret,+75116+Paris/@48.8750597,2.2840734,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66ff309cea4f5:0x4169cdb4d977959b!8m2!3d48.8750597!4d2.2862621?hl=fr" target="_blank" class="button hidden-xs">
                        Google Maps
                    </a>
                </div>
            </div>

            <form class="row form-contact">
                <div class="message-success title-h3">
                    Votre message a bien été envoyé
                </div>
                <div class="col-sm-12">
                    <p class="error-message">Tous les champs doivent être renseignés</p>
                </div>
                <div class="col-sm-6">
                    <label>
                        <span class="text-label">Nom</span>
                        <input type="text" name="firstName">
                    </label>
                </div>
                <div class="col-sm-6">
                    <label>
                        <span class="text-label">Prénom</span>
                        <input type="text" name="secondName">
                    </label>
                </div>
                <div class="col-sm-6">
                    <label>
                        <span class="text-label">Téléphone</span>
                        <input type="text" name="phone">
                    </label>
                </div>
                <div class="col-sm-6">
                    <label>
                        <span class="text-label">Adresse e-mail</span>
                        <input type="text" name="email">
                    </label>
                </div>
                <div class="col-sm-12">
                    <label>
                        <select name="subject" id="subjects">
                            <option value="">Séléctionnez un sujet</option>
                            <option value="sujet-1">Je souhaite prendre rendez-vous</option>
                            <option value="sujet-2">J'ai un litige </option>
                            <option value="sujet-3">Je souhaite prendre contact avec vous</option>
                            <option value="sujet-4">Je souhaite avoir des informations sur votre cabinet</option>
                        </select>

                    </label>
                </div>
                <div class="col-sm-12">
                    <label>
                        <span class="text-label">Votre message</span>
                        <textarea name="message" id="" cols="30" rows="10"></textarea>
                    </label>
                </div>
                <div class="col-sm-12 text-right">
                    <button type="submit" class="button">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="menu-fixed hidden" data-scroll data-scroll-sticky data-scroll-target="#scroll-container">

    <a href="<?= get_site_url(); ?>">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/logo-dark.svg" class="logo" alt="">
    </a>

    <div class="decoration">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/deco-bloc-1.svg" alt="">
    </div>

    <div class="container-menu-sub">
        <img src="<?= get_template_directory_uri(); ?>/medias/image-header.jpg" class="image-menu-open" alt="">
        <ul>
            <li>
                <a href="<?php echo get_the_permalink(get_field('params_page_about', 'option')); ?>" class="title-h2">À propos</a>
            </li>
            <li>
                <a href="<?php echo get_the_permalink(get_field('params_page_honoraires', 'option')); ?>" class="title-h2">Honoraires</a>
            </li>
            <li>
                <a href="<?php echo get_post_type_archive_link('expertises'); ?>" class="title-h2">Expertises</a>
            </li>
            <li>
                <a href="#" class="title-h2">Actualités</a>
            </li>

        </ul>
    </div>
    <div class="sub-section">
        <img src="<?= get_template_directory_uri(); ?>/medias/book.png" alt="">
        <p>
            CABINET<br/>
            CHAUVEAU MULON & ASSOCIÉS<br/>
            27 rue Duret, 75116 Paris<br/>
            Tél. : +33 1 42 68 24 24<br/>
            Fax : +33 1 42 68 24 30
        </p>
    </div>

    <div class="sub-footer">
        <div class="row">
            <div class="col-sm-4">
                <p class="copyright"> © Chauveau Mulon & Associés 2023 | Tous droits réservés</p>
            </div>
            <div class="col-sm-4 text-center">
                <img src="<?= get_template_directory_uri(); ?>/medias/partners.png" class="partners-footer" alt="">
            </div>
            <div class="col-sm-2">
                <ul class="social-links">
                    <li>
                        <a href="">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2 text-right">
                <a href="" class="link-mentions">Mentions légales</a>
            </div>
        </div>
    </div>

    <button class="button-menu">
        <div class="wording">Menu</div>
    </button>

</div>

<div id="scroll-container" data-scroll-container>

<header<?= (is_singular('expertises') || get_the_id() == get_field('params_page_mentions', 'option')) ? ' class="dark"' : ''; ?>>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <ul class="hidden-xs">
                    <?php if(get_field('params_page_about', 'option')): ?>
                        <li <?= (get_field('params_page_about', 'option') == get_the_id()) ? 'class="is-active"' : ''; ?>>
                            <a href="<?php echo get_the_permalink(get_field('params_page_about', 'option')); ?>">À propos</a>
                        </li>
                    <?php endif; ?>
                    <li <?= (is_post_type_archive('expertises', 'option') || is_singular('expertises')) ? 'class="is-active"' : ''; ?>>
                        <a href="<?php echo get_post_type_archive_link('expertises'); ?>">
                            Expertise
                        </a>
                    </li>
                    <?php if(get_field('params_page_honoraires', 'option')): ?>
                        <li <?= (get_field('params_page_honoraires', 'option') == get_the_id()) ? 'class="is-active"' : ''; ?>>
                            <a href="<?php echo get_the_permalink(get_field('params_page_honoraires', 'option')); ?>">Honoraires</a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="#">Actualités</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <a href="<?= get_site_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/logo<?= (is_singular('expertises') || get_the_id() == get_field('params_page_mentions', 'option')) ? '-dark' : ''; ?>.svg" class="logo" alt="">
                </a>
            </div>
            <div class="col-sm-5 text-right">
                <ul>
                    <!--<li class="lang active low-space">
                        <a href="">
                            FR
                        </a>
                    </li>
                    <li class="lang">
                        <a href="">
                            EN
                        </a>
                    </li> -->
                    <li>
                        <a href="" class="button open-contact hidden-xs">Contact</a>
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
