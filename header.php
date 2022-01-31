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
        <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

<div class="layout">


    <header class="header">
        <a class="logo header__logo" href="/">
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="" class="custom-logo">
            <span>COMMERC REAL</span>
        </a>
        <?php wp_nav_menu([
            'theme_location'  => 'top-menu',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'nav navbar-nav',
            'menu_id'         => '',
            'items_wrap'      => '<ul class="nav-list">%3$s</ul>',
            'walker'          => new Header_Walker_Nav_Menu(),
        ]); ?>
        <?php
        $options = get_field('contacts', 'options');
        if ($options['socials']):
            ?>
            <div class="header__socials socials">
                <?php foreach ($options['socials'] as $social): ?>
                    <a href="<?= esc_url($social['link']); ?>" class="social">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/img/icon/social-<?= $social['type']; ?>.png" alt="">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/img/icon/social-<?= $social['type']; ?>-hover.png" alt="">
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="open-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <div class="click-capture"></div>
    <div class="side_menu dark_s_menu">
        <span class="close-menu lnr lnr-cross"></span>
        <?php wp_nav_menu([
            'theme_location' => 'top-menu',
            'container'      => '',
            'menu_class'     => 'menu-list',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker'         => new Header_Mobile_Walker_Nav_Menu(),
        ]); ?>
        <?php $options = get_field('contacts', 'options'); ?>
        <div class="menu-footer">
            <div class="copy"><?= $options['copyright']; ?></div>
        </div>
    </div>
    <!--================End Header Menu Area =================-->

<?php wp_body_open(); ?>