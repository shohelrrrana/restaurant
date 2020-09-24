<?php
    /**
     * The main template file
     *
     * @package restaurant
     */

    get_header();
?>

<div role="main" class="main">
    <?php get_template_part( '/template-parts/blog/hero' );?>
    <section class="section section-default mb-0">
        <div class="container pb-5">
            <?php
                if ( have_posts() ) {
                    while(have_posts()){
                        the_post();
                        get_template_part( '/template-parts/content' );
                        if(is_home() && !is_single()){
                            echo paginate_links();
                        }
                    }
                }else{
                    get_template_part( '/template-parts/content-none' );
                }
            ?>
        </div>
    </section>
</div>

<?php
get_footer();
