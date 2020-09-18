<?php
/**
 * Footer class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Theme_Options;

use Theme\Customizer\Panels\Theme_Options;

class Footer extends Theme_Options {
    protected $section     = 'theme_footer';
    protected $option_name = 'theme_footer';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Footer', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'facebook_link',
            'label'           => esc_html__( 'Facebook link', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );
        
        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'twitter_link',
            'label'           => esc_html__( 'Twitter link', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'linkedin_link',
            'label'           => esc_html__( 'Linkedin link', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'instagram_link',
            'label'           => esc_html__( 'Instagram link', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'youtube_link',
            'label'           => esc_html__( 'Youtube link', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'address',
            'label'           => esc_html__( 'Address', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'phone',
            'label'           => esc_html__( 'Phone', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'text',
            'settings'        => 'email',
            'label'           => esc_html__( 'Email', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'copyright_text',
            'label'           => esc_html__( 'Copyright text', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
        ] );


    }

}