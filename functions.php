<?php

function amit_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'learning-wp'),
    ));
}
add_action('after_setup_theme', 'amit_theme_setup');


function amit_css_js_enqueue() {
    wp_enqueue_style('amit-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.3.8', true);
}
add_action('wp_enqueue_scripts', 'amit_css_js_enqueue');


function amit_customize_register($wp_customize) {
    // Header Area Customization
    $wp_customize->add_section('amit_header_area', array(
        'title' => __('Header Area', 'learning-wp'),
    ));

    $wp_customize->add_setting('amit_logo', array(
        'default' => get_template_directory_uri() . '/images/logo.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'amit_logo', array(
            'label' => 'Upload Logo',
            'description' => 'If you want you can upload or update your logo',
            'settings' => 'amit_logo',
            'section' => 'amit_header_area',
        ))
    );

    $wp_customize->add_setting('amit_top_header', array(
        'default' => 'Learning WordPress is Fun 🤩',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('amit_top_header', array(
        'label' => 'Top Header Text',
        'description' => 'If you want you can update your top header text.',
        'settings' => 'amit_top_header',
        'section' => 'amit_header_area',
        'type' => 'text',
    ));

    // Footer Area Customization
    $wp_customize->add_section('amit_footer_area', array(
        'title' => __('Footer Area', 'learning-wp'),
    ));

    $wp_customize->add_setting('amit_copyright_text', array(
        'default' => '&copy; Allright reserved by Amit Sengupta',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('amit_copyright_text', array(
        'label' => 'Copyright Text',
        'description' => 'If you want you can update your copyright text.',
        'settings' => 'amit_copyright_text',
        'section' => 'amit_footer_area',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'amit_customize_register');


// Register Widget
function amit_widgets_register() {
    register_sidebar(array(
        'name'          => __('Main Widget', 'learning-wp'),
        'id'            => 'sidebar',
        'description'   => 'Your main Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'amit_widgets_register');