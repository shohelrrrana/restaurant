<?php
/**
 * contact_info class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\About_Page;

use Theme\Customizer\Panels\About_Page;

class Contact_Info extends About_Page {
    protected $section     = 'about_page_contact_info_section';
    protected $option_name = 'about_page_contact_info_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Contact Info Section', 'restaurant' ),
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
            'partial_refresh' => [
                $this->section . 'section_title' => [
                    'selector'        => '#contact_info .section_title',
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
            'partial_refresh' => [
                $this->section . 'section_description' => [
                    'selector'        => '#contact_info .section_description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_description'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'        => 'text',
            'settings'    => 'phone',
            'label'       => esc_html__( 'Phone', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'partial_refresh' => [
                $this->section . 'phone' => [
                    'selector'        => '#contact_info .phone',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['phone'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'        => 'text',
            'settings'    => 'address',
            'label'       => esc_html__( 'Address', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'partial_refresh' => [
                $this->section . 'address' => [
                    'selector'        => '#contact_info .address',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['address'];
                    },
                ],
            ],
        ] );

    }

}