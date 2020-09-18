<?php
/**
 * top_header class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Theme_Options;

use Theme\Customizer\Panels\Theme_Options;

class Header_Top extends Theme_Options {
    protected $section     = 'theme_header_top';
    protected $option_name = 'theme_header_top';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Header Top', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'            => 'toggle',
            'settings'        => 'display',
            'label'           => esc_html__( 'Display Top Header', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'default'         => 1,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'left',
            'label'           => esc_html__( 'Header top left area', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'left' => [
                    'selector'        => '#top-header .left',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['left'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'right',
            'label'           => esc_html__( 'Header top right area', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'right' => [
                    'selector'        => '#top-header .right',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['right'];
                    },
                ],
            ],
        ] );

    }

}