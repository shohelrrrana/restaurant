<?php
    /**
     * The Content File
     *
     * @package aquila
     */
?>

<article id="post-<?php the_ID()?>"<?php post_class( 'mb-5' )?>>
    <?php
    if(is_home() && !is_singular()){
        get_template_part( 'template-parts/blog/post' );
    }else if(is_singular('post')){
        get_template_part( 'template-parts/blog/single-post' );
    }else{
        get_template_part( 'template-parts/blog/post' );
    }
    ?>
</article>
