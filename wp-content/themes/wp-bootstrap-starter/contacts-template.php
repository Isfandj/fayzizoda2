<?php
/**
 * The template for displaying all pages
 * Template name: Contacts template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */





get_header(); ?>
<!-- Contact Area Start -->
<div scroll-spy="true" id="contact-us" class="chipsofic-content-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h1><?php the_field('contact_title')?></h1>
                    <div class="chipsofic-subtitle"><?php the_field('contact_subtitle')?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info-block">
                    <p>
                        <?php the_field('contact_info_block');?>
                    </p>
                    <ul>
                        <li>
                            <i class="fa fa-envelope"></i> <a href="mailto:<?php echo the_field('field_6032adda752aa', 904)?>"><?php echo the_field('field_6032adda752aa', 904)?></a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i> <a href="tel:<?php the_field('field_6032b255b6526', 904);?>"><?php the_field('field_6032b255b6526', 904);?> &nbsp;<?php the_field('field_6032b25bb6527', 904);?></a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <?php 
                            $currentLang = get_locale();
                            if ( $currentLang == "ru_RU" ) :
                              the_field('field_6032bac36a0a1', 904);
                            elseif ( $currentLang == "en_US" ):
                              the_field('field_6032b25fb6528', 904);
                            elseif ( $currentLang == "uz_UZ" ):
                              the_field('field_6032bb7c7a673', 904);
                            endif;?>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form wow fadeInRight">
                   <?php					 $currentLanguage  = get_bloginfo('language');
                   $currentLang = get_bloginfo('language');
                   if ( $currentLanguage == "ru-RU" ) :
                    echo  do_shortcode('[cf7form cf7key="contact-form-ru"]');
                    elseif ( $currentLanguage == "en-US" ): 
                    echo  do_shortcode('[cf7form cf7key="contact-form-en"]');
                    else:
                    echo  do_shortcode('[cf7form cf7key="contacts-form-uz"]');
                    endif;?>
                </div>
            </div>
            <div class="col-lg-12">
                <div scroll-spy="true" id="our-location">
                    <div class="map">
                        <div class="gmap">
                            <div id="map1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48020.815075481!2d69.33067853182983!3d41.21521186344108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDEzJzMzLjgiTiA2OcKwMTknMTAuNCJF!5e0!3m2!1sru!2sua!4v1612199463562!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->
<?php
//get_sidebar();
get_footer();