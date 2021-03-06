<?php
/**
 * hero class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Menu_Page;

use Theme\Customizer\Panels\Menu_Page;

class Hero extends Menu_Page {
    protected $section     = 'menu_page_hero_section';
    protected $option_name = 'menu_page_hero_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Hero Section', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'        => 'toggle',
            'settings'    => 'display_section',
            'label'       => esc_html__( 'Display hero section', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'default'     => 1,
            'partial_refresh' => [
                $this->section . 'display_section' => [
                    'selector'        => '#hero',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['display_section'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'        => 'editor',
            'settings'    => 'section_title',
            'label'       => esc_html__( 'Section title', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'partial_refresh' => [
                $this->section . 'section_title' => [
                    'selector'        => '#hero .section_title',
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
                    'selector'        => '#hero .section_description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_description'];
                    },
                ],
            ],
        ] );

    }

}