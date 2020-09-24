<?php
    /**
     * The template part for Front page
     *
     * @package  restaurant
     */
    $section = get_option( 'common_special_menu_section', [] );
    if ( empty( $section ) ) {
        return;
    }
    $section_title       = $section['section_title'] ?? '';
    $section_description = $section['section_description'] ?? '';
    $btn_title           = $section['btn_title'] ?? '';
    $btn_link            = $section['btn_link'] ?? '';
    $special_menus      = $section['special_menus'] ?? [];
?>
<section id="special-menu" style="background-image: url(https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/background-restaurant.png); background-position: 50% 100%; background-repeat: no-repeat;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12 text-center">
                <h4 class="mt-4 mb-2 text-center section-title">
                    <?php echo wp_kses_post($section_title); ?>
                </h4>
                <div class="section-description text-center">
                    <?php echo wp_kses_post( $section_description ); ?>
                </div>

                <hr class="custom-divider">

                <?php if(is_array($special_menus) && !empty($special_menus)): ?>
                <ul class="special-menu pb-4">

                    <?php 
                    foreach ($special_menus as $menu) :
                        $image_id = $menu['image'] ?? '';
                        $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
                        $title = $menu['title'] ?? '';
                        $description = $menu['description'] ?? '';
                        $price = $menu['price'] ?? '';
                     ?>
                    <li>
                        <img src="<?php echo esc_url($image_url); ?>" class="img-fluid" alt="">
                        <h3>
                            <?php echo esc_html( $title ); ?> 
                            <em><?php echo _e( 'Special', 'restaurant' ); ?></em>
                        </h3>
                        <p>
                            <span><?php echo esc_html( $description ); ?></span>
                        </p>
                        <strong class="special-menu-price text-color-dark">
                            $<?php echo esc_html( $price ); ?>
                        </strong>
                    </li>
                    <?php endforeach; ?>

                </ul>
                <?php endif; ?>

            </div>
        </div>
        <?php if(is_front_page()): ?>
        <div class="row mb-0 mt-5">
            <div class="col-lg-12 text-center">
                <a href="<?php echo esc_html( $btn_link ); ?>" class="btn btn-primary btn-lg mb-5">
                    <?php echo esc_html( $btn_title ); ?>
                </a>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>