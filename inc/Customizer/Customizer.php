<?php
/**
 * Kirki Setup class file
 *
 * @package restaurant
 */

namespace Theme\Customizer;

use Theme\Traits\Singleton;

class Customizer {
    protected $config = 'theme_customizer_config';
    use Singleton;

    public function __construct() {
        if ( !class_exists( 'Kirki' ) ) {
            return;
        }
        //Load the class methods
        $this->config();
        $this->load_panels();
        $this->load_sections();
    }

    public function config() {
        \Kirki::add_config( $this->config, [
            'capability'  => 'edit_theme_options',
            'option_type' => 'option',
        ] );
    }

    public function load_panels() {
        //Load panels
        \Theme\Customizer\Panels\Theme_Options::get_instance();
        \Theme\Customizer\Panels\Common::get_instance();
        \Theme\Customizer\Panels\Front_Page::get_instance();
        \Theme\Customizer\Panels\Menu_Page::get_instance();
        \Theme\Customizer\Panels\About_Page::get_instance();
        \Theme\Customizer\Panels\Contact_Page::get_instance();
        \Theme\Customizer\Panels\Blog_Page::get_instance();
    }

    public function load_sections() {
        //Theme option sections
        \Theme\Customizer\Sections\Theme_Options\Typography::get_instance();
        \Theme\Customizer\Sections\Theme_Options\Header_Top::get_instance();
        \Theme\Customizer\Sections\Theme_Options\Footer::get_instance();

        //Common sections
        \Theme\Customizer\Sections\Common\Special_Menu::get_instance();

        //Front page sections
        \Theme\Customizer\Sections\Front_Page\Sortable::get_instance();
        \Theme\Customizer\Sections\Front_Page\Hero_Slider::get_instance();
        \Theme\Customizer\Sections\Front_Page\Enjoy_Meal::get_instance();
        \Theme\Customizer\Sections\Front_Page\Testimonial::get_instance();
        \Theme\Customizer\Sections\Front_Page\Gallery::get_instance();
        \Theme\Customizer\Sections\Front_Page\Blog_Team::get_instance();

        //Menu page sections
        \Theme\Customizer\Sections\Menu_Page\Hero::get_instance();

        //About page sections
        \Theme\Customizer\Sections\About_Page\Hero::get_instance();
        \Theme\Customizer\Sections\About_Page\About_Content::get_instance();
        \Theme\Customizer\Sections\About_Page\Contact_Info::get_instance();

        //Contact page sections
        \Theme\Customizer\Sections\Contact_Page\Hero::get_instance();
        \Theme\Customizer\Sections\Contact_Page\Contact_Info::get_instance();

        //Blog page sections
        \Theme\Customizer\Sections\Blog_Page\Page_Header::get_instance();
    }

}