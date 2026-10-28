<?php

if (!defined('ABSPATH')) {
    exit;
}

function ruangbelajar_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    register_nav_menus(array(
        'primary' => 'Menu Utama',
        'footer'  => 'Menu Footer'
    ));
}

add_action('after_setup_theme', 'ruangbelajar_setup');


function ruangbelajar_assets() {

    wp_enqueue_style(
        'ruangbelajar-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
}

add_action('wp_enqueue_scripts', 'ruangbelajar_assets');


function ruangbelajar_sidebar() {

    register_sidebar(array(
        'name'          => 'Sidebar Artikel',
        'id'            => 'sidebar-1',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}

add_action('widgets_init', 'ruangbelajar_sidebar');