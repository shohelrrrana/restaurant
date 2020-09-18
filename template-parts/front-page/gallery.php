<?php
    /**
     * The template part for Front page
     *
     * @package  restaurant
     */
    $section = get_option( 'front_page_gallery_section', [] );
    if ( empty( $section ) ) {
        return;
    }
    $section_title       = $section['section_title'] ?? '';
    $section_description = $section['section_description'] ?? '';
    $gallery_images      = $section['gallery_images'] ?? [];
?>
<section id="gallery" class="pt-3 pb-3">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h4 class="mt-4 mb-2 section-title text-center">
                    <?php echo wp_kses_post( $section_title ); ?>
                </h4>
                <div class="section-description  text-center">
                    <?php echo wp_kses_post( $section_description ); ?>
                </div>

                <hr class="custom-divider">

                <?php if(!empty($gallery_images)): ?>
                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="masonry-loader masonry-loader-showing">
                        <div class="masonry gallery-images" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">

                            <?php
                                $i = 0;
                                foreach ( $gallery_images as $image ):
                                    $i++;
                                    $image_id  = $image['image'] ?? '';
                                    $image_url = wp_get_attachment_image_url( $image_id, 'large' );
                                    $large = '';
                                    if($i === 2 || $i === 8){
                                        $large = 'w2';
                                    }
                                ?>
	                            <div class="masonry-item  <?php echo esc_attr($large); ?>">
	                                <span class="thumb-info thumb-info-centered-icons thumb-info-no-borders">
	                                    <span class="thumb-info-wrapper">
	                                        <img src="<?php echo esc_url($image_url); ?>" class="img-fluid" alt="">
	                                        <span class="thumb-info-action thumb-info-action-custom">
	                                            <a href="<?php echo esc_url( $image_url ); ?>">
	                                                <span class="thumb-info-icon-custom"></span>
	                                            </a>
	                                        </span>
	                                    </span>
	                                </span>
	                            </div>
                                <?php endforeach;?>


                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>