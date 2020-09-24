<?php
    /**
     * The template part for Contact page
     *
     * @package  restaurant
     */
    $section         = get_option( 'contact_page_contact_info_section', [] );
    $display_section = $section['display_section'] ?? '';
    $phone           = $section['phone'] ?? '';
    $event           = $section['event'] ?? '';
    $address         = $section['address'] ?? '';
    $contact_form         = $section['contact_form'] ?? '';

    $lunch_hours  = $section['lunch_hours'] ?? '';
    $lunch_hours  = explode( '</p>', $lunch_hours );
    $lunch_hours  = str_replace( '<p>', '', $lunch_hours );
    $lunch_hours  = str_replace( '</p>', '', $lunch_hours );
    $dinner_hours = $section['dinner_hours'] ?? '';
    $dinner_hours = explode( '</p>', $dinner_hours );
    $dinner_hours = str_replace( '<p>', '', $dinner_hours );
    $dinner_hours = str_replace( '</p>', '', $dinner_hours );

    if ( !is_array( $section ) || empty( $section || !$display_section ) ) {
        return;
    }
?>
<section id="contact_info" class="section section-default mb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <h5 class="mb-1 mt-4">
                            <?php _e( 'Book Now', 'restaurant' );?>
                        </h5>
                        <p class="phone"><i class="fa fa-phone"></i> <?php echo esc_html( $phone ); ?></p>

                        <h5 class="mb-1 mt-4">
                            <?php _e( 'Private Events', 'restaurant' );?>
                        </h5>
                        <p class="event"><i class="fa fa-phone"></i> <?php echo esc_html( $event ); ?></p>

                        <h5 class="mb-1 mt-4">
                            <?php _e( 'Visit Us', 'restaurant' );?>
                        </h5>
                        <p class="address"><i class="fa fa-map-marker"></i> <?php echo esc_html( $address ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <h5 class="mb-1 mt-4"><?php _e( 'Lunch Hours', 'restaurant' );?></h5>

                        <ul class="list list-icons list-dark mt-3 lunch_hours">
                            <?php 
                            foreach ( $lunch_hours as $lunch_hour ):
                                if(empty($lunch_hour)){
                                    continue;
                                }
                             ?>
                            <li>
                                <i class="fa fa-clock-o"></i>&nbsp;
                                <?php echo esc_html( $lunch_hour ); ?>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <h5 class="mb-1 mt-4"><?php _e( 'Dinner Hours', 'restaurant' );?></h5>

                        <ul class="list list-icons list-dark mt-3 dinner_hours">
                            <?php 
                            foreach ( $dinner_hours as $dinner_hour ):
                                if(empty($dinner_hour)){
                                    continue;
                                }
                             ?>
                            <li>
                                <i class="fa fa-clock-o"></i>&nbsp;
                                <?php echo esc_html( $dinner_hour ); ?>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 contact_form">
                <h5 class="mb-3 mt-4"><?php _e( 'Send a Message', 'restaurant' );?></h5>

                <?php echo do_shortcode($contact_form); ?>
            </div>
        </div>
    </div>
</section>