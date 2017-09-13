<?php 
function diploma_reg_sidebar(){
	register_sidebar(array(
	'name' => 'Blog Sidebar',
	'id' => 'Blog Sidebar',
	));
}

add_action('widgets_init', 'diploma_reg_sidebar');


