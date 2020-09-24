<?php
/**
 * Post_Type class file for register custom post type
 *
 * @package restaurant
 */

namespace Theme\Custom;

use Theme\Traits\Singleton;

class Post_Type {
    use Singleton;

    public function __construct() {
        //load hooks
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //setup hooks
        add_action( 'init', [$this, 'register_post_types'], 1 );
    }

    public function register_post_types() {
        // Register Custom Post Type Food Menu

        $labels = [
            'name'                  => _x( 'Food Menus', 'Post Type General Name', 'restaurant' ),
            'singular_name'         => _x( 'Food Menu', 'Post Type Singular Name', 'restaurant' ),
            'menu_name'             => _x( 'Food Menus', 'Admin Menu text', 'restaurant' ),
            'name_admin_bar'        => _x( 'Food Menu', 'Add New on Toolbar', 'restaurant' ),
            'archives'              => __( 'Food Menu Archives', 'restaurant' ),
            'attributes'            => __( 'Food Menu Attributes', 'restaurant' ),
            'parent_item_colon'     => __( 'Parent Food Menu:', 'restaurant' ),
            'all_items'             => __( 'All Food Menus', 'restaurant' ),
            'add_new_item'          => __( 'Add New Food Menu', 'restaurant' ),
            'add_new'               => __( 'Add New', 'restaurant' ),
            'new_item'              => __( 'New Food Menu', 'restaurant' ),
            'edit_item'             => __( 'Edit Food Menu', 'restaurant' ),
            'update_item'           => __( 'Update Food Menu', 'restaurant' ),
            'view_item'             => __( 'View Food Menu', 'restaurant' ),
            'view_items'            => __( 'View Food Menus', 'restaurant' ),
            'search_items'          => __( 'Search Food Menu', 'restaurant' ),
            'not_found'             => __( 'Not found', 'restaurant' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'restaurant' ),
            'featured_image'        => __( 'Featured Image', 'restaurant' ),
            'set_featured_image'    => __( 'Set featured image', 'restaurant' ),
            'remove_featured_image' => __( 'Remove featured image', 'restaurant' ),
            'use_featured_image'    => __( 'Use as featured image', 'restaurant' ),
            'insert_into_item'      => __( 'Insert into Food Menu', 'restaurant' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Food Menu', 'restaurant' ),
            'items_list'            => __( 'Food Menus list', 'restaurant' ),
            'items_list_navigation' => __( 'Food Menus list navigation', 'restaurant' ),
            'filter_items_list'     => __( 'Filter Food Menus list', 'restaurant' ),
        ];
        $args = [
            'label'               => __( 'Food Menu', 'restaurant' ),
            'description'         => __( '', 'restaurant' ),
            'labels'              => $labels,
            'menu_icon'           => 'dashicons-format-aside',
            'supports'            => [],
            'taxonomies'          => ['food_menu_type'],
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_admin_bar'   => false,
            'show_in_nav_menus'   => false,
            'can_export'          => true,
            'has_archive'         => false,
            'hierarchical'        => false,
            'exclude_from_search' => false,
            'show_in_rest'        => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        ];
        register_post_type( 'food_menu', $args );

    }
}