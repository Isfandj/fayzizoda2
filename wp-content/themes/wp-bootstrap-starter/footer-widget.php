<?php
if ( is_active_sidebar( 'footer-2' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-black'; } ?>">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="com-md-12 col-lg-12 link-content">
					<?php dynamic_sidebar( 'footer-2' ); ?> &nbsp;   <img width="66" height="22" src="<?php echo get_stylesheet_directory_uri();?>/img/oqila-logo.png" alt="">
                    <?php endif; ?>
                </div>
					</div>
            </div>
        </div>

<?php }