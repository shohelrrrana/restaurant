<?php
    /**
     * The header for our theme
     *
     * @package restaurant
     */

$menu_class = Theme\Setup\Menus::get_instance();
$primary_menu_items = wp_get_nav_menu_items( 'primary-menu' );
?>
<!--header start-->
<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                ?>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php echo get_bloginfo( 'blogname' ); ?>
                </a>
                <?php
                    }
                ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul id="menu" class="navbar-nav ml-auto">
                    <?php if ( is_array( $primary_menu_items ) && !empty( $primary_menu_items ) ): ?>
                        <?php
                            foreach ( $primary_menu_items as $menu_item ):
                                $child_menu_items = $menu_class->get_child_menu_items( $primary_menu_items, $menu_item->ID );
                            ?>
                            <?php if ( empty( $child_menu_items ) && intval( $menu_item->menu_item_parent ) === 0 ): ?>
                                <li class="nav-item">
                                    <a href="<?php echo esc_url( $menu_item->url ); ?>" class="nav-link" >
                                        <?php echo esc_html( $menu_item->title ); ?>
                                    </a>
                                </li>
                            <?php endif?>
                            <?php if ( !empty( $child_menu_items ) ): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo esc_html( $menu_item->title ); ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ( $child_menu_items as $child_menu_item ): ?>
                                            <li class="nav-item">
                                                <a href="<?php echo esc_url( $child_menu_item->url ); ?>" class="nav-link">
                                                    <?php echo esc_html( $child_menu_item->title ); ?>
                                                </a>
                                            </li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                            <?php endif;?>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
</header>