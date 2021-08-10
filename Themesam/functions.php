<?php

function load_stylesheets()
{
    wp_register_style('bootstrap','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('stylesheets', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheets');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

add_filter('use_block_editor_for_post_type', '__return_false', 100);

add_theme_support('post-thumbnails');
add_image_size('small',400,400, true);

add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
        'fotter-menu' => __('Fotter Menu', 'theme'),
    )
);

register_sidebar (
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);