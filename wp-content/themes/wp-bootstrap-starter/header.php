<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
    $imgID = get_field('banner_image');
$imgSize = "large"; // (thumbnail, medium, large, full or custom size)
$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
$image = get_field('thumb');
?>

<div id="page" class="site">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <!-- Main Header Area Start -->
    <?php if(is_single()): ?>
        <?php //if( get_field('banner_image')):?>
        <div class="header-area" style="background-image: url('<?php echo $imgArr[0];?>')">
           <?php //else:?>
           <!-- <div class="header-area"> -->
               <?php //endif; ?>
               <?php else:?>
                      <div class="header-area">
                   <?php endif;?>
                   <div class="cbp-af-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <!--<a href="#top">-->
                                        <!--                            <div class="navbar-brand">-->
                                            <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                                 <h1>

                                                    <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                              </h1>

                                          </a>
                                          <?php else : ?>
                                            <h1>


                                             <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                                         </h1>
                                     <?php endif; ?>

                                 </div>
                             </div>
                             <div class="col-lg-9 col-md-9">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location'    => 'primary',
                                    'container'       => 'div',
                                    'container_id'    => 'main-menu-1',
                                    'container_class' => 'main-menu navbar-collapse justify-content-end',
                                    'menu_id'         => false,
                                    'menu_class'      => '',
                                    'depth'           => 3,
                                    'items_wrap'      => '<ul id="navigation">%3$s</ul>',
                                            //'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                    'walker'          => new wp_bootstrap_navwalker()
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="container"><div class="responsive-menu-wrap"></div></div>
                <!-- Mobile Menu Area End -->
                </div>
                <!-- Main Header Area End -->
                <?php if(is_single()){
                  echo '	<div id="content" class="site-content single-content">';
              }else{
                 echo '	<div id="content" class="site-content">';
             }
             ?>	


             <div class="">
                 <div class="">
                 <?php endif; ?>
