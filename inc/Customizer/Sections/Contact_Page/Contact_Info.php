<?php
/**
 * contact_info class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Contact_Page;

use Theme\Customizer\Panels\Contact_Page;

class Contact_Info extends Contact_Page {
    protected $section     = 'contact_page_contact_info_section';
    protected $option_name = 'contact_page_contact_info_section';

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
            'type'        => 'toggle',
            'settings'    => 'display_section',
            'label'       => esc_html__( 'Display Contact info section', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'default'     => 1,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'phone',
            'label'           => esc_html__( 'Phone', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'partial_refresh' => [
                $this->section . 'phone' => [
                    'selector'        => '.contact #contact_info .phone',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['phone'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'event',
            'label'           => esc_html__( 'Event', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'partial_refresh' => [
                $this->section . 'event' => [
                    'selector'        => '.contact #contact_info .event',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['event'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'address',
            'label'           => esc_html__( 'Address', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'partial_refresh' => [
                $this->section . 'address' => [
                    'selector'        => '.contact #contact_info .address',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['address'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'lunch_hours',
            'label'           => esc_html__( 'Lunch hours', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'partial_refresh' => [
                $this->section . 'lunch_hours' => [
                    'selector'        => '.contact #contact_info .lunch_hours',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['lunch_hours'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'dinner_hours',
            'label'           => esc_html__( 'Dinner hours', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'partial_refresh' => [
                $this->section . 'dinner_hours' => [
                    'selector'        => '.contact #contact_info .dinner_hours',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['dinner_hours'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'contact_form',
            'label'           => esc_html__( 'Contact form shortcode', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'partial_refresh' => [
                $this->section . 'contact_form' => [
                    'selector'        => '.contact #contact_info .contact_form',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['contact_form'];
                    },
                ],
            ],
        ] );

    }

}