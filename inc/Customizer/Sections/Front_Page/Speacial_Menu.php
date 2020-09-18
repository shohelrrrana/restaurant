<?php
/**
 * Speacial_Menu class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Speacial_Menu extends Front_Page {
    protected $section     = 'front_page_speacial_menu_section';
    protected $option_name = 'front_page_speacial_menu_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Special Menu Section', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'section_title',
            'label'           => esc_html__( 'Section title', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'section_title' => [
                    'selector'        => '#special-menu .section-title',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_title'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'section_description',
            'label'           => esc_html__( 'Section description', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'section_description' => [
                    'selector'        => '#special-menu .section-description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_description'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'repeater',
            'label'           => esc_html__( 'Special Menu Items', 'restaurant' ),
            'section'         => $this->section,
            'priority'        => 10,
            'row_label'       => [
                'type'  => 'field',
                'field' => 'title',
            ],
            'button_label'    => esc_html__( 'Add new menu', 'restaurant' ),
            'settings'        => 'speacial_menus',
            'option_name'     => $this->option_name,
            'fields'          => [
                'image'       => [
                    'type'  => 'image',
                    'label' => esc_html__( 'Image', 'restaurant' ),
                ],
                'title'       => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Title', 'restaurant' ),
                ],
                'description' => [
                    'type'  => 'textarea',
                    'label' => esc_html__( 'Description', 'restaurant' ),
                ],
                'price' => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Price', 'restaurant' ),
                ],
            ],
            'partial_refresh' => [
                $this->section . 'speacial_menus' => [
                    'selector'        => '#special-menu .special-menu',
                    'render_callback' => '__return_true',
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'btn_title',
            'label'           => esc_html__( 'Button title', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'btn_title' => [
                    'selector'        => '#special-menu .btn',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['btn_title'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'btn_link',
            'label'           => esc_html__( 'Button Link', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );
    }

}