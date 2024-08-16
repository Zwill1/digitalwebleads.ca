<?php

function digitalweb_styles(){
    wp_enqueue_style('digitalweb_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'digitalweb_styles');


?>