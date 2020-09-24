<div class="container">

    <div class="row pt-2">
        <div class="col">
            <div class="blog-posts single-post mt-5">

                <article class="post post-large blog-single-post">

                    <div class="post-date">
                        <span class="day"><?php echo get_the_date('d'); ?></span>
                        <span class="month"><?php echo get_the_date( 'M' ); ?></span>
                    </div>

                    <div class="post-content">

                        <h1 class="mb-3">
                            <?php the_title(); ?>
                        </h1>

                        <div class="post-meta">
                            <span><i class="fa fa-user"></i> By <?php the_author_posts_link();?> </span>
                            &nbsp;
                            <span>
                                <i class="fa fa-folder"></i>&nbsp;
                                <a href="#">Lifestyle</a>,&nbsp;
                                <a href="#">Design</a> 
                            </span>
                            &nbsp;
                            <span>
                                <i class="fa fa-comments"></i>&nbsp;
                                <a href="#">
                                    <?php echo get_comment_count(get_the_ID())['all'];?>&nbsp;
                                    <?php _e('Comments', 'restaurant');?></a>
                            </span>
                        </div>

                        <img src="<?php the_post_thumbnail_url('large');?>" class="img-fluid float-right mb-3 mb-1 ml-4" alt="" style="width: 360px;">

                        <div>
                            <?php the_content(); ?>
                        </div>

                        <div class="pt-2 pb-1">
                           <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_pinterest_pinit"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                            <!-- AddThis Button END -->
                        </div>

                        <div class="post-block post-author mt-5 clearfix">
                            <h4 class="mt-5 mb-3"><?php _e( 'Author', 'restaurant' );?></h4>
                            <div class="img-thumbnail d-block">
                                <a href="blog-post.html">
                                    <?php echo get_avatar(get_the_author_meta('ID'));?>
                                </a>
                            <p>
                                <strong class="name mb-3">
                                    <?php the_author(); ?>
                                </strong>
                            </p>
                            <p class="mt-1">
                                <?php the_author_meta('description');?>
                            </p>
                            </div>
                        </div>

                        <div class="post-block post-comments clearfix">
                            <h4 class="mt-5 mb-3">Comments</h4>

                            <?php wp_list_comments([], get_comments(['post_id'=> get_the_ID()])); ?>

                        </div>

                        <div class="post-block post-leave-comment mb-5">
                            <h4 class="mt-4 mb-3">
                                <?php _e( 'Leave a Comment', 'restaurant' );?>
                            </h4>

                            <?php 
                            echo comment_form([
                                'title_reply' => '',
                            ]);
                             ?>
                        </div>

                    </div>
                </article>

            </div>
        </div>
    </div>

</div>