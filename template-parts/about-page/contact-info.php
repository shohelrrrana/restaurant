<?php
    /**
     * The template part for About page
     *
     * @package  restaurant
     */
    $section             = get_option( 'about_page_contact_info_section', [] );
    $section_title       = $section['section_title'] ?? '';
    $section_description = $section['section_description'] ?? '';
    $phone               = $section['phone'] ?? '';
    $address             = $section['address'] ?? '';

    if ( !is_array( $section ) || empty( $section ) ) {
        return;
    }
?>
<section id="contact_info" class="section section-default mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <h4 class="mt-4 mb-2 section_title text-center">
                    <?php echo wp_kses_post($section_title); ?>
                </h4>
                <div class="section_description text-center">
                    <?php echo wp_kses_post( $section_description ); ?>
                </div>

                <hr class="custom-divider">

                <h5 class="mb-1 mt-4 text-center">
                    <?php _e('Book Now', 'restaurant'); ?>
                </h5>
                <p class="phone">
                    <i class="fa fa-phone"></i> 
                    <?php echo esc_html( $phone ); ?>
                </p>

                <h5 class="mb-1 mt-4 text-center">
                    <?php _e( 'Visit Us', 'restaurant' );?>
                </h5>
                <p class="address">
                    <i class="fa fa-map-marker"></i> 
                    <?php echo esc_html( $address ); ?>
                </p>

            </div>
        </div>
    </div>
</section>