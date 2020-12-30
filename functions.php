<?php

/**
 * Enqueue the parent theme stylesheet.
 */
function puro_child_enqueue_parent_style() {
	wp_enqueue_style( 'puro-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'puro_child_enqueue_parent_style', 8 );
