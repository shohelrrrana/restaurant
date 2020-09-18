<?php
/**
 * Hero_slider class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Hero_Slider extends Front_Page {
    protected $section     = 'front_page_hero_slider_section';
    protected $option_name = 'front_page_hero_slider_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Hero Slider Section', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'        => 'toggle',
            'settings'    => 'display_section',
            'label'       => esc_html__( 'Display hero slider section', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'default'     => 1,
            'partial_refresh' => [
                $this->section . 'display_section' => [
                    'selector'        => '#hero-slider',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['display_section'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'repeater',
            'label'           => esc_html__( 'Slider Items', 'restaurant' ),
            'section'         => $this->section,
            'priority'        => 10,
            'row_label'       => [
                'type'  => 'field',
                'field' => 'title',
            ],
            'button_label'    => esc_html__( 'Add new slide', 'restaurant' ),
            'settings'        => 'slider_items',
            'option_name'     => $this->option_name,
            'fields'          => [
                'bg_image'   => [
                    'type'  => 'image',
                    'label' => esc_html__( 'Background image', 'restaurant' ),
                ],
                'sub_title'   => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Sub Title', 'restaurant' ),
                ],
                'title'       => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Title', 'restaurant' ),
                ],
                'description' => [
                    'type'  => 'textarea',
                    'label' => esc_html__( 'Description', 'restaurant' ),
                ],
                'display_btn' => [
                    'type'    => 'checkbox',
                    'label'   => esc_html__( 'Display button', 'restaurant' ),
                    'default' => 1,
                ],
                'btn_title'   => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Button title', 'restaurant' ),
                ],
                'btn_link'    => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Button link', 'restaurant' ),
                ],
            ]
        ] );
    }

}