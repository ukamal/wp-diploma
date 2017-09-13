<?php
 require 'inc/theme-files.php';
 require 'inc/shortcodes.php';
 require 'inc/widgets.php';

add_theme_support('post-thumbnails');

add_image_size('post-image', 300, 150, true);

add_action('widget_text', 'do_shortcode');

remove_action('the_content', 'do_shortcode', 9999);

//for menu

function diploma_menu_support() {
  register_nav_menus( array(
   'primary' => 'Primary Menu',
   'footer_menu' => 'Footer Menu'
   ) );
}

 add_action( 'init', 'diploma_menu_support' );

 function diploma_excerpt_length( $length ){
 	$length = 20;
 	return $length;
 }
 add_filter( 'excerpt_length', 'diploma_excerpt_length', 999);

?>

