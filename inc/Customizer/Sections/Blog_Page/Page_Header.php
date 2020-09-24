<?php
/**
 * page_header class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Blog_Page;

use Theme\Customizer\Panels\Blog_Page;

class Page_Header extends Blog_Page {
    protected $section     = 'blog_page_page_header_section';
    protected $option_name = 'blog_page_page_header_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Page Header Section', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'        => 'toggle',
            'settings'    => 'display_section',
            'label'       => esc_html__( 'Display page header section', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'default'     => 1,
        ] );

        \Kirki::add_field( $this->config, [
            'type'        => 'editor',
            'settings'    => 'section_title',
            'label'       => esc_html__( 'Section title', 'restaurant' ),
            'option_name' => $this->option_name,
            'section'     => $this->section,
            'partial_refresh' => [
                $this->section . 'section_title' => [
                    'selector'        => '#page_header .section_title',
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
                    'selector'        => '#page_header .section_description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_description'];
                    },
                ],
            ],
        ] );

    }

}