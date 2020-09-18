<?php
    /**
     * The template part for Front page
     *
     * @package  restaurant
     */
    $section = get_option( 'front_page_enjoy_meal_section', [] );
    if ( empty( $section ) ) {
        return;
    }
    $section_title       = $section['section_title'] ?? '';
    $section_description = $section['section_description'] ?? '';
    $enjoy_meal_items    = $section['enjoy_meal_items'] ?? [];
?>
<section id="enjoy-meal" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mt-4 mb-2 text-center section-title">
                        <?php echo wp_kses_post( $section_title ); ?>
                    </h2>
                    <div class="text-3 section-description">
                        <?php echo wp_kses_post( $section_description ); ?>
                    </div>

                    <hr class="custom-divider">
                </div>
            </div>
            <div class="row mt-4 enjoy-meal-items">


                <?php
                    if ( !empty( $enjoy_meal_items ) ):
                        foreach ( $enjoy_meal_items as $item ):
                            $food_image_id = $item['food_image'] ?? '';
                            $icon_image_id = $item['icon_image'] ?? '';
                            $food_image    = wp_get_attachment_image_url( $food_image_id, 'medium' );
                            $icon_image    = wp_get_attachment_image_url( $icon_image_id, 'medium' );
                            $title         = $item['title'] ?? '';
                            $description   = $item['description'] ?? '';
                            $btn_title     = $item['btn_title'] ?? '';
                            $btn_link      = $item['btn_link'] ?? '';
                        ?>
				                <div class="col-md-4 pb-5">
				                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
				                        <div class="thumb-info thumb-info-no-zoom thumb-info-custom mb-5 text-center">
				                            <div class="thumb-info-side-image-wrapper p-0">
				                                <img src="<?php echo esc_url( $food_image ); ?>" class="img-fluid" alt="">
				                                <img class="thumb-info-custom-icon" src="<?php echo esc_url( $icon_image ); ?>" alt="" />
				                            </div>
				                            <div class="thumb-info-caption">
				                                <div class="thumb-info-caption-text px-4">
				                                    <h2 class="mb-3 mt-1">
		                                                <?php echo esc_html( $title ); ?>
		                                            </h2>
				                                    <p class="text-3">
		                                                <?php echo esc_html( $description ); ?>
		                                            </p>
				                                    <a class="btn btn-primary mt-3" href="<?php echo esc_attr( $btn_link ); ?>">
		                                                <?php echo esc_html( $btn_title ); ?>
		                                                <i class="fa fa-long-arrow-right"></i>
		                                            </a>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <?php
                                        endforeach;
                                    endif;
                                ?>


            </div>
        </div>
    </section>