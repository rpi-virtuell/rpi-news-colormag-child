<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


function rw_colormag_js_scripts(){

    wp_enqueue_script('child-theme-colormag-js', trailingslashit( get_stylesheet_directory_uri() ) . 'child-theme-colormag.js');

}
add_action( 'wp_enqueue_scripts', 'rw_colormag_js_scripts', 10 );

// END ENQUEUE PARENT ACTION
