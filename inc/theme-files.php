<?php


function wp_diploma_theme_files(){
	wp_enqueue_style( 'diploma-bootstap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7', 'all');

	wp_enqueue_style( 'diploma-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '3.3.7', 'all');

	wp_enqueue_style( 'diploma-style', get_stylesheet_uri(), array(), '3.3.7', 'all');
	
	wp_enqueue_script('jQuery');
}

add_action('wp_enqueue_script', 'wp_diploma_theme_files');
?>


