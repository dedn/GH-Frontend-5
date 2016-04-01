<?php

add_action( 'wp_enqueue_scripts', 'register_styles' );

//Styles
function register_styles() {
        wp_register_style('style', get_template_directory_uri() .
        '/style.css');
    wp_enqueue_style('style');

    wp_register_style('animate', get_template_directory_uri() .
        '/assets/css/animate.css');
    wp_enqueue_style('animate');

    wp_register_style('bootstrap', get_template_directory_uri() .
        '/assets/css/bootstrap.css');
    wp_enqueue_style('bootstrap');
//
    wp_register_style('font-awesome', get_template_directory_uri() .
        '/assets/css/font-awesome.css');
    wp_enqueue_style('font-awesome');

    wp_register_style('jquery_fancybox', get_template_directory_uri() .
        '/assets/css/jquery.fancybox.css');
    wp_enqueue_style('jquery_fancybox');

    wp_register_style('slick', get_template_directory_uri() .
        '/assets/css/slick.css');
    wp_enqueue_style('slick');

 //theme color

    wp_register_style('default', get_template_directory_uri() .
        '/assets/css/theme-color/default.css');
    wp_enqueue_style('default');
//
//      wp_register_style('bridge', get_template_directory_uri() .
//        '/assets/css/theme-color/bridge-theme.css');
//    wp_enqueue_style('bridge');
//
//    wp_register_style('dark-red-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/dark-red-themes.css');
//    wp_enqueue_style('dark-red-themes');
//
//    wp_register_style('green-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/green-themes.css');
//    wp_enqueue_style('green-themes');
//
//    wp_register_style('lite-blue-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/lite-blue-themes.css');
//    wp_enqueue_style('lite-blue-themes');
//
//    wp_register_style('orange-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/orange-themes.css');
//    wp_enqueue_style('orange-themes');
//
//    wp_register_style('pink-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/pink-themes.css');
//    wp_enqueue_style('pink');
//
//    wp_register_style('purple-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/purple-themes.css');
//    wp_enqueue_style('purple');
//
//    wp_register_style('red-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/red-themes.css');
//    wp_enqueue_style('red');
//
//    wp_register_style('yellow-themes', get_template_directory_uri() .
//        '/assets/css/theme-color/yellow-themes.css');
//    wp_enqueue_style('yellow');

}

add_action( 'wp_enqueue_scripts', 'register_styles' );


function load_my_script() {
//
//    wp_deregister_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() .
        '/assets/js/bootstrap.js');
    wp_enqueue_script('bootstrap');

    wp_register_script('custom', get_template_directory_uri() .
        '/assets/js/custom.js', array ('jquery'), null, false);
    wp_enqueue_script('custom');

    wp_register_script('jquery.counterup', get_template_directory_uri() .
        '/assets/js/jquery.counterup.js', array ('jquery'), null, false);
    wp_enqueue_script('jquery.counterup');

    wp_register_script('jquery.counterup.min', get_template_directory_uri() .
        '/assets/js/jquery.counterup.min.js', array ('jquery'), null, false);
    wp_enqueue_script('jquery.counterup.min');

    wp_register_script('jquery.fancybox.pack', get_template_directory_uri() .
        '/assets/js/jquery.fancybox.pack.js', array ('jquery'), null, false);
    wp_enqueue_script('jquery.fancybox.pack');

    wp_register_script('jquery.mixitup', get_template_directory_uri() .
        '/assets/js/jquery.mixitup.js', array ('jquery'), null, false);
    wp_enqueue_script('jquery.mixitup');

    wp_register_script('slick', get_template_directory_uri() .
        '/assets/js/slick.js', array ('jquery'), null, false);
    wp_enqueue_script('slick');

    wp_register_script('waypoints', get_template_directory_uri() .
        '/assets/js/waypoints.js', array ('jquery'), null, false);
    wp_enqueue_script('waypoints');

    wp_register_script('waypoints', get_template_directory_uri() .
        '/assets/js/waypoints.min.js', array ('jquery'), null, false);
    wp_enqueue_script('waypoints');

    wp_register_script('wow', get_template_directory_uri() .
        '/assets/js/wow.js', array ('jquery'), null, false);
    wp_enqueue_script('wow');

}

add_action('wp_enqueue_scripts', 'load_my_script');



register_nav_menu ('menu','Blog menu');

//    add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );

}

//widget
register_sidebar( array(
    'name' => 'Sidebar',
    'id' => "sidebar",
    'before_widget' => '<div class="single-widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2>',
    'after_title' => "</h2>",
) );

register_sidebar( array(
    'name' => 'Sidebar2',
    'id' => "sidebar2",
    'before_widget' => '<div class="single-widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2>',
    'after_title' => "</h2>",
) );

register_sidebar( array(
    'name' => 'Sidebar3',
    'id' => "sidebar3",
    'before_widget' => '<div class="single-widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2>',
    'after_title' => "</h2>",
) );

register_sidebar( array(
    'name' => 'Sidebar4',
    'id' => "sidebar4",
    'before_widget' => '<div class="single-widget">',
    'after_widget' => "</div>",
    'before_title' => '<h2>',
    'after_title' => "</h2>",
) );


//Social Links

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

    //
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
//

    $wp_customize->add_setting( 'social_links_googleplus' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_links' , array(
        'title'      => __( 'Social Links by blog', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_googleplus', array(
        'label'        => __( 'Googleplus', 'classikblog' ),
        'section'    => 'blog_geek_links',
        'settings'   => 'social_links_googleplus',
    ) ) );

    $wp_customize->add_setting( 'social_links_youtube' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_links' , array(
        'title'      => __( 'Social Links by blog', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_youtube', array(
        'label'        => __( 'Youtube', 'classikblog' ),
        'section'    => 'blog_geek_links',
        'settings'   => 'social_links_youtube',
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

    $wp_customize->add_setting( 'social_links_pinterest' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'blog_geek_links' , array(
        'title'      => __( 'Social Links by blog', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_pinterest', array(
        'label'        => __( 'Pinterest', 'classikblog' ),
        'section'    => 'blog_geek_links',
        'settings'   => 'social_links_pinterest',
    ) ) );


}
add_action( 'customize_register', 'blog_customize_register' );

