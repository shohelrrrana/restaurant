<div class="row">
    <div class="col">
        <div class="thumb-info thumb-info-side-image thumb-info-no-zoom thumb-info-no-borders thumb-info-blog-custom mt-5">
            <div class="thumb-info-side-image-wrapper p-0 d-none d-sm-block">
                <a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mr-3" alt="" style="width: 235px;">
                </a>
            </div>
            <div class="thumb-info-caption">
                <div class="thumb-info-caption-text">
                    <h2 class="mb-3 mt-1">
                        <a title="" class="text-dark" href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
                    </h2>
                    <span class="post-meta">
                        <span><?php echo get_the_date('F d, Y');?> | 
                            <?php the_author_posts_link(); ?>
                        </span>
                    </span>
                    <p class="text-3 p-0 pl-md-3">
                        <?php the_excerpt();?>
                    </p>
                    <?php if(is_home() && !is_singular()): ?>
                    <a class="mt-3" href="<?php the_permalink();?>">
                        <?php _e('Read More', 'restaurant');?> 
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>