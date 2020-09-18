<?php
    /**
     * The template part for Front page
     *
     * @package  restaurant
     */
    $section = get_option( 'front_page_testimonial_section', [] );
    if ( empty( $section ) ) {
        return;
    }
    $testimonial_items = $section['testimonial_items'] ?? [];
?>
<?php if ( !empty( $testimonial_items ) && is_array( $testimonial_items ) ): ?>
<section id="testimonial" class="section section-background section-center" style="background-position: 50% 100%; min-height: 615px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <hr class="custom-divider">
                <div class="testimonial-items owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">

                <?php
                    foreach ( $testimonial_items as $testimonial ):
                        $name        = $testimonial['name'] ?? '';
                        $position    = $testimonial['position'] ?? '';
                        $description = $testimonial['description'] ?? '';
                    ?>
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <blockquote>
                                        <p><?php echo esc_html( $description ); ?></p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong><?php echo esc_html( $name ); ?></strong>
                                            <span><?php echo esc_html( $position ); ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>


                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">

            </div>
        </div>
    </div>
</section>
<?php endif;?>