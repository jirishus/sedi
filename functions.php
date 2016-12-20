<?php

 // thumbnail theme support
 add_theme_support('post-thumbnails');

 // actions
 add_action('wp_enqueue_scripts', 'semi_script_enqueuer');
 add_action('init','register_my_menus');

 function semi_script_enqueuer() {
  
  wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/bower_components/bootstrap/dist/css/bootstrap.css', '', '', 'screen' );
  wp_enqueue_style( 'bootstrap' );

  wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
  wp_enqueue_style( 'screen' );

 }

 // register menus
 function register_my_menus() {
 register_nav_menus( array(
   'primary_nav'   => 'Main Menu'
  ));
 }

 // widgets
 if(function_exists('register_sidebar')) {
  register_sidebar(array(
   'name'          => 'main nav',
   'id'            => 'mainnav',
   'description'   => 'Widget for header navigation'
  ));
 }

?>