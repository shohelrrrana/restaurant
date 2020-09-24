<?php
/**
 * Template Name: About
 *
 * @package restaurant
 */
get_header();
?>

<div role="main" class="main about">
    <?php
       get_template_part( '/template-parts/about-page/hero' ); 
       get_template_part( '/template-parts/about-page/about-content' ); 
       get_template_part( '/template-parts/about-page/contact-info' ); 
    ?>
</div>

<?php
get_footer();
?>