<?php
/**
 * Template Name: Menu
 *
 * @package restaurant
 */

get_header();

get_template_part( '/template-parts/menu-page/hero' );
get_template_part( '/template-parts/menu-page/full-menu' );
get_template_part( '/template-parts/common/special-menu' );

get_footer();
?>