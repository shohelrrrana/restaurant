<?php
    /**
     * The template part for Front page
     *
     * @package  restaurant
     */
    $section = get_option( 'front_page_blog_team_section', [] );
    if ( empty( $section ) ) {
        return;
    }
    $blog_title       = $section['blog_title'] ?? '';
    $blog_description = $section['blog_description'] ?? '';
    $posts            = $section['posts'] ?? [];
    $team_title       = $section['team_title'] ?? '';
    $team_description = $section['team_description'] ?? '';
    $teams            = $section['teams'] ?? [];
?>
<section id="blog-team">
    <div class="container-fluid">
        <div class="row mt-5">

            <div class="col-lg-6 p-0">
                <section class="section section-quaternary section-no-border h-100 mt-0">
                    <div class="row justify-content-end">
                        <div class="col-half-section col-half-section-right">
                            <div class="text-center">
                                <h4 class="mt-3 mb-0 heading-dark blog-title text-center">
                                    <?php echo wp_kses_post( $blog_title ); ?>
                                </h4>
                                <div class="mb-1 blog-desciption text-center">
                                    <?php echo wp_kses_post( $blog_description ); ?>
                                </div>

                                <hr class="custom-divider m-0">
                            </div>

                            <?php if ( is_array( $posts ) && !empty( $posts ) ): ?>
                            <div class="owl-carousel owl-theme show-nav-title mt-5 mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 5000}">

                                <?php
                                    $args = [
                                        'numberposts' => 99,
                                        'post__in'    => $posts,
                                        'orderby'     => 'post__in',
                                        'order'       => 'ASC',
                                    ];
                                    $posts = get_posts( $args );
                                    $i     = 0;
                                    foreach ( $posts as $post ):
                                        $i++;
                                        if ( $i % 2 !== 0 ) {
                                            echo '<div>';
                                        }
                                    ?>
	                                        <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom mb-3">
	                                            <div class="thumb-info-side-image-wrapper p-0">
	                                                <img src="<?php echo esc_url( get_the_post_thumbnail_url( $post->ID, 'large' ) ); ?>" class="img-fluid" alt="" style="width: 165px;">
	                                            </div>
	                                            <div class="thumb-info-caption">
	                                                <div class="thumb-info-caption-text">
	                                                    <h4 class="mb-0 mt-1 heading-dark">
	                                                        <?php echo esc_html( $post->post_title ); ?>
	                                                    </h4>
	                                                    <p class="text-3 pt-3 pb-1">
	                                                        <?php echo esc_html( substr( $post->post_excerpt, 0, 105 ) ); ?>
	                                                    </p>
	                                                    <a class="mt-2" href="<?php echo esc_url( get_post_permalink( $post ) ); ?>">
	                                                        <?php _e( 'Read More', 'restaurant' );?>
	                                                        <i class="fa fa-long-arrow-right"></i>
	                                                    </a>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    <?php
                                                if ( $i % 2 === 0 ) {
                                                    echo '</div>';
                                                }
                                            endforeach;
                                        ?>

                            </div>
                        <?php endif;?>
                    </div>
                </section>
            </div>

            <div class="col-lg-6 p-0">
                <section class="section section-tertiary section-no-border h-100 mt-0">
                    <div class="row">
                        <div class="col-half-section">
                            <div class="text-center">
                                <h4 class="mt-3 mb-0 heading-dark team-title text-center">
                                    <?php echo wp_kses_post( $team_title ); ?>
                                </h4>
                                <div class="mb-1 team-description">
                                    <?php echo wp_kses_post( $team_description ); ?>
                                </div>

                                <hr class="custom-divider m-0">
                            </div>

                            <?php if ( is_array( $teams ) && !empty( $teams ) ): ?>
                            <div class="owl-carousel owl-theme show-nav-title mt-5 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">

                                <?php foreach ( $teams as $team ):
                                        $image_id  = $team['image'] ?? '';
                                        $image_url = wp_get_attachment_image_url( $image_id, 'medium' );
                                        $name      = $team['name'] ?? '';
                                        $position  = $team['position'] ?? '';
                                    ?>
	                                <div>
	                                    <div class="thumb-info thumb-info-no-zoom thumb-info-no-borders mb-0">
	                                        <div class="thumb-info-side-image-wrapper p-0">
	                                            <img src="<?php echo esc_url($image_url); ?>" class="img-fluid" alt="">
	                                        </div>
	                                        <div class="thumb-info-caption">
	                                            <div class="thumb-info-caption-text thumb-info-caption-text-custom text-center">
	                                                <h4 class="mb-0 mt-1 heading-dark text-center">
                                                        <?php echo esc_html( $name ); ?>
                                                    </h4>
	                                                <p class="text-3 p-0 m-0 mb-2">
                                                        <?php echo esc_html( $position ); ?>
                                                    </p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <?php endforeach;?>

                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</section>