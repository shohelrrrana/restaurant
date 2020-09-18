<?php
/**
 * blog_team class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Blog_Team extends Front_Page {
    protected $section     = 'front_page_blog_team_section';
    protected $option_name = 'front_page_blog_team_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Blog & Team Section', 'restaurant' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {
        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'blog_title',
            'label'           => esc_html__( 'Blog title', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'blog_title' => [
                    'selector'        => '#blog-team .blog-title',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['blog_title'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'blog_description',
            'label'           => esc_html__( 'Blog description', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'blog_description' => [
                    'selector'        => '#blog-team .blog-description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['blog_description'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'        => 'select',
            'label'       => esc_html__( 'Blog Posts', 'restaurant' ),
            'section'     => $this->section,
            'priority'    => 10,
            'multiple'    => 99,
            'settings'    => 'posts',
            'option_name' => $this->option_name,
            'choices'     => \Kirki_Helper::get_posts( ['post_type' => 'post'] ),
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'team_title',
            'label'           => esc_html__( 'Team title', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'team_title' => [
                    'selector'        => '#blog-team .team-title',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['team_title'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'editor',
            'settings'        => 'team_description',
            'label'           => esc_html__( 'Team description', 'restaurant' ),
            'option_name'     => $this->option_name,
            'section'         => $this->section,
            'priority'        => 10,
            'partial_refresh' => [
                $this->section . 'team_description' => [
                    'selector'        => '#blog-team .team-description',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['team_description'];
                    },
                ],
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'            => 'repeater',
            'label'           => esc_html__( 'Teams', 'restaurant' ),
            'section'         => $this->section,
            'priority'        => 10,
            'row_label'       => [
                'type'  => 'field',
                'field' => 'name',
            ],
            'button_label'    => esc_html__( 'Add new member', 'restaurant' ),
            'settings'        => 'teams',
            'option_name'     => $this->option_name,
            'fields'          => [
                'image'    => [
                    'type'  => 'image',
                    'label' => esc_html__( 'Image', 'restaurant' ),
                ],
                'name'     => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Name', 'restaurant' ),
                ],
                'position' => [
                    'type'  => 'text',
                    'label' => esc_html__( 'Position', 'restaurant' ),
                ],
            ],
            'partial_refresh' => [
                $this->section . 'blog_team_items' => [
                    'selector'        => '#blog-team .teams',
                    'render_callback' => '__return_true',
                ],
            ],
        ] );
    }

}