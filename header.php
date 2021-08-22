<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package commerc_real
 */

?>
    <!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

<div class="layout animsition">

    <div id="small-dialog" class="zoom-anim-dialog mfp-hide embed-responsive embed-responsive-16by9">
        <iframe src="https://player.vimeo.com/video/34741214?color=ffffff&title=0&byline=0&portrait=0"></iframe>
    </div>
    <!--================Header Menu Area =================-->
    <header class="header_menu_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php the_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <?php wp_nav_menu([
                'theme_location'  => 'top-menu',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'nav navbar-nav',
                'menu_id'         => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker'          => new Header_Walker_Nav_Menu(),
            ]); ?>
        </nav>
    </header>
    <header class="full_header dark_menu mobile_menu">
        <div class="float-left">
            <a class="custom-logo-link" href="/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/main-logo.png" alt="" class="custom-logo">
            </a>
            <a class="phone" href="tel:3689565656"><i class="lnr lnr-phone-handset"></i> (+070) 3689 56 56 56</a>
        </div>
        <div class="float-right">
            <div class="bar_menu">
                <i class="lnr lnr-menu"></i>
            </div>
        </div>
    </header>
    <div class="click-capture"></div>
    <div class="side_menu dark_s_menu">
        <span class="close-menu lnr lnr-cross right-boxed"></span>
        <?php wp_nav_menu([
            'theme_location' => 'top-menu',
            'container'      => '',
            'menu_class'     => 'menu-list right-boxed',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker'         => new Header_Mobile_Walker_Nav_Menu(),
        ]); ?>
        <?php $options = get_field('contacts', 'options'); ?>
        <div class="menu-footer right-boxed">
            <div class="copy"><?php echo $options['copyright']; ?></div>
        </div>
    </div>
    <!--================End Header Menu Area =================-->

<?php wp_body_open(); ?>