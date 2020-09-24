<?php
    /**
     * The template part for About page
     *
     * @package  restaurant
     */
    $section             = get_option( 'about_page_hero_section', [] );
    $section_title       = $section['section_title'] ?? '';
    $section_description = $section['section_description'] ?? '';
    $display_section     = $section['display_section'] ?? '';
    $section_bg          = $section['section_bg'] ?? '';
?>
<?php if ( is_array( $section ) && !empty( $section && !empty($display_section) ) ): ?>
<section
id="hero"
class="page-header page-header-modern page-header-background page-header-background-sm parallax"
data-plugin-parallax
data-plugin-options="{'speed': 1.5}"
data-image-src="<?php echo esc_url($section_bg); ?>">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-10 py-3 mb-3 text-color-light section_title">
                    <?php echo wp_kses_post( $section_title ); ?>
                </h1>
                <div class="section_description"> 
                    <?php echo wp_kses_post( $section_description ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>