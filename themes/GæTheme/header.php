<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Odense Filmklub Custom Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="shortcut icon" type="image/x-icon" href="">
    <?php wp_head(); ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/rbj8bco.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" type="text/css" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cac93d3230.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <header id="main-header">
            <div class="flex flex-b wrapper">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php /* the_custom_logo(); */?>
                        <img src="http://placekitten.com/200/200" alt="logo">
                    </a>
                </div>


                <?php wp_nav_menu(array('theme_location' => 'primary-nav', 'menu_id' => 'primary-nav', 'menu_class' => 'desktop-only')); ?>
            </div>
        </header>
        <div id="mobile-nav-overlay">
            <?php wp_nav_menu(array('theme_location' => 'primary-nav', 'menu_id' => 'mobile-nav-content', 'menu_class' => 'mobile-only menu')); ?>
        </div>


        <div id="content" class="site-content">