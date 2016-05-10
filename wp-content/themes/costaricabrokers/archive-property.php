<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package costaricabrokers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="inner">
			
			<?php
		        
				if ( have_posts() ) : ?>



					<header class="page-header">
						<h1 class="page-title">Vacation Rentals</h1>
						<?php
							/*the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );*/
						?>
					</header><!-- .page-header -->
					<div class="services-icons__container">
					 <?php if ( get_query_var('paged') ) {
                              $paged = get_query_var('paged');
                          } else if ( get_query_var('page') ) {
                              $paged = get_query_var('page');
                          } else {
                              $paged = 1;
                          } 
            
                          $args = array(
                            'post_type' => 'property',
                            'paged' => $paged,
                            'posts_per_page' => 9,
                            'orderby' => 'menu_order',
                            'order' => 'asc'
                            
                          );
                          $temp = $wp_query; 
                          $wp_query = null;
                          $wp_query = new WP_Query( $args );

                          if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
                              
                            

                              ?>
                          
                                     <div class="services-icons__item wow fadeIn" data-wow-delay=".2s">
					                    <span class="services-icons__item__icon ">
					                    	<?php if ( has_post_thumbnail() ) :

					                                            $id = get_post_thumbnail_id($post->ID);
					                                            $thumb_url = wp_get_attachment_image_src($id,'thumbnail', true);
					                                            ?>
					                                            
					                                             <img src="<?php echo $thumb_url[0] ?>" alt="img">           
					                                        <?php endif; ?>
					                    </span>
					                    <h3 class="services-icons__item__title"><?php the_title(); ?></h3>
					                    <p class="services-icons__item__intro"><?php the_excerpt(); ?></p>
					                    <a href="<?php the_permalink(); ?>" class="services-icons__link"></a>
					                </div>
                           
            
                                  <?php endwhile; ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
                                        
                        <?php 
                            $wp_query = null; 
                            $wp_query = $temp;  // Reset
                          ?>
				</div>
				<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
				
				<?php else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

		
		
		</div><!-- #inner -->
	</div><!-- #primary -->

<?php

get_footer();
