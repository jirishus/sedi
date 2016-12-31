<?php

 // thumbnail theme support
 add_theme_support('post-thumbnails');

 // actions & filters
 add_action('wp_enqueue_scripts', 'semi_script_enqueuer');
 add_action('init','register_my_menus');

 add_filter('show_admin_bar', '__return_false');
 
 /**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

 /**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
  function wpdocs_custom_excerpt_length( $length ) {
      return 15;
  }
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

 // definitions

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

 if(function_exists('register_sidebar')) {
  register_sidebar(array(
   'name'          => 'sidebar info',
   'id'            => 'sidebar-info',
   'description'   => 'Sidebar Widget'
  ));
 }

 if(function_exists('register_sidebar')) {
  register_sidebar(array(
   'name'          => 'learn nav',
   'id'            => 'learn-nav',
   'description'   => 'Learn Nav Widget'
  ));
 }

 if(function_exists('register_sidebar')) {
  register_sidebar(array(
   'name'          => 'main search',
   'id'            => 'main-search',
   'description'   => 'Main Search Widget'
  ));
 }

 if(function_exists('register_sidebar')) {
  register_sidebar(array(
   'name'          => 'footer nav',
   'id'            => 'footer-nav',
   'description'   => 'Main Footer Widget'
  ));
 }

?>