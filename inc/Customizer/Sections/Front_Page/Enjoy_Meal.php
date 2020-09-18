<?php
/**
 * Enjoy_Meal class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Enjoy_Meal extends Front_Page {
    protected $section     = 'front_page_enjoy_meal_section';
    protected $option_name = 'front_page_enjoy_meal_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Enjoy Meal Section', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'        => 'editor',
            'settings'    => 'section_title',
            'label'       => esc_html__( 'Section title', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'section_title' => [
                    'selector'        => '#enjoy-meal .section-title',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_title'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'        => 'editor',
            'settings'    => 'section_description',
            'label'       => esc_html__( 'Section description', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'section_description' => [
                    'selector'        => '#enjoy-meal .section-description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_description'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'repeater',
            'label'           => esc_html__( 'Enjoy Meal Items', 'restaurant' ),
            'section'         => $this->section,
            'priority'        => 10,
            'row_label'       => [
                'type'  => 'field',
                'field' => 'title',
            ],
            'button_label'    => esc_html__( 'Add new', 'restaurant' ),
            'settings'        => 'enjoy_meal_items',
            'option_name'     => $this->option_name,
            'fields'          => [
                'food_image'   => [
                    'type'  => 'image',
                    'label' => esc_html__( 'Food image', 'restaurant' ),
                ],
                'icon_image'   => [
                    'type'  => 'image',
                    'label' => esc_html__( 'Icon image', 'restaurant' ),
                ],
                'title'       => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Title', 'restaurant' ),
                ],
                'description' => [
                    'type'  => 'textarea',
                    'label' => esc_html__( 'Description', 'restaurant' ),
                ],
                'btn_title' => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Button title', 'restaurant' ),
                ],
                'btn_link' => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Button link', 'restaurant' ),
                ],
            ],
            'partial_refresh' => [
                $this->section . 'enjoy_meal_items' => [
                    'selector'        => '#enjoy-meal .enjoy-meal-items',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['enjoy_meal_items'];
                    },
                ],
            ],
        ] );
    }

}