<?php
/**
 * The header top for our theme
 *
 * @package restaurant
 */

$header_top           = get_option( 'theme_header_top', [] );
$display_header_top   = $header_top['display'] ?? '';
$header_top_left_text = $header_top['left'] ?? '';
$header_top_right_text = $header_top['right'] ?? '';
?>
<?php if(is_array($header_top) && !empty($header_top) && $display_header_top): ?>
<div id="header-top" class="header-top border-bottom-0 bg-color-secondary">
    <div class="container">
        <div class="header-row py-2">
            <div class="header-column justify-content-center justify-content-md-start">
                <div class="header-row">
                    <nav class="header-nav-top">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <span class="text-light opacity-7 pl-0">
                                    <?php echo wp_kses_post($header_top_left_text); ?>
                                </span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-column justify-content-end d-none d-md-flex">
                <div class="header-row">
                    <nav class="header-nav-top">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <?php echo wp_kses_post( $header_top_right_text ); ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>