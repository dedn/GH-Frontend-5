<?php
// Register Custom Post Type
function my_works() {
    $labels = array(
        'name'                => _x( 'works', 'Post Type General Name', 'my_works' ),
        'singular_name'       => _x( 'work', 'Post Type Singular Name', 'my_works' ),
        'menu_name'           => __( 'portfolio', 'my_works' ),
        'parent_item_colon'   => __( 'Parent work:', 'my_works' ),
        'all_items'           => __( 'All works', 'my_works' ),
        'view_item'           => __( 'View work', 'my_works' ),
        'add_new_item'        => __( 'Add New work', 'my_works' ),
        'add_new'             => __( 'Add New', 'my_works' ),
        'edit_item'           => __( 'Edit work', 'my_works' ),
        'search_items'        => __( 'Search work', 'my_works' ),
        'not_found'           => __( 'Not found', 'my_works' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'my_works' ),
    );
    $rewrite = array(
        'slug'                => 'portfolio',
        'with_front'          => true,
        'pages'               => true,
        'feeds'               => true,
    );
    $args = array(
        'label'               => __( 'my_works', 'my_works' ),
        'description'         => __( 'Works for site', 'my_works' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'http://wp-admin.com.ua/wp-content/themes/rainbow/favicon.ico',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'query_var'           => 'my_portfolio',
        'rewrite'             => $rewrite,
        'capability_type'     => 'post',
    );
    register_post_type( 'my_works', $args );
}
// Hook into the 'init' action
add_action( 'init', 'my_works', 0 );



// Register Custom Taxonomy
function category_portfolio() {
    $labels = array(
        'name'                       => _x( 'Categories', 'Taxonomy General Name', 'category_portfolio' ),
        'singular_name'              => _x( 'category', 'Taxonomy Singular Name', 'category_portfolio' ),
        'menu_name'                  => __( 'Category', 'category_portfolio' ),
        'all_items'                  => __( 'All category', 'category_portfolio' ),
        'parent_item'                => __( 'Parent category', 'category_portfolio' ),
        'parent_item_colon'          => __( 'Parent category:', 'category_portfolio' ),
        'new_item_name'              => __( 'New category name', 'category_portfolio' ),
        'add_new_item'               => __( 'Add New category', 'category_portfolio' ),
        'edit_item'                  => __( 'Edit category', 'category_portfolio' ),
        'update_item'                => __( 'Update category', 'category_portfolio' ),
        'separate_items_with_commas' => __( 'Separate category with commas', 'category_portfolio' ),
        'search_items'               => __( 'Search category', 'category_portfolio' ),
        'add_or_remove_items'        => __( 'Add or remove category', 'category_portfolio' ),
        'choose_from_most_used'      => __( 'Choose from the most used categorys', 'category_portfolio' ),
        'not_found'                  => __( 'Not Found category', 'category_portfolio' ),
    );
    $rewrite = array(
        'slug'                       => 'portfolio-work',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var'                  => 'category',
        'rewrite'                    => $rewrite,
    );
    register_taxonomy( 'category_portfolio', array( 'my_works' ), $args );
}
// Hook into the 'init' action
add_action( 'init', 'category_portfolio', 0 );

