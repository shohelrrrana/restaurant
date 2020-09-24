<?php
require_once get_template_directory() . '/inc/Plugins/class-tgm-plugin-activation.php';

function restaurant_plugin_activation() {

    $plugins = [
        [
            'name'     => __( 'Kirki Customizer Framework', 'restaurant' ),
            'slug'     => 'kirki',
            'source'   => 'https://downloads.wordpress.org/plugin/kirki.3.1.5.zip',
            'required' => true,
        ],
        [
            'name'     => __( 'One Click Demo Import', 'restaurant' ),
            'slug'     => 'one-click-demo-import',
            'source'   => 'https://downloads.wordpress.org/plugin/one-click-demo-import.2.6.1.zip',
            'required' => true,
        ],
        [
            'name'     => __( 'Contact Form 7', 'restaurant' ),
            'slug'     => 'contact-form-7',
            'required' => true,
        ],
    ];

    $config = [
        'id'          => 'restaurant_plugins_activation',
        'menu'        => 'restaurant-plugins-activation',
        'parent_slug' => 'themes.php',
        'has_notices' => true,

    ];

    tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'restaurant_plugin_activation' );