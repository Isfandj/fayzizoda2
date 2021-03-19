<?php
/**
 * The template for displaying all pages
 * Template Name: Products page
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


<div scroll-spy="true" id="our-products" class=" product-wrapper our-product">
    <div class="container">
        <h2>Все продукты</h2>
        <div class="testimonial-slides owl-carousel">
            <?php
                $categories = get_categories( [
                    'taxonomy'     => 'category',
                    'type'         => 'post',
                    'child_of'     => 0,
                    'parent'       => '',
                    'orderby'      => 'name',
                    'order'        => 'ASC',
                    'hide_empty'   => 1,
                    'hierarchical' => 1,
                    'exclude'      => array(35,38,18),
                    'include'      => '',
                    'number'       => 0,
                    'pad_counts'   => false,
                    'category__not_in' => ['35']
                ] );
                foreach( $categories as $cat ):
            ?>
        <div class="testimonial-slide-item-table product-card">
            <div class="testimonial-slide-item-tablecell"> 
                <div class="row">
                    <div class="col-md-12 padding-zero">
                        <a href="<?=get_category_link($cat->term_id);?>">
                            <div class="post-thumbnail">
                            <img src="<?php echo get_field( 'img-prod', 'category' . '_' . $cat->term_id );?>">
                                    </div>
                        </a>
                        <div class="product-inner-content" style="background-color:  <?php echo  get_field( 'category_color', 'category' . '_' . $cat->term_id );?> !important">
                            <a href="<?=get_category_link($cat->term_id);?>">
                                <h3 class="product_title entry-title">
                                <?=$cat->name?>
                                </h3>
                            </a>
                            <p class="cat-disc">
                                <?php echo get_field( 'prod-disc', 'category' . '_' . $cat->term_id );?>
                            </p>
                            <a href="<?=get_category_link($cat->term_id);?>" class="btn btn-cat-carousel">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            wp_reset_postdata();
            endforeach;                         
        ?>
    </div>
</div>
</div>
 


    <?php
//get_sidebar();
    get_footer();