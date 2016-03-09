<?php 
function blogWP(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
 add_action('wp_enqueue_scripts','blogWP');




add_theme_support( 'post-thumbnails' );


register_nav_menus(array(
    'primary' => __('Primary Menu'),

));
?>