<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="testimonial-slide-item-table product-card">
    <div class="testimonial-slide-item-tablecell"> 
        <div class="row">
            <div class="col-md-12 padding-zero ">
                <a href="<?=esc_url( get_permalink() );?>">
                    <div class="post-thumbnail">
                        <img src="<?=get_the_post_thumbnail_url()?>">
                    </div>
                </a>
                <div class="product-inner-content" style="background-color:  <?php echo  get_field( 'color-prod');?> !important">
                    <a href="<?=esc_url( get_permalink() )?>">
                        <?php the_title( '<h3 class="product_title entry-title">', '</h3>');?> 
                    </a>
                    <p class="cat-disc">
                        <?php echo the_field( 'taste-text');?>
                    </p>
                    <a href="<?=get_category_link($cat->term_id);?>" class="btn btn-cat-carousel">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</div>
