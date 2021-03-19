<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( is_active_sidebar( 'footer-1' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-black'; } ?>">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="com-md-12 col-lg-12"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php }
