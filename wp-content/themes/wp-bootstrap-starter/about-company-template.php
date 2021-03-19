<?php
/**
 * The template for displaying all pages
 * Template Name: About company
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

<!-- Welcome Area Start -->
<section class="about-us-bg">
    <div scroll-spy="true" id="about-us" class="chipsofic-content-block">
        <div class="container">
            <div class="about-us-section white-bg">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft">
                        <h1><?php the_field('about_us')?></h1>
                        <h2><?php the_field('about_title')?></h2>
                        <?php the_field('about_descr')?>
                    </div>
                    <div class="col-lg-6 wow fadeInRight">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>
                                    <i class="fa fa-ban" aria-hidden="true"></i><?php the_field('no_preservatives_title');?>
                                </h3>
                                <?php the_field('no_preservatives');?>
                            </div>
                            <div class="col-md-6">
                                <h3>
                                    <i class="fa fa-heartbeat" aria-hidden="true"></i><?php the_field('health_friendly_title');?>
                                </h3>
                                <?php the_field('health_friendly');?>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-6">
                                <h3><i class="fa fa-money" aria-hidden="true"></i><?php the_field('low_cost_title');?></h3>
                                <?php the_field('low_cost');?>

                            </div>
                            <div class="col-md-6">
                                <h3><i class="fa fa-commenting" aria-hidden="true"></i><?php the_field('support_title');?></h3>
                                <?php the_field('support');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->
<?php
//get_sidebar();
get_footer();
