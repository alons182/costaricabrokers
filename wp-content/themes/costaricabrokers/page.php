<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package costaricabrokers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="inner">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<h3 class="services-title">Specialty Concierge</h3>
		    <section class="services-box" id="services">

		              <?php //rewind_posts(); 

               
                  
		                $args = array(
		                  'post_type' => 'page',
		                  'post__in' => array(134,138,141,144,733),
		                  'order' => 'asc'
		                  );
		                 $items = new WP_Query( $args );
		                 // Pagination fix
		                  $temp_query = $wp_query;
		                  $wp_query   = NULL;
		                  $wp_query   = $items;
		                ?>
		                <?php if ( $items->have_posts() ) : while ( $items->have_posts() ) : $items->the_post(); ?>

		                        <article class="services-box__item">
		                            <figure class="services-box__item__img">
		                                <?php if ( has_post_thumbnail() ) :

		                                    $id = get_post_thumbnail_id($post->ID);
		                                    $thumb_url = wp_get_attachment_image_src($id,'full', true);
		                                    ?>
		                                    
		                                     <img src="<?php echo $thumb_url[0] ?>" alt="img">           
		                                <?php endif; ?>
		                                <div class="overlay">
		                                    <a href="<?php the_permalink(); ?>" class="services-box__item__link">+</a>
		                                </div>
		                            </figure>
		                            <div class="services-box__item__info">
		                                <h4><?php the_title(); ?></h4>
		                                <?php the_excerpt(); ?>
		                                </p>
		                                <a href="<?php the_permalink(); ?>" class="services-box__item__more">Read More</a>
		                            </div>
		                        </article>
		        
		                    <?php endwhile; ?>
		                    <!-- post navigation -->
		                  
		                <?php endif; 
		                	 wp_reset_postdata();
		                ?>
		    </section>
		</div><!-- #main -->
	</div><!-- #primary -->


<?php
/*get_sidebar();*/
get_footer();
