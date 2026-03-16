<?php

add_theme_support("title-tag");
add_theme_support("post-thumbnails");

function amit_css_js_enqueue() {

 wp_enqueue_style("amit-style", get_stylesheet_uri());
    
}

add_action("wp_enqueue_scripts","amit_css_js_enqueue");