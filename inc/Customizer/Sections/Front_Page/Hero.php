<?php
/**
 * Hero class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Hero extends Front_Page {
    protected $section     = 'front_page_hero_section';
    protected $option_name = 'front_page_hero_section';

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
            'type'     => 'toggle',
            'settings' => 'display_front_page_hero_section',
            'label'    => esc_html__( 'Display Hero Section', 'restaurant' ),
            'section'  => $this->section,
            'default'  => '1',
        ] );
        \Kirki::add_field( $this->config, [
            'type'        => 'text',
            'settings'    => 'section_title',
            'label'       => esc_html__( 'Section title', 'restaurant' ),
            'section'     => $this->section,
            'option_name' => $this->option_name,
        ] );
    }

}