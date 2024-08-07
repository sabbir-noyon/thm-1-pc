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
    wp_register_style('sab_pc_bootstrap_style', get_template_directory_uri() . 'css/bootstrap.css');
    wp_enqueue_style('sab_pc_bootstrap_style');

    //custom.css file
    wp_register_style('sab_pc_custom_style', get_template_directory_uri() . 'css/custom.css');
    wp_enqueue_style('sab_pc_custom_style');

    //jquery
    wp_enqueue_script('jquery');

    // bootstrap.js
    wp_register_script('sab_pc_bootstrap_js', get_template_directory_uri() . 'javascript/bootstrap.js', array(), '5.0.2', true);
    wp_enqueue_script('sab_pc_bootstrap_js');
    // custom.js
    wp_register_script('sab_pc_custom_js', get_template_directory_uri() . 'javascript/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('sab_pc_custom_js');


}


//Function for Customizer

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





}







// BY CHATGPT

// add_theme_support('title-tag');

// // CSS & JS file Calling Here
// add_action('wp_enqueue_scripts', 'sab_pc_css_js_file_calling');

// function sab_pc_css_js_file_calling() {
//     // style.css file
//     wp_enqueue_style('sab_pc_style', get_stylesheet_uri());

//     // bootstrap.css file
//     wp_register_style('sab_pc_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css');
//     wp_enqueue_style('sab_pc_bootstrap_style');

//     // custom.css file
//     wp_register_style('sab_pc_custom_style', get_template_directory_uri() . '/css/custom.css');
//     wp_enqueue_style('sab_pc_custom_style');

//     // jquery
//     wp_enqueue_script('jquery');

//     // bootstrap.js
//     wp_register_script('sab_pc_bootstrap_js', get_template_directory_uri() . '/javascript/bootstrap.js', array(), '5.0.2', true);
//     wp_enqueue_script('sab_pc_bootstrap_js');

//     // custom.js
//     wp_register_script('sab_pc_custom_js', get_template_directory_uri() . '/javascript/custom.js', array(), '1.0.0', true);
//     wp_enqueue_script('sab_pc_custom_js');
// }

// // Function for Customizer
// add_action('customize_register', 'sab_pc_customizer_register');

// function sab_pc_customizer_register($wp_customize) {
//     // Add Section
//     $wp_customize->add_section('sab_pc_header_area', array(
//         'title'       => __('Header Area', 'sabbir_Noyon'),
//         'description' => 'Customize the header area',
//         // 'priority'    => 30,
//     ));

//     // Add Setting
//     $wp_customize->add_setting('sab_pc_header_text', array(
//         'default'           => 'Default Header Text',
//         'sanitize_callback' => 'sanitize_text_field',
//     ));

//     // Add Control
//     $wp_customize->add_control('sab_pc_header_text_control', array(
//         'label'    => __('Header Text', 'sabbir_Noyon'),
//         'section'  => 'sab_pc_header_area',
//         'settings' => 'sab_pc_header_text',
//         'type'     => 'text',
//     ));
// }
