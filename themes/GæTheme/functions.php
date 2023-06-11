<?php
function add_custom_logo()
{
    // Add <title> tag support
    add_theme_support('title-tag');
    // Add custom-logo support
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'add_custom_logo');


/* Menus support */
function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'primary-nav' => __('Header navigation'),
        )
    );
}
add_action('init', 'wpb_custom_new_menu');
?>