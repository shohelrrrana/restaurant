<?php
/**
 * Enqueue class file
 *
 * @package restaurant
 */

namespace Theme\Setup;
use Theme\Traits\Singleton;

class Enqueue {
    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //Action
        add_action( 'wp_enqueue_scripts', [$this, 'register_style'] );
        add_action( 'wp_enqueue_scripts', [$this, 'register_script'] );
    }

    public function register_style() {
        wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light', [], THEME_VERSION );
        wp_enqueue_style( 'bootstrap', THEME_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], THEME_VERSION );
        wp_enqueue_style( 'font-awesome', THEME_URI . '/assets/vendor/font-awesome/css/font-awesome.min.css', [], THEME_VERSION );
        wp_enqueue_style( 'animate', THEME_URI . '/assets/vendor/animate/animate.min.css', [], THEME_VERSION );
        wp_enqueue_style( 'simple-line-icons', THEME_URI . '/assets/vendor/simple-line-icons/css/simple-line-icons.min.css', [], THEME_VERSION );
        wp_enqueue_style( 'owl.carousel', THEME_URI . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', [], THEME_VERSION );
        wp_enqueue_style( 'owl.theme.default', THEME_URI . '/assets/vendor/owl.carousel/assets/owl.theme.default.min.css', [], THEME_VERSION );
        wp_enqueue_style( 'magnific-popup', THEME_URI . '/assets/vendor/magnific-popup/magnific-popup.min.css', [], THEME_VERSION );
        wp_enqueue_style( 'theme-css', THEME_URI . '/assets/css/theme.css', [], THEME_VERSION );
        wp_enqueue_style( 'theme-elements', THEME_URI . '/assets/css/theme-elements.css', [], THEME_VERSION );
        wp_enqueue_style( 'rs-settings', THEME_URI . '/assets/vendor/rs-plugin/css/settings.css', [], THEME_VERSION );
        wp_enqueue_style( 'rs-layers', THEME_URI . '/assets/vendor/rs-plugin/css/layers.css', [], THEME_VERSION );
        wp_enqueue_style( 'rs-navigation', THEME_URI . '/assets/vendor/rs-plugin/css/navigation.css', [], THEME_VERSION );
        wp_enqueue_style( 'demo-restaurant', THEME_URI . '/assets/css/demos/demo-restaurant.css', [], THEME_VERSION );
        wp_enqueue_style( 'skin-restaurant', THEME_URI . '/assets/css/skins/skin-restaurant.css', [], THEME_VERSION );
        wp_enqueue_style( 'theme-blog', THEME_URI . '/assets/css/theme-blog.css', [], THEME_VERSION );
        wp_enqueue_style( 'main-style', THEME_URI . '/assets/css/main-style.css', [], THEME_VERSION );
        wp_enqueue_style( 'theme-style', get_stylesheet_uri(), [], THEME_VERSION );
    }

    public function register_script() {
        wp_enqueue_script( 'bootstrap', THEME_URI . '/assets/vendor/bootstrap/js/bootstrap.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'popper', THEME_URI . '/assets/vendor/bootstrap/js/popper.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'jquery.appear', THEME_URI . '/assets/vendor/jquery.appear/jquery.appear.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'jquery.easing', THEME_URI . '/assets/vendor/jquery.easing/jquery.easing.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'jquery.cookie', THEME_URI . '/assets/vendor/jquery.cookie/jquery.cookie.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'jquery.gmap', THEME_URI . '/assets/vendor/jquery.gmap/jquery.gmap.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'jquery.isotope', THEME_URI . '/assets/vendor/isotope/jquery.isotope.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'owl.carousel', THEME_URI . '/assets/vendor/owl.carousel/owl.carousel.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'magnific-popup', THEME_URI . '/assets/vendor/magnific-popup/jquery.magnific-popup.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'theme-script', THEME_URI . '/assets/js/theme.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'themepunch.tools', THEME_URI . '/assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'themepunch.revolution', THEME_URI . '/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'theme.init', THEME_URI . '/assets/js/theme.init.js', ['jquery'], THEME_VERSION, true );
        wp_enqueue_script( 'main-script', THEME_URI . '/assets/js/main-script.js', ['jquery'], THEME_VERSION, true );
    }
}