<?php
    /**
     * The header for our theme
     *
     * @package restaurant
     */
?>

<!DOCTYPE html>
<html <?php language_attributes()?> data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#e09b23', 'colorSecondary': '#344257', 'colorTertiary': '#D1E7E7', 'colorQuaternary': '#EDEADA'}">
	<head>
		<!-- Basic -->
		<meta <?php echo bloginfo( 'charset' ); ?>>
		<meta name="author" content="shohelrrrana">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<?php wp_head();?>
    </head>
    <body <?php body_class();?> data-spy="scroll" data-target="#navSecondary" data-offset="170">
    <?php wp_body_open();?>
	<body >

		<div class="body">
			
		<?php get_template_part('template-parts/header/nav'); ?>


