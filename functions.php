<?php
/**
 * WPFlow Custom Theme functions and definitions
 */

function wpflow_custom_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wpflow_custom_setup' );

function wpflow_custom_scripts() {
    wp_enqueue_style( 'wpflow-custom-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpflow_custom_scripts' );