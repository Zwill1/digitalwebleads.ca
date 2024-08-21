<?php

function digitalweb_styles(){
    wp_enqueue_style('digitalweb_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'digitalweb_styles');

function digitalweb_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'digitalweb_features');

?>