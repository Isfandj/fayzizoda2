<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); 
$category = get_queried_object();
$current_cat_id = $category->term_id;?>

    <div scroll-spy="true" id="our-products" class="section-gray">
        <section class="banner-cat-wrapper">
            <div class="container">
                <div class="banner-inner-content">
                    <div class="row row-flex">
                        <div class="col-lg-6 banner-img-wrapper" style="background-image: url(<?php echo get_field( 'banner-cat', 'category' . '_' . $current_cat_id );?>);">
                        </div>
                        <div class="col-lg-6 banner-content-text">
                            <div class="page-header">
                                <?php
                                    the_archive_title( '<h1 class="page-title category-title-color">', '</h1>' );
                                ?>
                                <span class="cat-subtitle"> <?php echo get_field( 'prod-disc', 'category' . '_' . $current_cat_id);?></span>
                                <?php 
                                    the_archive_description( '<div class="archive-description mt-3">', '</div>' );
                                ?>
                            </div>
                            <img class="pt-4" src="<?= get_template_directory_uri('')?>/img/products/package.png">
                            <p>-Фасовка (в граммах)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-loop">
            <div class="container">
                <div class="">
                    <div class="row">
                        <h2>Все вкусы</h2>
                        <?php
                        if ( have_posts() ) : ?>
                        <div class="testimonial-slides owl-carousel mt-5">
                        <?php
                     /* Start the Loop */
                        while ( have_posts() ) : the_post();?>
                            
                                <?php get_template_part( 'template-parts/content', get_post_format() )?>
                        <?php
                        endwhile;?>
                        </div>
                        <?php
                        else :
                         get_template_part( 'template-parts/content', 'none' );
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
//get_sidebar();
get_footer();
