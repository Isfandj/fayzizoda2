<?php
/**
* The template for displaying front page
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WP_Bootstrap_Starter
*/
get_header();?>
<section class="main-bg">
    <div class="container ">
                        <div class="row">
                            <?php
                            if(is_page()):
                               $currentLanguage  = get_bloginfo('language');
                               $currentLang = get_bloginfo('language');
                               if ( $currentLanguage == "ru-RU" ) :?>
                                 <div class="top-area text-center">
                                    <h1><?php the_field('field_6036ef08b7245'); ?></h1>
                                    <p><?php the_field('field_6036ef10b7246'); ?></p>
                                    <!--<a data-scroll href="http://fayzizoda.tulpor.uz/o-nas/" class="btn">Читать далее</a>-->
                                </div>
                                <?php
                                ?>
                                <?php
                                elseif ( $currentLanguage == "en-US" ): ?>
                                    <div class="top-area text-center">
                                     <h1><?php the_field('field_6036eec9b7241'); ?></h1>
                                     <p><?php the_field('field_6036eee9b7242'); ?></p>
                                     <!--<a data-scroll href="http://fayzizoda.tulpor.uz/about-company/" class="btn">Learn More</a>-->
                                 </div>
                                 <?php else:?>
                                    <div class="top-area text-center">
                                     <h1><?php the_field('field_6036eef4b7243'); ?></h1>
                                     <p><?php the_field('field_6036ef02b7244'); ?></p>
                                     <!--<a data-scroll href="http://fayzizoda.tulpor.uz/kompaniya-haqida/" class="btn">Ko'proq ma'lumot olish</a>-->
                                 </div>
                                 <?php
                             endif;
                             elseif(is_archive()):?>
                                <div class="top-area text-center">
                                    <h1><?php the_archive_title();?></h1>
                                </div>
                                <?php else: ?>
                                    <div class="top-area text-center">
                                        <h1><?php the_title();?></h1>
                                    </div>
                                <?php endif; ?>    
                            </div>
                        </div>
                    
</section>

   <div scroll-spy="true" id="our-products" class="chipsofic-content-block our-product">
        <div class="container">
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
    // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
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
<?php get_footer();