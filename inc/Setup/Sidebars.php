<?php
/**
 * Sidebars class file
 *
 * @package restaurant
 */

namespace Theme\Setup;
use Theme\Traits\Singleton;

class Sidebars {
    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //Action
        add_action( 'widgets_init', [$this, 'register_sidebars'] );
    }

    public function register_sidebars() {
        register_sidebar( [
            'name'          => __( 'Shop Sidebar', 'restaurant' ),
            'id'            => 'shop-sidebar',
            'description'   => __( 'Widgets in this area will be shown on shop page.', 'restaurant' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ] );
        register_sidebar( [
            'name'          => __( 'Blog Sidebar', 'restaurant' ),
            'id'            => 'blog-sidebar',
            'description'   => __( 'Widgets in this area will be shown on blog page.', 'restaurant' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ] );
    }
}