<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package costaricabrokers
 */
$categorySelected = get_terms( array(
            'taxonomy' => 'type',
            'hide_empty' => false,
            'slug' => get_query_var('type')
            
        ) );
$category = $categorySelected[0];

get_header(); ?>
	
	<div id="primary" class="content-area">
		<div class="inner">
      <h1><?php echo $category->name; ?></h1>
			<div class="services-icons__container">

				<?php
                        $args = array(
                          'post_type' => 'real-estate',
                          'order' => 'ASC',
                          'posts_per_page' => 10,
                         'tax_query' => array(
                            array(
                              'taxonomy' => 'type',
                              'field' => 'slug',
                              'terms' => $category->slug
                            )
                          )
                          
                        );
                        $items = new WP_Query( $args );
                        
                        if( $items->have_posts() ) {
                          while( $items->have_posts() ) {
                             $items->the_post();
                           
                            ?>
                            	<div>

								<?php if ( has_post_thumbnail() ) :

                                                  $id = get_post_thumbnail_id($post->ID);
                                                  $thumb_url = wp_get_attachment_image_src($id,'medium', true);
                                                  ?>
                                                  
                                               
                                                
                                              <?php endif; ?>
                                              <img src="<?php echo $thumb_url[0] ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>">

								<h3 class="services-icons__item__title"> <?php the_title(); ?></h3>
								<a class="services-icons__link" href="<?php the_permalink(); ?>"> </a>

								</div>

                                
                        
                              
                            <?php
                             
                          }
                        }
                      ?>

               </div>

		</div><!-- #main -->
	</div><!-- #primary -->
	
<?php

get_footer();
