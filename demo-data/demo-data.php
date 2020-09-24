<?php
function restaurant_import_files() {
    return [
        [
            'import_file_name'             => 'Restaurant demo data import',
            'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo-data/restaurant-content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . '/demo-data/restaurant-customizer.dat',
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'restaurant' ),
        ],
    ];
}
add_filter( 'pt-ocdi/import_files', 'restaurant_import_files' );

function restaurant_after_import() {
    $primary_menu = get_term_by( 'primary-menu', 'Primary Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', ['primary-menu' => $primary_menu->term_id] );

    $front_page = get_page_by_title( 'Home' );
    $blog_page  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page->ID );
    update_option( 'page_for_posts', $blog_page->ID );

}
add_filter( 'pt-ocdi/after_import', 'restaurant_after_import' );