<?php
    /**
     * The front page template file
     *
     * @package restaurant
     */

    get_header();
    $sortable_front_page_sections = get_theme_mod( 'sortable_front_page_sections', false );
?>

<?php get_template_part( 'template-parts/front-page/hero' );?>

<main class="site-main">

    <?php
        if ( is_array( $sortable_front_page_sections ) ) {
            foreach ( $sortable_front_page_sections as $section ) {
                get_template_part( 'template-parts/front-page/' . $section );
            }
        }
    ?>

</main>


<?php
get_footer();
