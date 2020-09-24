<?php
    /**
     * The template part for Contact page
     *
     * @package  restaurant
     */
    $section             = get_option( 'blog_page_page_header_section', [] );
    $section_title       = $section['section_title'] ?? '';
    $section_description = $section['section_description'] ?? '';
    $display_section     = $section['display_section'] ?? '';
?>
<?php if ( is_array( $section ) && !empty( $section && !empty($display_section) ) ): ?>
<section id="page_header" class="page-header page-header-modern page-header-md bg-transparent mb-0 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-10 text-color-dark my-3 section_title">
                    <?php echo wp_kses_post( $section_title ); ?>
                </h1>
                <div class="text-3 section_description">
                <?php echo wp_kses_post( $section_description ); ?>
                </div>
                <hr class="custom-divider my-0">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>