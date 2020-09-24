<?php
/**
 * Meta_Boxes class file
 *
 * @package restaurant
 */

namespace Theme\Custom;

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Theme\Traits\Singleton;

class Meta_Boxes {
    use Singleton;

    public function __construct() {
        //load methods
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'after_setup_theme', [$this, 'setup_carbon_fields'] );
        add_action( 'carbon_fields_register_fields', [$this, 'food_menu_metaboxes'] );
    }

    public function setup_carbon_fields() {
        require_once THEME_PATH . '/inc/Plugins/carbon-fields/vendor/autoload.php';
        \Carbon_Fields\Carbon_Fields::boot();
    }

    public function food_menu_metaboxes() {
        Container::make( 'post_meta', 'Select Food Type' )
            ->where( 'post_type', '=', 'food_menu' )
            ->add_fields( [
                Field::make( 'text', 'price', __( 'Price', 'restaurant' ) )
                    ->set_required( true ),
                Field::make( 'select', 'food_type', __( 'Food Type', 'restaurant' ) )
                    ->set_options( [
                        'lunch'  => __( 'Lunch', 'restaurant' ),
                        'dinner' => __( 'Dinner', 'restaurant' ),
                        'drink'  => __( 'Drink', 'restaurant' ),
                    ] )
                    ->set_required( true ),
            ] );
    }
}