<?php

/**
* Enqueue styles.
*/
add_action( 'wp_enqueue_scripts', 'puro_child_styles' );

function puro_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}