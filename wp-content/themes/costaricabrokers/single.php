<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package costaricabrokers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="inner">

		<?php
		while ( have_posts() ) : the_post();
			if ( get_post_type( $post ) == 'property' ) : 
				 get_template_part( 'template-parts/content', 'property' ); 
			
			elseif( get_post_type( $post ) == 'real-estate'):
				 get_template_part( 'template-parts/content', 'real-estate' ); 
			else :
				get_template_part( 'template-parts/content', get_post_format() );
				get_sidebar();
				
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
