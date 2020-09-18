<?php
/**
 * Testimonial class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Testimonial extends Front_Page {
    protected $section     = 'front_page_testimonial_section';
    protected $option_name = 'front_page_testimonial_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Testimonial Section', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'     => 'background',
            'settings' => 'front_page_testimonial_section_bg',
            'label'    => esc_html__( 'Section Background', 'restaurant' ),
            'section'  => $this->section,
            'priority' => 10,
            'default'   => [
                'background-color'      => '#ddd',
                'background-repeat'     => 'no-repeat',
                'background-position'   => 'center center',
                'background-size'       => 'cover',
                'background-attachment' => 'scroll',
            ],
            'transport' => 'auto',
            'output'    => [
                [
                    'element' => '#testimonial',
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'repeater',
            'label'           => esc_html__( 'Testimonial Items', 'restaurant' ),
            'section'         => $this->section,
            'priority'        => 10,
            'row_label'       => [
                'type'  => 'field',
                'field' => 'name',
            ],
            'button_label'    => esc_html__( 'Add new testimonial', 'restaurant' ),
            'settings'        => 'testimonial_items',
            'option_name'     => $this->option_name,
            'fields'          => [
                'name'        => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Name', 'restaurant' ),
                ],
                'position'    => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Position', 'restaurant' ),
                ],
                'description' => [
                    'type'  => 'textarea',
                    'label' => esc_html__( 'Description', 'restaurant' ),
                ],

            ],
            'partial_refresh' => [
                $this->section . 'testimonial_items' => [
                    'selector'        => '#testimonial .testimonial-items',
                    'render_callback' => '__return_true',
                ],
            ],
        ] );
    }

}