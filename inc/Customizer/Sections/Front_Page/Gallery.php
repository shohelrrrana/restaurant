<?php
/**
 * Gallery class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Gallery extends Front_Page {
    protected $section     = 'front_page_gallery_section';
    protected $option_name = 'front_page_gallery_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Gallery Section', 'restaurant' ),
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
                    'selector'        => '#gallery .section-title',
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
                    'selector'        => '#gallery .section-description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_description'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'repeater',
            'label'           => esc_html__( 'Gallery Images', 'restaurant' ),
            'section'         => $this->section,
            'priority'        => 10,
            'row_label'       => [
                'type'  => 'text',
                'value' => esc_html__( 'Image', 'restaurant' ),
            ],
            'button_label'    => esc_html__( 'Add new image', 'restaurant' ),
            'settings'        => 'gallery_images',
            'option_name'     => $this->option_name,
            'fields'          => [
                'image'   => [
                    'type'  => 'image',
                    'label' => esc_html__( 'Image', 'restaurant' ),
                ],
            ],
            'partial_refresh' => [
                $this->section . 'gallery_items' => [
                    'selector'        => '#gallery .gallery-images',
                    'render_callback' => '__return_true',
                ],
            ],
        ] );
    }

}