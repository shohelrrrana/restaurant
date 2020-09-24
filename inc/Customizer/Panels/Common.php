<?php
/**
 * common class file for customizer
 *
 * @package restaurant
 */

namespace Theme\Customizer\Panels;

use Theme\Customizer\Customizer;

class Common extends Customizer {
    protected $panel = 'common_panel';

    public function __construct() {
        //Load panel
        $this->register_panel();
    }

    public function register_panel() {
        \Kirki::add_panel( $this->panel, [
            'priority'        => 10,
            'title'           => esc_html__( 'Common Sections', 'restaurant' ),
            'active_callback' => function () {return true;},
        ] );
    }

}