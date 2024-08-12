<?php

/* 
 * My Theme Functions 
 */

add_theme_support('title-tag');




// CSS & JS file Calling Here
add_action('wp_enqueue_scripts', 'sab_pc_css_js_file_calling');


function sab_pc_css_js_file_calling()
{

    //style.css file
    wp_enqueue_style('sab_pc_style', get_stylesheet_uri());

    //bootstrap.css file
    wp_register_style('sab_pc_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('sab_pc_bootstrap_style');

    //custom.css file
    wp_register_style('sab_pc_custom_style', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style('sab_pc_custom_style');

    //jquery
    wp_enqueue_script('jquery');

    // bootstrap.js
    wp_register_script('sab_pc_bootstrap_js', get_template_directory_uri() . '/javascript/bootstrap.js', array(), '5.0.2', true);
    wp_enqueue_script('sab_pc_bootstrap_js');
    // custom.js
    wp_register_script('sab_pc_custom_js', get_template_directory_uri() . '/javascript/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('sab_pc_custom_js');


    // // Google Fonts Enqueue

    // wp_enqueue_style('sab_pc_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', false);


}


// Separately adding/Enqueueing Google Fonts 
function sab_pc_google_fonts()
{

    wp_enqueue_style('sab_pc_google_f', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', false);

}

add_action('wp_enqueue_scripts', 'sab_pc_google_fonts');




//Functions for Customizer

add_action('customize_register', 'sab_pc_customizer_register');

function sab_pc_customizer_register($wp_customize)
{

    $wp_customize->add_section(
        'sab_pc_header_area',
        array(
            'title' => __('Custom Header Area', 'sabbir_Noyon'),
            'description' => 'If you want to change the description, you Can do here.  '
        )
    );

    $wp_customize->add_setting(
        'sab_pc_logo',
        array(

            'default' => get_bloginfo('template_directory') . '/images/00000.png'


        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'sab_pc_logo',
            array(

                'label' => 'Custom Logo Upload',
                'description' => 'If you need you can upload your logo here',
                'section' => 'sab_pc_header_area',
                'setting' => 'sab_pc_logo'


            )
        )
    );



    // Navigation Menu Positioning in Customizer


    $wp_customize->add_section(
        'sab_pc_nav_menu_option',
        array(

            'title' => __('Menu Positioning Option', 'sabbir_noyon'),
            'description' => 'If you wants to change navigation menu position, you can do it here!'


        )
    );

    $wp_customize->add_setting(
        'sab_pc_menu_position',
        array(

            'default' => 'right_menu'


        )
    );

    $wp_customize->add_control(
        'sab_pc_menu_position',
        array(
            'section' => 'sab_pc_nav_menu_option',
            'setting' => 'sab_pc_menu_position',
            'label' => 'Position The Navigation Menu',
            'description' => 'You can change menu position from here!',
            'type' => 'radio',
            'choices' => array(
                'left_menu' => 'Left Menu',
                'right_menu' => 'Right Menu',
                'center_menu' => 'Center Menu'
            ),


        )
    );



}











// Register Nav Menu

register_nav_menu('main_menu', __('main_menu', 'sabbir_Noyon'));