<?php
/**
 * The template for displaying Woocommerce Product
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
get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<div scroll-spy="true" id="our-products" class="site-main chipsofic-content-block section-gray" role="main">
<!-- Choose Our Chips Area Start -->
            <div class="container">
              <div class="row">
                 <div class="col-lg-12">
                       <div class="section-title text-center">
                            <h1>Choose Your Flavor</h1>
                            <div class="chipsofic-subtitle">Choose any of our chips which better suits your needs</div>
                       </div>
                   </div>
                </div>

               <div class="choose-our-chips-content-area text-center wow fadeInUp">
                    <div class="row">
	<?php
		$args = array(
		'order' => 'ASC',
		'orderby' => 'date',
			'post_type' => 'product',
			'posts_per_page' => -1
			);
global $woocommerce;
global $post;
$currency = get_woocommerce_currency_symbol();
$price = get_post_meta( get_the_ID(), '_regular_price', true);
$sale = get_post_meta( get_the_ID(), '_sale_price', true);
		$loop = new WP_Query( $args );
		if ( have_posts() ) {
			while ( have_posts() ) : the_post();?>
						<?php	//wc_get_template_part( 'content', 'product' );?>
                        <div class="col-md-6 col-lg-3 single-chips-item">
                        <?php echo woocommerce_get_product_thumbnail('woocommerce_full_size');?>
                           <?php the_title( '<h3 class="product_title entry-title">', '</h3>' );?>
                           <div class="pricing"><span>Price:</span>
                            <?php $product = wc_get_product( get_the_ID() ); /* get the WC_Product Object */ ?>
                            <p style="font-weight: normal!important"><?php echo $product->get_price_html(); ?></p>
                           </div>

                          <?php

                          print_r(apply_filters( 'woocommerce_short_description', $post->post_excerpt ));
                          ?>
                           <?php
                                 echo apply_filters(    'woocommerce_loop_add_to_cart_link',
                                                           sprintf(
                                                               '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-scroll class="btn chipsofic-small-btn %s product_type_%s">%s</a>',
                                                               esc_url( $product->add_to_cart_url() ),
                                                               esc_attr( $product->get_id() ),
                                                               esc_attr( $product->get_sku() ),
                                                               $product->is_purchasable() ? 'add_to_cart_button' : '',
                                                               esc_attr( $product->product_type ),
                                                               esc_html( $product->add_to_cart_text() )
                                                           ),
                                                           $product
                                                       );
                                                     ?>
                        </div>
                        <?php
                        			endwhile;
                        		} else {
                        			echo __( 'No products found' );
                        		}
                        		wp_reset_postdata();
                        	?>
                    </div>
                </div>
            </div>
        <!-- Choose Our Chips Area End -->
			<?php

			while ( have_posts() ) : the_post();

				//get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    //comments_template();
                endif;
			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();

