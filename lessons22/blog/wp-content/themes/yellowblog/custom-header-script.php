<?php
//function script_gallery_method() {
//    $tmpDir = get_template_directory_uri();
//    if ( uGetPostType() == 'portfolio'){
//        wp_register_script( 'easing-portfolio', $tmpDir.'/js/jquery.easing.min.js');
//        wp_enqueue_script( 'easing-portfolio' );
//        wp_register_script( 'mixitup-portfolio', $tmpDir.'/js/jquery.mixitup.min.js');
//        wp_enqueue_script( 'mixitup-portfolio' );
//        wp_register_script( 'custom-portfolio', $tmpDir.'/js/custom.js');
//        wp_enqueue_script( 'custom-portfolio' );
//    }
//}
//add_action( 'wp_enqueue_scripts', 'script_gallery_method' );
//function add_my_stylesheet() {
//    $tmpDir = get_template_directory_uri();
//    if ( uGetPostType() == 'portfolio'){
//        wp_register_style('normalize-portfolio', $tmpDir.'/css/normalize.css');
//        wp_enqueue_style('normalize-portfolio');
//        wp_register_style('layout-portfolio', $tmpDir.'/css/layout.css');
//        wp_enqueue_style('layout-portfolio');
//    }
//}
//add_action('wp_print_styles', 'add_my_stylesheet');
//
//
//
//function uGetPostType(){
//    $post_type = get_post_type();
//    if ($post_type){
//        $post_type_data = get_post_type_object( $post_type );
//        $post_type_slug = $post_type_data->rewrite['slug'];
//        return $post_type_slug;
//    }
//}
//
//
