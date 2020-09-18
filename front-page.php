<?php
    /**
     * The front page template file
     *
     * @package restaurant
     */

    get_header();
    $sortable_front_page_sections = get_option( 'sortable_front_page_sections', [] );
?>

<div role="main" class="main">
    <?php
        get_template_part( '/template-parts/front-page/hero-slider' );
        get_template_part( '/template-parts/front-page/enjoy-meal' );
        get_template_part( '/template-parts/front-page/testimonial' );
        get_template_part( '/template-parts/front-page/gallery' );
        get_template_part( '/template-parts/front-page/blog-team' );
        get_template_part( '/template-parts/front-page/special-menu' );
    ?>
</div>

<?php
get_footer();
