<?php
    /**
     * The template part for Front page
     *
     * @package  restaurant
     */
    $section = get_option( 'front_page_hero_slider_section', [] );
    if ( empty( $section ) ) {
        return;
    }
    $display_section = $section['display_section'];
    $slider_items    = $section['slider_items'] ?? [];
?>
<?php if ( $display_section && is_array( $slider_items ) && !empty( $slider_items ) ): ?>
<section id="hero-slider">
    <div class="slider-container rev_slider_wrapper" style="height: 650px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on'}">
            <ul>

                <?php
                    foreach ( $slider_items as $slider ):
                        $image_id    = $slider['bg_image'] ?? '';
                        $sub_title   = $slider['sub_title'] ?? '';
                        $title       = $slider['title'] ?? '';
                        $description = $slider['description'] ?? '';
                        $display_btn = $slider['display_btn'] ?? '';
                        $btn_title   = $slider['btn_title'] ?? '';
                        $btn_link    = $slider['btn_link'] ?? '';
                    ?>
		                <li data-transition="fade">
		                    <img src="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'large' ) ); ?>"
		                        alt=""
		                        data-bgposition="center center"
		                        data-bgfit="cover"
		                        data-bgrepeat="no-repeat"
		                        class="rev-slidebg">

		                    <div class="tp-caption top-label alternative-font"
		                        data-x="left" data-hoffset="25"
		                        data-y="center" data-voffset="-55"
		                        data-start="500"
		                        style="z-index: 5"
		                        data-transform_in="y:[-300%];opacity:0;s:500;">
		                    <?php echo esc_html( $sub_title ); ?>
		                    </div>

		                    <!-- <div class="tp-caption"
		                        data-x="left" data-hoffset="185"
		                        data-y="center" data-voffset="-55"
		                        data-start="1000"
		                        style="z-index: 5"
		                        data-transform_in="x:[300%];opacity:0;s:500;">
		                        <img src="https://portotheme.com/html/porto/8.0.0/img/slides/slide-title-border.png" alt="">
		                    </div> -->

		                    <div class="tp-caption main-label"
		                        data-x="left" data-hoffset="25"
		                        data-y="center" data-voffset="-5"
		                        data-start="1500"
		                        data-whitespace="nowrap"
		                        data-transform_in="y:[100%];s:500;"
		                        data-transform_out="opacity:0;s:500;"
		                        style="z-index: 5"
		                        data-mask_in="x:0px;y:0px;"><?php echo esc_html( $title ); ?></div>

		                    <div class="tp-caption bottom-label"
		                        data-x="left" data-hoffset="25"
		                        data-y="center" data-voffset="40"
		                        data-start="2000"
		                        style="z-index: 5; font-size: 1.2em;"
		                        data-transform_in="y:[100%];opacity:0;s:500;"><?php echo esc_html( $description ); ?></div>

		                    <?php if ( $display_btn ): ?>
		                    <a class="tp-caption btn btn-md btn-primary"
		                        data-hash
		                        data-hash-offset="85"
		                        href="<?php echo esc_attr( $btn_link ); ?>"
		                        data-x="left" data-hoffset="25"
		                        data-y="center" data-voffset="85"
		                        data-start="2200"
		                        data-whitespace="nowrap"
		                        data-transform_in="y:[100%];s:500;"
		                        data-transform_out="opacity:0;s:500;"
		                        style="z-index: 5"
		                        data-mask_in="x:0px;y:0px;"><?php echo esc_html( $btn_title ); ?></a>
		                    <?php endif;?>

                </li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>
</section>
<?php endif;?>