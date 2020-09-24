<?php
/**
 * Taxonomy class file for register custom Taxonomy
 *
 * @package restaurant
 */

namespace Theme\Custom;

use Theme\Traits\Singleton;

class Taxonomy {
    use Singleton;

    public function __construct() {
        //load hooks
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //setup hooks
        add_action( 'init', [$this, 'register_taxonomies'], 1 );
    }

    public function register_taxonomies() {
        // Register Custom Taxonomy

        $labels = [
            'name'              => _x( 'Food Categories', 'taxonomy general name', 'restaurant' ),
            'singular_name'     => _x( 'Food Category', 'taxonomy singular name', 'restaurant' ),
            'search_items'      => __( 'Search Food Categories', 'restaurant' ),
            'all_items'         => __( 'Food Categories', 'restaurant' ),
            'parent_item'       => __( 'Parent Food Category', 'restaurant' ),
            'parent_item_colon' => __( 'Parent Food Category:', 'restaurant' ),
            'edit_item'         => __( 'Edit Food Category', 'restaurant' ),
            'update_item'       => __( 'Update Food Category', 'restaurant' ),
            'add_new_item'      => __( 'Add New Food Category', 'restaurant' ),
            'new_item_name'     => __( 'New Food Category Name', 'restaurant' ),
            'menu_name'         => __( 'Food Category', 'restaurant' ),
        ];
        $args = [
            'labels'             => $labels,
            'description'        => __( '', 'restaurant' ),
            'hierarchical'       => true,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_tagcloud'      => false,
            'show_in_quick_edit' => true,
            'show_admin_column'  => true,
            'show_in_rest'       => true,
        ];
        register_taxonomy( 'food_category', ['food_menu'], $args );

    }
}