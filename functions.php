<?php

add_theme_support("title-tag");
add_theme_support("post-thumbnails");

function amit_css_js_enqueue()
{
    wp_enqueue_style("amit-style", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", [], "5.3.8", "all");
    wp_enqueue_style("custom", get_template_directory_uri() . "/css/custom.css", [], "1.0.0", "all");

    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/js/bootstrap.min.js", [], "5.3.8", true);
}
add_action("wp_enqueue_scripts", "amit_css_js_enqueue");


function amit_customize_register($wp_customize){
  // Header Area Customization
  $wp_customize->add_section("amit_header_area", [
    "title" => __("Header Area", "learning-wp"),
  ]);

  $wp_customize->add_setting("amit_logo", [
    "default" => get_template_directory_uri() . "/images/logo.png",
    "sanitize_callback" => "esc_url_raw",
  ]);

  $wp_customize->add_control(
    new WP_Customize_Image_Control($wp_customize, "amit_logo", [
      "label" => "Upload Logo",
      "description" => "If you want you can upload or update your logo",
      "setting" => "amit_logo",
      "section" => "amit_header_area",
    ])
  );

  $wp_customize->add_setting("amit_top_header", [
    "default" => "Learning WordPress is Fun 🤩",
    "sanitize_callback" => "sanitize_text_field",
  ]);

  $wp_customize->add_control("amit_top_header", [
    "label" => "Top Header Text",
    "description" => "If you want you can update your top header text.",
    "setting" => "amit_top_header",
    "section" => "amit_header_area",
  ]);

  // Footer Area Customization
  $wp_customize->add_section("amit_footer_area", [
    "title" => __("Footer Area", "learning-wp"),
  ]);

  $wp_customize->add_setting("amit_copyright_text", [
    "default" => "&copy; Allright reserved by Amit Sengupta",
    "sanitize_callback" => "sanitize_text_field",
  ]);

  $wp_customize->add_control("amit_copyright_text", [
    "label" => "Copyright Text",
    "description" => "If you want you can update your copyright text.",
    "setting" => "amit_copyright_text",
    "section" => "amit_footer_area",
  ]);
}
add_action("customize_register", "amit_customize_register");