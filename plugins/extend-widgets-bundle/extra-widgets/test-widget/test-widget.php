<?php

/*
Widget Name: Test widget :)
Description: Uddybet test widget :-)
Author: Gælpafrol Galach Gylpagæs
Author URI: https://webnation.dk
*/

class Test_Widget extends SiteOrigin_Widget
{

    function __construct()
    {

        parent::__construct(
            'test-widget',
            __('Test Widget :-)', 'so-widgets-bundle'),
            array(
                'description' => __('Dette er et test widget :-).', 'so-widgets-bundle')
            ),
            array(),
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function get_widget_form()
    {
        return array(
            /* Heading & CTA */
            'text' => array(
                'type' => 'tinymce',
                'label' => __('Din tester tekst, mester :;-)', 'so-widgets-bundle'),
            ),
        );
    }


    function get_style_name($instance)
    {
        // We're not using a style
        return false;
    }

}

siteorigin_widget_register('test-widget', __FILE__, 'Test_Widget');