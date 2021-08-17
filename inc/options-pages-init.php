<?php

add_action('acf/init', 'init_options_pages');
function init_options_pages()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'menu_title' => __('Настройки сайта'),
            'menu_slug'  => 'theme-general-settings',
            'redirect'   => false
        ));
    }
}
