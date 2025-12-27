<?php
/**
 * Custom Post Types
 *
 * @package McBride_Creative
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Portfolio Post Type
 */
function mcbride_creative_register_portfolio() {
    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name', 'mcbride-creative' ),
        'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'mcbride-creative' ),
        'menu_name'             => __( 'Portfolio', 'mcbride-creative' ),
        'name_admin_bar'        => __( 'Portfolio Item', 'mcbride-creative' ),
        'archives'              => __( 'Portfolio Archives', 'mcbride-creative' ),
        'attributes'            => __( 'Portfolio Attributes', 'mcbride-creative' ),
        'parent_item_colon'     => __( 'Parent Portfolio:', 'mcbride-creative' ),
        'all_items'             => __( 'All Portfolio Items', 'mcbride-creative' ),
        'add_new_item'          => __( 'Add New Portfolio Item', 'mcbride-creative' ),
        'add_new'               => __( 'Add New', 'mcbride-creative' ),
        'new_item'              => __( 'New Portfolio Item', 'mcbride-creative' ),
        'edit_item'             => __( 'Edit Portfolio Item', 'mcbride-creative' ),
        'update_item'           => __( 'Update Portfolio Item', 'mcbride-creative' ),
        'view_item'             => __( 'View Portfolio Item', 'mcbride-creative' ),
        'view_items'            => __( 'View Portfolio Items', 'mcbride-creative' ),
        'search_items'          => __( 'Search Portfolio', 'mcbride-creative' ),
        'not_found'             => __( 'Not found', 'mcbride-creative' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'mcbride-creative' ),
        'featured_image'        => __( 'Featured Image', 'mcbride-creative' ),
        'set_featured_image'    => __( 'Set featured image', 'mcbride-creative' ),
        'remove_featured_image' => __( 'Remove featured image', 'mcbride-creative' ),
        'use_featured_image'    => __( 'Use as featured image', 'mcbride-creative' ),
        'insert_into_item'      => __( 'Insert into portfolio item', 'mcbride-creative' ),
        'uploaded_to_this_item' => __( 'Uploaded to this portfolio item', 'mcbride-creative' ),
        'items_list'            => __( 'Portfolio items list', 'mcbride-creative' ),
        'items_list_navigation' => __( 'Portfolio items list navigation', 'mcbride-creative' ),
        'filter_items_list'     => __( 'Filter portfolio items list', 'mcbride-creative' ),
    );

    $args = array(
        'label'               => __( 'Portfolio Item', 'mcbride-creative' ),
        'description'         => __( 'Portfolio items for showcasing work', 'mcbride-creative' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'          => array( 'portfolio_category', 'portfolio_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-portfolio',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => 'portfolio' ),
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'mcbride_creative_register_portfolio', 0 );

/**
 * Register Portfolio Category Taxonomy
 */
function mcbride_creative_register_portfolio_category() {
    $labels = array(
        'name'                       => _x( 'Portfolio Categories', 'Taxonomy General Name', 'mcbride-creative' ),
        'singular_name'              => _x( 'Portfolio Category', 'Taxonomy Singular Name', 'mcbride-creative' ),
        'menu_name'                  => __( 'Categories', 'mcbride-creative' ),
        'all_items'                  => __( 'All Categories', 'mcbride-creative' ),
        'parent_item'                => __( 'Parent Category', 'mcbride-creative' ),
        'parent_item_colon'          => __( 'Parent Category:', 'mcbride-creative' ),
        'new_item_name'              => __( 'New Category Name', 'mcbride-creative' ),
        'add_new_item'               => __( 'Add New Category', 'mcbride-creative' ),
        'edit_item'                  => __( 'Edit Category', 'mcbride-creative' ),
        'update_item'                => __( 'Update Category', 'mcbride-creative' ),
        'view_item'                  => __( 'View Category', 'mcbride-creative' ),
        'separate_items_with_commas' => __( 'Separate categories with commas', 'mcbride-creative' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'mcbride-creative' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'mcbride-creative' ),
        'popular_items'              => __( 'Popular Categories', 'mcbride-creative' ),
        'search_items'               => __( 'Search Categories', 'mcbride-creative' ),
        'not_found'                  => __( 'Not Found', 'mcbride-creative' ),
        'no_terms'                   => __( 'No categories', 'mcbride-creative' ),
        'items_list'                 => __( 'Categories list', 'mcbride-creative' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'mcbride-creative' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'portfolio-category' ),
    );

    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}
add_action( 'init', 'mcbride_creative_register_portfolio_category', 0 );

/**
 * Register Testimonials Post Type
 */
function mcbride_creative_register_testimonials() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post Type General Name', 'mcbride-creative' ),
        'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'mcbride-creative' ),
        'menu_name'             => __( 'Testimonials', 'mcbride-creative' ),
        'name_admin_bar'        => __( 'Testimonial', 'mcbride-creative' ),
        'archives'              => __( 'Testimonial Archives', 'mcbride-creative' ),
        'attributes'            => __( 'Testimonial Attributes', 'mcbride-creative' ),
        'all_items'             => __( 'All Testimonials', 'mcbride-creative' ),
        'add_new_item'          => __( 'Add New Testimonial', 'mcbride-creative' ),
        'add_new'               => __( 'Add New', 'mcbride-creative' ),
        'new_item'              => __( 'New Testimonial', 'mcbride-creative' ),
        'edit_item'             => __( 'Edit Testimonial', 'mcbride-creative' ),
        'update_item'           => __( 'Update Testimonial', 'mcbride-creative' ),
        'view_item'             => __( 'View Testimonial', 'mcbride-creative' ),
        'view_items'            => __( 'View Testimonials', 'mcbride-creative' ),
        'search_items'          => __( 'Search Testimonials', 'mcbride-creative' ),
        'not_found'             => __( 'Not found', 'mcbride-creative' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'mcbride-creative' ),
    );

    $args = array(
        'label'               => __( 'Testimonial', 'mcbride-creative' ),
        'description'         => __( 'Client testimonials', 'mcbride-creative' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-format-quote',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => false,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
    );

    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'mcbride_creative_register_testimonials', 0 );
