<?php
/**
 *
 * Template Name: Main Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
get_header();
?>
        <!-- Choose Our Chips Area Start -->
        <div scroll-spy="true" id="our-products" class="chipsofic-content-block section-gray">
            <div class="container">
              <div class="row">
                 <div class="col-lg-12">
                       <div class="section-title text-center">
                            <h1><?php the_field( 'subheading1' ); ?></h1>
                            <div class="chipsofic-subtitle"><?php the_field( 'text_1' ); ?></div>
                       </div>
                   </div>
                </div>

               <div class="choose-our-chips-content-area text-center wow fadeInUp">
                    <div class="row">
                    <?php
						$news_cat_ID = get_cat_ID( 'News' ); 
$news_cats   = get_categories( "parent=$news_cat_ID" );
$news_query  = new WP_Query;

foreach ( $news_cats as $news_cat ) :
    $news_query->query( array(
		'order' => 'ASC',
                        		'orderby' => 'date',
                        			'post_type' => 'post',
        'cat'                 => $news_cat->term_id,
        'posts_per_page'      => 1,
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
    ));
                        $args = array(
                        		'order' => 'ASC',
                        		'orderby' => 'date',
                        			'post_type' => 'post',
                        			'posts_per_page' => -1
                        			);
                        		$loop = new WP_Query( $args );
                        		if ( $news_query->have_posts() ) {
                        			while ( $news_query->have_posts() ) : $news_query->the_post();?>
                        						<?php	//wc_get_template_part( 'content', 'product' );?>
                                                <div class="col-md-6 col-lg-3 single-chips-item">
                                                <div class="post-thumbnail">
                                                		<?php the_post_thumbnail(array('150','205')); ?>
				
                                                	</div>
                            <a href="<?php the_permalink();?>"><?php the_title( '<h3 class="product_title entry-title">', '</h3>' );?></a>
                                                   <div class="pricing"><span>
													    <?php
									$price = the_field('price');
									if($price){
									echo 'Price: '.$price;
									}
													   ?> 
													   </span>
                                                   </div>
                                                  <?php
                                                  the_excerpt();
                                                  ?>
                                                   <?php  ?>
                                                    <!--<a class="btn chipsofic-small-btn" data-scroll href="#purchase-now">
														Orer now
														</a>-->
                                                </div>
                                                <?php
                                                			endwhile;
                                                		} else {
                                                			echo __( 'No products found' );
                                                		}
                                                		wp_reset_postdata();
                        endforeach;                        	
						?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Our Chips Area End -->

        <!-- Our Process Area Start -->
        <div scroll-spy="true" class="chipsofic-content-block process-block">
            <div class="container">
              <div class="row">
                 <div class="col-lg-12">
                       <div class="section-title text-center">
                            <a onclick="changeVideo('FvKuG1SggGk')"><i class="fa fa-play-circle"></i></a>
                            <h1><?php the_field( 'subheading2' ); ?></h1>
                            <div class="chipsofic-subtitle"><?php the_field( 'text_2' ); ?></div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <!-- Video Popup -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-label="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe id="iframeYoutube" class="embed-responsive-item" width="816" height="459" src="#"></iframe>
					
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Our Process Area End -->

        <!-- Gallery Area Start -->
        <div scroll-spy="true" id="pic-gallery" class="chipsofic-content-block gallery-block">
            <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                           <div class="section-title text-center">
                                <h1><?php the_field('main-page-gallery-title')?></h1>
                                <div class="chipsofic-subtitle"><?php the_field('main-page-gallery-subtitle');?></div>
                           </div>
                       </div>
                    </div>
            </div>
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row wow fadeInUp">
                        <!-- Gallery 1st Row Start -->
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 01" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-01.png">
                            <i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-01.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 02" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-02.png"><i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-02.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 03" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-03.png"><i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-03.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 04" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-04.png"><i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-04.png" alt=""></a>
                        </div>
                        <!-- Gallery 1st Row End -->

                        <!-- Gallery 2nd Row Start -->
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 05" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-05.png"><i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-05.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 06" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-06.png"><i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-06.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-07.png"><i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-07.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a title="Lorem Ipsum 08" class="gallery-lightbox" href="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-08.png"><i class="fa fa-plus"></i> <img src="<?php echo get_stylesheet_directory_uri();?>/img/gallery-img-08.png" alt=""></a>
                        </div>
                        <!-- Gallery 2nd Row End -->
						<?php if ( have_rows( 'gallery_products' ) ) : ?>
	<?php //while ( have_rows( 'gallery_products' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'image_1' ) ) : ?>
			<div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_1' ); ?>"><i class="fa fa-plus"></i> 
				<img src="<?php the_sub_field( 'image_1' ); ?>" />
				</a></div>
				<?php endif ?>
		<?php if ( get_sub_field( 'image_2' ) ) : ?>
			<div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_2' ); ?>"><i class="fa fa-plus"></i> 
				<img src="<?php the_sub_field( 'image_2' ); ?>" />
				</a></div>
			<?php endif ?>
		<?php if ( get_sub_field( 'image_3' ) ) : ?>
			<div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_3' ); ?>"><i class="fa fa-plus"></i> 
				<img src="<?php the_sub_field( 'image_3' ); ?>" />
				</a></div>
				<?php endif ?>
		<?php if ( get_sub_field( 'image_4' ) ) : ?>
     		<div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_4' ); ?>"><i class="fa fa-plus"></i> 
				<img src="<?php the_sub_field( 'image_4' ); ?>" />
				</a></div>
		<?php endif ?>
		<?php if ( get_sub_field( 'image_5' ) ) : ?>
			<div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_5' ); ?>"><i class="fa fa-plus"></i> 
				<img src="<?php the_sub_field( 'image_5' ); ?>" />
				</a></div>
		<?php endif ?>
		<?php if ( get_sub_field( 'image_6' ) ) : ?>
			<div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_6' ); ?>"><i class="fa fa-plus"></i> 
				<img src="<?php the_sub_field( 'image_6' ); ?>" />
				</a></div>
		<?php endif ?>
		<?php if ( get_sub_field( 'image_7' ) ) : ?>
		    <div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_7' ); ?>"><i class="fa fa-plus"></i> 
				 <img src="<?php the_sub_field( 'image_7' ); ?>" />
				</a>
				 </div>
		<?php endif ?>
		<?php if ( get_sub_field( 'image_8' ) ) : ?>
			<div class="col-md-6 col-lg-3">
			 <a title="Lorem Ipsum 07" class="gallery-lightbox" href="<?php the_sub_field( 'image_8' ); ?>"><i class="fa fa-plus"></i><img src="<?php the_sub_field( 'image_8' ); ?>" />
				</a>
				 </div>
		<?php endif ?>
	<?php //endwhile; ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->

        <!-- Our Progress Area Start -->
        <div scroll-spy="true" class="chipsofic-content-block counter-block">
            <div class="container">
               <div class="row">
                 <div class="col-lg-12">
                       <div class="section-title text-center">
                            <h1><?php the_field( 'progress_title' ); ?></h1>
                            <div class="chipsofic-subtitle"><?php the_field( 'progress_subtitle' );?></div>
                       </div>
                   </div>
                </div>

               <div class="chipsofic-counter-area text-center">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                           <h2><span class="counter"><?php the_field( 'yearly_value' ); ?></span></h2>
                            <p><?php the_field( 'yearly_customer' ); ?></p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <h2><span class="counter"><?php the_field( 'sell_pel_value' ); ?></span></h2>
                            <p><?php the_field( 'sell_per_year' ); ?></p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <h2><span class="counter"><?php the_field( 'staff_value' ); ?></span></h2>
                            <p><?php the_field( 'staff' ); ?></p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <h2><span class="counter"><?php the_field( 'showroom_value' ); ?></span></h2>
                            <p><?php the_field( 'showroom' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Progress Area End -->
                    <?php
//get_sidebar();
get_footer();