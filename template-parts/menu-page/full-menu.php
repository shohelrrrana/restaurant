<?php
    /**
     * The template part for Menu page
     *
     * @package restaurant
     */
    $args = [
        'taxonomy'   => 'food_category',
        'hide_empty' => false,
    ];
    $food_categories = get_terms( $args );
?>
<section id="full-menu" class="section section-default">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="tabs tabs-bottom tabs-center tabs-simple">
                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="#lunch" data-toggle="tab">
                                <?php _e( 'Lunch', 'restaurant' );?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#dinner" data-toggle="tab">
                                <?php _e( 'Dinner', 'restaurant' );?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#drink" data-toggle="tab">
                                <?php _e( 'Drinks', 'restaurant' );?>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <?php get_template_part('/template-parts/menu-page/tabs/lunch'); ?>
                        <?php get_template_part('/template-parts/menu-page/tabs/dinner'); ?>
                        <?php get_template_part('/template-parts/menu-page/tabs/drink'); ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>