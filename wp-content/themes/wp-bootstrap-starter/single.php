<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="container single-product col-sm-12 col-lg-12">
		<div id="main" class="site-main" role="main" >
<div class="row">
		<?php
		while ( have_posts() ) : the_post();?>
<div class="col-md-8 col-xs-12 col-sm-12 product-thumb">

		<?php	// get_template_part( 'template-parts/content', get_post_format() ); ?>
 
	<?php 
$image = get_field('thumb');
if( get_field('thumb')):
	?>
<img width="100%" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php else:?>
	<img width="100%"  src="<?php echo get_stylesheet_directory_uri();?>/img/blog-single-img.png">
	<?php endif; ?>
			    </div>
<div class="col-md-4 col-xs-12 col-sm-12 product-descr">
	<?php the_content();?>
	<?php $prod_thumb = get_field( 'prod_thumb' ); ?>
<?php if ( $prod_thumb ) : ?>
	<img src="<?php echo esc_url( $prod_thumb['url'] ); ?>" alt="<?php echo esc_attr( $prod_thumb['alt'] ); ?>" />
<?php endif; ?>
	<?php echo '<span>'.get_field( 'packing' ).'</span>'; ?>
	</div>
<?php
		endwhile; // End of the loop.
		?>
</div>
		</div><!-- #main -->
	</section><!-- #primary -->


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
                                    the_title( '<h1 class="page-title category-title-color">', '</h1>' );
                                ?>
                                <div class="mt-5 mb-5">
                                    <?php the_content();?>
                                </div>
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
