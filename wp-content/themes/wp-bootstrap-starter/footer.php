<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->
<footer id="colophon" class="site-footer " role="contentinfo">
 <div class="site-footer">
  <!-- Footer Top Area Start -->
  <div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-widget">
                        <!-- <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img width="280px" src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?> -->
                        <!--<h3 class="footer-logo"><img src="assets/img/footer-logo.png" alt="Footer Logo"></h3>-->
                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'foot-menu',
                            'container'       => 'div',
                            'container_id'    => 'footer-main-nav',
                            'container_class' => 'footer-menu navbar-collapse justify-content-center',
                            'menu_id'         => false,
                            'menu_class'      => '',
                            'depth'           => 3,
                        ));

                        ?>
                        <p><a href="mailto:fayzizodafoods@gmail.com"><i class="fa fa-envelope"></i> <?php echo the_field("field_6032adda752aa", 904) ?></a> | <a href="tel:+998909650084"><i class="fa fa-phone"></i> 
                            <?php echo the_field("field_6032b255b6526", 904) ?> 
                            <?php echo the_field("field_6032b25bb6527", 904) ?></a> | <i class="fa fa-map-marker"></i>
                            <?php 
                            $currentLang = get_locale();
                            if ( $currentLang == "ru_RU" ) :
                              the_field('field_6032bac36a0a1', 904);
                          elseif ( $currentLang == "en_US" ):
                              the_field('field_6032b25fb6528', 904);
                          elseif ( $currentLang == "uz_UZ" ):
                              the_field('field_6032bb7c7a673', 904);
                          endif;
                          ?>
                      </p>

                      <div class="footer-social">
                        <ul>
                            <li><a href="http://facebook.com" target="_blank">
                               <i class="fa fa-facebook-square"></i>

                           </a></li>
                           <li><a href="https://instagramm.com" target="_blank">
                               <i class="fab fa-instagram-square"></i>
                           </a></li>
                           <li><a href="https://t.me/Mr_Fayzizoda" target="_blank">
                               <i class="fa fa-telegram"></i>
                           </a></li>
                           <li><a href="https://www.twitter.com/" target="_blank">
                               <i class="fa fa-twitter-square"></i>
                           </a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- Footer Top Area End -->

<!-- Footer Copyright Area Start -->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
               <?php get_sidebar('footer-1');?>
           </div>
       </div>
       <a data-scroll href="#top" class="go-top">Top <i class="fa fa-long-arrow-up"></i></a>
   </div>
</div>
<!-- Footer Copyright Area End -->
<div class="footer-made-by">
  <div class="container pt-2 pb-2">
    <div class="site-info">
        <a class="credits" href="http://oqila.uz" target="_blank" title="OQILA" alt="OQILA">
           <div class="col-lg-12 text-center">

               <?php get_template_part( 'footer-widget' ); ?>
           </div>
           <?php //echo esc_html__('Разработка сайта - OQILA-logo(link to oqila.uz','wp-bootstrap-starter'); ?>
       </a>
   </div><!-- close .site-info -->
</div>
</div>
</footer>
</div><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
