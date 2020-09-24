<?php
    /**
     * The header for our theme
     *
     * @package restaurant
     */

    use Theme\Setup\Menus;
    $primary_menu_items = wp_get_nav_menu_items( 'primary-menu' );
?>
<!--header start-->
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">

        <?php get_template_part( 'template-parts/header/header-top' );?>

        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <?php
                                if ( has_custom_logo() ):
                                    $custom_logo_id  = get_theme_mod( 'custom_logo' );
                                    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'medium' );
                                ?>
                                <a href="<?php echo esc_url( site_url() ); ?>">
                                    <img alt="Logo" width="116" height="50" data-sticky-width="82" data-sticky-height="36"
                                    src="<?php echo esc_url( $custom_logo_url ); ?>">
                                </a>
                                <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <?php
                                        // if ( has_nav_menu( 'primary-menu' ) ) {
                                        //     wp_nav_menu( [
                                        //         'menu_class'     => 'nav nav-pills',
                                        //         'menu_id'        => 'mainNav',
                                        //         'theme_location' => 'primary-menu',
                                        //     ] );
                                        // }
                                    ?>
                                    <?php if ( !empty( $primary_menu_items ) ): ?>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <?php foreach ( $primary_menu_items as $menu_item ): ?>
                                        <li>
                                            <a class="nav-link                                                                                                                                                                                                                                                         <?php echo Menus::is_current_menu( $menu_item ) ? 'active' : ''; ?>"
                                            href="<?php echo esc_html( $menu_item->url ); ?>">
                                                <?php echo esc_html( $menu_item->title ); ?>
                                            </a>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                    <?php endif;?>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>