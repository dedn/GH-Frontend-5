<?php
//Add castom type portfolio
require('custom-type.php');
require('custom-header-script.php');

//if ( function_exists( 'add_theme_support' ) ) {
//    add_theme_support( 'post-thumbnails' );
//}
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
add_image_size( 'portfolio-thumbnail', 333, 187, true );
}


//Styles
function register_styles() {
      wp_register_style('main', get_template_directory_uri() .
        '/css/main.css');
    wp_enqueue_style('main');

    wp_register_style('slider', get_template_directory_uri() .
        '/css/jquery.bxslider.css');
    wp_enqueue_style('slider');

}

add_action( 'wp_enqueue_scripts', 'register_styles' );

function load_my_script() {

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() .
        '/js/jquery.1.7.1.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('bxslider', get_template_directory_uri() .
        '/js/jquery.bxslider.js', array ('jquery'), null, false);
    wp_enqueue_script('bxslider');

    wp_register_script('script', get_template_directory_uri() .
        '/js/script.js', array ('jquery'), null, false);
    wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts', 'load_my_script');

//nav meny

register_nav_menu ('menu','Main menu');
//widget

register_sidebar( array(
    'name' => 'Sidebar',
    'id' => "sidebar",
    'before_widget' => '<li class="popular-topic">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="popular-topic-title">',
    'after_title' => "</h3>",
) );

register_sidebar( array(
    'name' => 'Sidebar2',
    'id' => "sidebar2",
    'before_widget' => '<li class="category-bar">',
    'after_widget' => "</li>",
    'before_title' => '<h4 class="bar-title">',
    'after_title' => "</h4>",
) );

register_sidebar( array(
    'name' => 'Sidebar3',
    'id' => "sidebar3",
    'before_widget' => '<li class="baner-block">',
    'after_widget' => "</li>",
    'before_title' => '<span class="baner-logo">',
    'after_title' => "</span>",
) );

function blog_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'social_links_facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_links' , array(
        'title'      => __( 'Social Links by blog', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
        'label'        => __( 'Facebok', 'classikblog' ),
        'section'    => 'blog_geek_links',
        'settings'   => 'social_links_facebook',
    ) ) );

    $wp_customize->add_setting( 'social_links_twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_links' , array(
        'title'      => __( 'Social Links by blog', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
        'label'        => __( 'Twitter', 'classikblog' ),
        'section'    => 'blog_geek_links',
        'settings'   => 'social_links_twitter',
    ) ) );

    $wp_customize->add_setting( 'social_links_linkedin' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_links' , array(
        'title'      => __( 'Social Links by blog', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_linkedin', array(
        'label'        => __( 'Linkedin', 'classikblog' ),
        'section'    => 'blog_geek_links',
        'settings'   => 'social_links_linkedin',
    ) ) );

    $wp_customize->add_setting( 'social_links_color' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_links_color', array(
        'label'        => __( 'social_links_color', 'classikblog' ),
        'section'    => 'blog_geek_links',
        'settings'   => 'social_links_color',
    ) ) );


}
add_action( 'customize_register', 'blog_customize_register' );

//contact control

function blog_contact_control( $wp_customize ) {
    $wp_customize->add_setting( 'contact_section_control' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_contact' , array(
        'title'      => __( 'Control Contact', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_section_control', array(
        'label'        => __( 'Number', 'classikblog' ),
        'section'    => 'blog_geek_contact',
        'settings'   => 'contact_section_control',
    ) ) );

    //Email
    $wp_customize->add_setting( 'email_section_control' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_contact' , array(
        'title'      => __( 'Control Contact', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_section_control', array(
        'label'        => __( 'Email', 'classikblog' ),
        'section'    => 'blog_geek_contact',
        'settings'   => 'email_section_control',
    ) ) );


}
add_action( 'customize_register', 'blog_contact_control' );



//accen

function tcx_register_theme_customizer( $wp_customize ) {

    $wp_customize->add_setting(
        'tcx_link_color',
        array(
            'default'     => '#000000'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'      => __( 'Link Color', 'tcx' ),
                'section'    => 'colors',
                'settings'   => 'tcx_link_color'
            )
        )
    );

}
add_action( 'customize_register', 'tcx_register_theme_customizer' );

function script_gallery_method() {
    $tmpDir = get_template_directory_uri();
    if ( uGetPostType() == 'portfolio'){
        wp_register_script( 'easing-portfolio', $tmpDir.'/js/jquery.easing.min.js');
        wp_enqueue_script( 'easing-portfolio' );
        wp_register_script( 'mixitup-portfolio', $tmpDir.'/js/jquery.mixitup.min.js');
        wp_enqueue_script( 'mixitup-portfolio' );
        wp_register_script( 'custom-portfolio', $tmpDir.'/js/custom.js');
        wp_enqueue_script( 'custom-portfolio' );
        wp_register_script('lightbox-portfolio', $tmpDir.'/js/jquery.lightbox.min.js');
        wp_enqueue_script( 'lightbox-portfolio' );
    }
}
add_action( 'wp_enqueue_scripts', 'script_gallery_method' );
function add_my_stylesheet() {
    $tmpDir = get_template_directory_uri();
    if ( uGetPostType() == 'portfolio'){
        wp_register_style('normalize-portfolio', $tmpDir.'/css/normalize.css');
        wp_enqueue_style('normalize-portfolio');
        wp_register_style('layout-portfolio', $tmpDir.'/css/layout.css');
        wp_enqueue_style('layout-portfolio');
        wp_register_style('lightbox-portfolio', $tmpDir.'/css/jquery.lightbox.min.css');
        wp_enqueue_style('lightbox-portfolio');
    }
}
add_action('wp_print_styles', 'add_my_stylesheet');



function uGetPostType(){
    $post_type = get_post_type();
    if ($post_type){
        $post_type_data = get_post_type_object( $post_type );
        $post_type_slug = $post_type_data->rewrite['slug'];
        return $post_type_slug;
    }
}
//Атрибут для кореткной работы выплывющего окна портфолио

add_filter( 'wp_get_attachment_link', 'sant_lightboxadd', 10, 6);

function sant_lightboxadd ($content, $id, $size, $permalink, $icon, $text) {
    if ($permalink) {
        return $content;
    }
    $content = preg_replace("/<a/","<a rel=\"lightbox\"",$content,1);
    return $content;
}





