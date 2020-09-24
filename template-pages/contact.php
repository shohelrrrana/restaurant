<?php
/**
 * Template Name: Contact
 *
 * @package restaurant
 */
get_header();
?>

<div role="main" class="main contact">
    <?php
       get_template_part( '/template-parts/contact-page/hero' ); 
       get_template_part( '/template-parts/contact-page/contact-info' ); 
    ?>
</div>

<?php
get_footer();
?>