<?php
/** 
 * Theme functions
 * 
 * @package Wanderer
*/

// echo '<pre>';
// print_r( filemtime(get_template_directory().'/style.css') );
// wp_die();

function wanderer_enqueue_scripts() {
//    wp_enqueue_style('main-css', get_template_directory_uri().'/main.css',['stylesheet'] ) 
   wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all' );
}

add_action( 'wp_enqueue_scripts', 'wanderer_enqueue_scripts');
?>