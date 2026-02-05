<?php 
/**
 * Register services
 */



// Register Course 
function mokaddesAli_custome_services_register(){
    $labels = array(
        'name'                  => __( 'Services', 'mokaddesAli' ),
        'singular_name'         => __( 'Service', 'mokaddesAli' ),
        'menu_name'             => __( 'Services', 'mokaddesAli' ),
        'name_admin_bar'        => __( 'Services', 'mokaddesAli' ),
        'add_new'               => __( 'Add New', 'mokaddesAli' ),
        'add_new_item'          => __( 'Add New Service', 'mokaddesAli' ),
        'new_item'              => __( 'New Service', 'mokaddesAli' ),
        'edit_item'             => __( 'Edit Service', 'mokaddesAli' ),
        'view_item'             => __( 'View Service', 'mokaddesAli' ),
        'all_items'             => __( 'All Service', 'mokaddesAli' ),
        'search_items'          => __( 'Search Services', 'mokaddesAli' ),
        'parent_item_colon'     => __( 'Parent Services:', 'mokaddesAli' ),
        'not_found'             => __( 'No Services found.', 'mokaddesAli' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'mokaddesAli' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Services custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
         'rewrite'            => array( 'slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true
    );
  
    register_post_type('services', $args);
}
add_action('init', 'mokaddesAli_custome_services_register');

