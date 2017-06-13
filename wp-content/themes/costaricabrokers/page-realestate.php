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
 * Template Name: Page Real Estate
 * @package costaricabrokers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="inner">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );


			endwhile; // End of the loop.
			?>
			<div class="services-icons__container">


			 <?php $categories = get_terms( array(
                                'taxonomy' => 'type',
                                'hide_empty' => false,
                               
                            ) );
                      	
                         foreach ($categories as $key => $category) {  ?>
							
						
							<div>

							<img class="alignnone size-medium wp-image-471" src="<?php echo get_template_directory_uri();?>/img/real-estate/<?php echo $category->slug ?>" alt="" width="300" height="214" />
							<h3 class="services-icons__item__title"><?php echo $category->name ?></h3>
							<a class="services-icons__link" href="/type/<?php echo $category->slug ?>"> </a>

							</div>
							
                        <?php } ?> 
               </div>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
