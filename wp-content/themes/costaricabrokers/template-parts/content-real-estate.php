<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package costaricabrokers
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span><b><?php echo rwmb_meta( 'rw_location'); ?></b></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		   $photos = rwmb_meta( 'rw_property_thumb', 'type=image&size=large' ); 
		             if ( $photos ) {
		                    $i = 0;
		                ?>
		             <div class="slider">
						<div class="gallery">
		               
		                     
		                     <?php foreach ( $photos as $photo ){
		                            $i++;
		                        ?>
		                         <figure class="gallery-item">
									<img src="<?php echo $photo['url'] ?>" alt="<?php the_title();?>">
		                         </figure>
		                         
		                      
		                      <?php } 

		      
		              }
		            ?>
			            </div>
						<a class="cycle-prev" href="#">&lt;</a>
						<a class="cycle-next" href="#">&gt;</a>
						<div class="cycle-pager"></div>
					</div>
			<?php
			the_content();

			
		?>
		<div class="tabs">
			<?php if(rwmb_meta( 'rw_features')) : ?>
				<div class="tab"><input id="tab-features" checked="checked" name="tab-group-1" type="radio" /><label for="tab-features">Features</label>
				<div class="content">
					<?php echo rwmb_meta( 'rw_features'); ?>
				</div>
				</div>
			<?php endif; ?>
			<?php if(rwmb_meta( 'rw_features2')) : ?>
				<div class="tab"><input id="tab-bed" name="tab-group-1" type="radio" /><label for="tab-bed">Other Info</label>
				<div class="content">
					<?php echo rwmb_meta( 'rw_features2'); ?>
				</div>
				</div>
			<?php endif; ?>
		</div>
		
		<div class="columns columns-1">
				<?php echo rwmb_meta( 'rw_video'); ?>
					
		</div>
	</div><!-- .entry-content -->

	


</article><!-- #post-## -->
<section class="services-icons white">

        <div class="inner">
			<h2 class="txt-center">Others Properties</h2>        

            <div class="services-icons__container">
                <?php 
                   
                   if ( get_query_var('paged') ) {
                              $paged = get_query_var('paged');
                          } else if ( get_query_var('page') ) {
                              $paged = get_query_var('page');
                          } else {
                              $paged = 1;
                          } 
            
                          $args = array(
                            'post_type' => 'property',
                            'paged' => $paged,
                            'posts_per_page' => 3,
                            'orderby' => 'rand'
                            
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
        </div>
    </section>
