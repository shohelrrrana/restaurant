<?php
    /**
     * The template part for About page
     *
     * @package  restaurant
     */
    $section             = get_option( 'about_page_about_content_section', [] );
    $section_title       = $section['section_title'] ?? '';
    $section_description = $section['section_description'] ?? '';
    $section_content     = $section['section_content'] ?? '';
    $section_image       = $section['section_image'] ?? '';

    if ( !is_array( $section ) || empty( $section ) ) {
        return;
    }
?>
<section id="about_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-4 section_title">
                <h2 class="section_title">
                    <?php echo wp_kses_post( $section_title ); ?>
                </h2>

                <p class="lead mb-5 mt-4 section_description">
                    <?php echo wp_kses_post( $section_description ); ?>
                </p>

                <img width="205" class="img-fluid float-left mr-4 mb-4 mt-1 section_image" alt="" src="<?php echo esc_url( $section_image ); ?>">

                <div class="section_content">
                    <?php echo wp_kses_post( $section_content ); ?>
                </div>

            </div>
        </div>
    </div>
</section>