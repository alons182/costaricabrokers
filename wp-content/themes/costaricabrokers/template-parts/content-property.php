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
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			
		?>
		<div class="tabs">
			<div class="tab"><input id="tab-features" checked="checked" name="tab-group-1" type="radio" /><label for="tab-features">Features Include</label>
			<div class="content">
				<?php echo rwmb_meta( 'rw_features'); ?>
			</div>
			</div>
			<div class="tab"><input id="tab-bed" name="tab-group-1" type="radio" /><label for="tab-bed">Bed Distribution</label>
			<div class="content">
				<?php echo rwmb_meta( 'rw_beddistribution'); ?>
			</div>
			</div>
			</div>
			<div class="columns columns-2">
				<?php echo rwmb_meta( 'rw_video'); ?>
			</div>
			<div class="columns columns-2">
			
					
				
					<?php $photos = rwmb_meta( 'rw_property_thumb', 'type=image&size=large' ); 
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
            	
			</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'costaricabrokers' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
