<?php
/**
 * Front_Page class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Panels;

use Theme\Customizer\Customizer;

class Front_Page extends Customizer {
    protected $panel = 'front_page_panel';

    public function __construct() {
        //Load panel
        $this->register_panel();
    }

    public function register_panel() {
        \Kirki::add_panel( $this->panel, [
            'priority'        => 10,
            'title'           => esc_html__( 'Front Page Sections', 'restaurant' ),
            'active_callback' => function () {return is_front_page();},
        ] );
    }

}