<?php

if ( ! defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if ( ! function_exists('commerc_real_setup')) {
    function commerc_real_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'height' => 70,
            'width'  => 70
        ));
        
        add_image_size('project-thumb', 470, 570, true);
        
        register_nav_menus(
            array(
                'top-menu'    => esc_html__('Header', 'commerc-real'),
                'footer-menu' => esc_html__('Footer', 'commerc-real'),
            )
        );
        
        add_theme_support(
            'html5',
            array(
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
        
    }
}
add_action('after_setup_theme', 'commerc_real_setup');

/**
 * Enqueue scripts and styles.
 */
function commerc_real_scripts()
{
    wp_enqueue_style('commerc-real-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('linear-icon-css', get_stylesheet_directory_uri() . '/vendors/linear-icon/style.css', array(), _S_VERSION);
    wp_enqueue_style('ionicons-css', get_stylesheet_directory_uri() . '/vendors/ionicons/css/ionicons.min.css', array(), _S_VERSION);
    wp_enqueue_style('elegant-icon-css', get_stylesheet_directory_uri() . '/vendors/elegant-icon/style.css', array(), _S_VERSION);
    wp_enqueue_style('bootstrap-min-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION);
    wp_enqueue_style('revolution-settings-css', get_stylesheet_directory_uri() . '/vendors/revolution/css/settings.css', array(), _S_VERSION);
    wp_enqueue_style('revolution-layers-css', get_stylesheet_directory_uri() . '/vendors/revolution/css/layers.css', array(), _S_VERSION);
    wp_enqueue_style('revolution-navigation-css', get_stylesheet_directory_uri() . '/vendors/revolution/css/navigation.css', array(), _S_VERSION);
    wp_enqueue_style('magnific-popup-css', get_stylesheet_directory_uri() . '/vendors/popup/magnific-popup.css', array(), _S_VERSION);
    wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.css', array(), _S_VERSION);
    wp_enqueue_style('animsition-css', get_stylesheet_directory_uri() . '/vendors/animsition/css/animsition.min.css', array(), _S_VERSION);
    wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/vendors/aos/aos.css', array(), _S_VERSION);
    wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/scss/style.scss', array(), _S_VERSION);
    wp_enqueue_style('responsive-css', get_stylesheet_directory_uri() . '/css/responsive.css', array(), _S_VERSION);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-jquery-themepunch-tools-js', get_template_directory_uri() . '/vendors/revolution/js/jquery.themepunch.tools.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-jquery-themepunch-revolution-js', get_template_directory_uri() . '/vendors/revolution/js/jquery.themepunch.revolution.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-extensions-extension-actions-js', get_template_directory_uri() . '/vendors/revolution/js/extensions/revolution.extension.actions.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-extensions-extension-video-js', get_template_directory_uri() . '/vendors/revolution/js/extensions/revolution.extension.video.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-extensions-extension-slideanims-js', get_template_directory_uri() . '/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-extensions-extension-layeranimation-js', get_template_directory_uri() . '/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-extensions-extension-navigation-js', get_template_directory_uri() . '/vendors/revolution/js/extensions/revolution.extension.navigation.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('revolution-extensions-extension-parallax-js', get_template_directory_uri() . '/vendors/revolution/js/extensions/revolution.extension.parallax.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/vendors/popup/jquery.magnific-popup.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('parallax-js', get_template_directory_uri() . '/vendors/parallax/parallax.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('isotope-imagesloaded-js', get_template_directory_uri() . '/vendors/isotope/imagesloaded.pkgd.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('isotope-isotope-js', get_template_directory_uri() . '/vendors/isotope/isotope.pkgd.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('jquery-pagepiling-js', get_template_directory_uri() . '/vendors/pagepiling/jquery.pagepiling.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('animsition-js', get_template_directory_uri() . '/vendors/animsition/js/animsition.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/vendors/aos/aos.js', array(), _S_VERSION, true);
    wp_enqueue_script('gsap-js', get_template_directory_uri() . '/vendors/gsap/TweenMax.min.js', array(), _S_VERSION, true);
    // wp_enqueue_script('smoothscroll-js', get_template_directory_uri() . '/js/smoothscroll.js', array(), _S_VERSION, true);
    wp_enqueue_script('page-flip-js', get_template_directory_uri() . '/js/page-flip.js', array(), _S_VERSION, true);
    wp_enqueue_script('ajax-js', get_template_directory_uri() . '/js/ajax.js', array(), _S_VERSION, true);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', array(), _S_VERSION, true); 
    
    // 360 pannellum
    wp_register_style('pannellum-css', get_stylesheet_directory_uri() . '/vendors/pannellum/pannellum.css', array(), _S_VERSION);
    wp_register_script('pannellum-js', get_template_directory_uri() . '/vendors/pannellum/pannellum.js', array(), _S_VERSION, true);
    
    wp_localize_script('theme-js', 'ajax_data',
        array(
            'action'   => 'send_mail',
            'ajax_url' => site_url() . '/wp-admin/admin-ajax.php',
            'nonce'    => wp_create_nonce('send-mail'),
        )
    );
}

add_action('wp_enqueue_scripts', 'commerc_real_scripts');

require get_template_directory() . '/inc/functions.php';
require get_template_directory() . '/inc/post-types-init.php';
require get_template_directory() . '/inc/taxonomies-init.php';
require get_template_directory() . '/inc/options-pages-init.php';
require get_template_directory() . '/inc/walkers/class-footer-walker.php';
require get_template_directory() . '/inc/walkers/class-header-walker.php';
require get_template_directory() . '/inc/walkers/class-header-mobile-walker.php';