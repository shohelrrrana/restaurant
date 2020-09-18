<?php
    /**
     * The header for our theme
     *
     * @package restaurant
     */

    $menu_class         = Theme\Setup\Menus::get_instance();
    $primary_menu_items = wp_get_nav_menu_items( 'primary-menu' );
?>
<!--header start-->
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">

        <?php get_template_part('template-parts/header/header-top'); ?>

        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="Porto" width="116" height="50" data-sticky-width="82" data-sticky-height="36" src="https://portotheme.com/html/porto/8.0.0/img/demos/restaurant/logo-restaurant.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="demo-restaurant.html">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-restaurant-menu.html">
                                                Menu
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-restaurant-about.html">
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-restaurant-press.html">
                                                Press
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-restaurant-contact.html">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>