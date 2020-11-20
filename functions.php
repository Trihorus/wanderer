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
   // wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all' );
   // wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true );
    
   // Register styles
   wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');
   wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',[], false, 'all');

   // register scripts
   wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true);
   wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',['jquery'], false, true);
   
   //  Enqueue style
   wp_enqueue_style('stylesheet');
   wp_enqueue_style('bootstrap-css');

   // Enqueue scripts
   wp_enqueue_script('main-js');
   wp_enqueue_script('bootstrap-js');

   // if (is_archive()) {
   //    wp_enqueue_style('stylesheet');
   // }
   
}

add_action( 'wp_enqueue_scripts', 'wanderer_enqueue_scripts');
?>