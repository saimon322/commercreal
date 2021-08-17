<?php

add_action('init', 'init_post_types');
function init_post_types()
{
    
    register_post_type('projects', array(
        'labels'             => array(
            'name'               => 'Проекты',
            'singular_name'      => 'Проекты',
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый проект',
            'edit_item'          => 'Редактировать проект',
            'new_item'           => 'Новый проект',
            'view_item'          => 'Посмотреть проект',
            'search_items'       => 'Найти проект',
            'not_found'          => 'Проектов не найдено',
            'not_found_in_trash' => 'В корзине проектов не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Проекты'
        
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'thumbnail')
    ));
    
    register_post_type('services', array(
        'labels'             => array(
            'name'               => 'Услуги',
            'singular_name'      => 'Услуга',
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новую услугу',
            'edit_item'          => 'Редактировать услугу',
            'new_item'           => 'Новая услуга',
            'view_item'          => 'Посмотреть услугу',
            'search_items'       => 'Найти услугу',
            'not_found'          => 'Услуг не найдено',
            'not_found_in_trash' => 'В корзине услуг не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Услуги'
        
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail')
    ));
    
    
}