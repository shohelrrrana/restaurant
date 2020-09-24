<?php
    /**
     * The template part for Menu page
     *
     * @package restaurant
     */
    $args = [
        'taxonomy'   => 'food_category',
        'hide_empty' => true,
    ];
    $food_categories = get_terms( $args );
    if ( empty( $food_categories ) && !is_array( $food_categories ) ) {
        return;
    }
?>
<div class="tab-pane" id="dinner">
    <?php
        foreach ( $food_categories as $food_cat ):
            $args = [
                'post_type'      => 'food_menu',
                'posts_per_page' => -1,
                'meta_query'     => [
                    [
                        'key'     => 'food_type',
                        'value'   => 'dinner',
                        'compare' => 'AND',
                    ],
                ],
                'tax_query'      => [
                    [
                        'taxonomy' => 'food_category',
                        'field'    => 'term_id',
                        'terms'    => $food_cat->term_id,
                    ],
                ],
            ];
            $food_menus = new WP_Query( $args );
            if ( $food_menus->have_posts() ):
        ?>
	            <div class="row">
	                <div class="col-lg-12">
	                    <h4 class="menu-title text-center">
	                        <?php echo esc_html( $food_cat->name ); ?>
	                    </h4>
	                </div>
	                </div>
	            <div class="row">
	                <?php
                            while ( $food_menus->have_posts() ):
                                $food_menus->the_post();
                            ?>
		                    <div class="col-lg-4">
		                        <div class="menu-item">
		                            <span class="menu-item-price">
		                                $<?php echo esc_html( carbon_get_post_meta( get_the_ID(), 'price' ) ); ?>
		                            </span>
		                            <h4><?php the_title();?></h4>
		                            <div><?php the_content();?></div>
		                        </div>
		                    </div>
		                <?php
                                endwhile;
                                wp_reset_query();
                            ?>
	            </div>
	    <?php
            endif;
            endforeach;
        ?>
</div>