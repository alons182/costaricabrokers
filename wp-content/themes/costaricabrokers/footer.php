<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package costaricabrokers
 */

?>

	</main>
    <footer class="footer">
        <div class="inner">
            <div class="footer__info">
                <article class="footer__about">
                   <?php rewind_posts(); ?>
                  <?php query_posts( 'post_type=page&page_id=13' ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
                            <?php the_content(); ?>
            
                        <?php endwhile; ?>
                        <!-- post navigation -->
                      
                    <?php endif; ?>
                </article>
                <article id="need" class="footer__contact">
                    <h6>Need Help?</h6>
                    <p>Contac us for any query</p>
                    <p class="footer__contact__data">
                        <i class="icon-phone"></i>
                        +506 4702-7098
                    </p>
                     <p class="footer__contact__data">
                        <a href="mailto::info@costarica-brokers.com"><i class="icon-envelope-o"></i></a>
                        <a href="mailto::info@costarica-brokers.com">info@costarica-brokers.com</a>
                    </p>
                </article>
                <article class="footer__social">
                     <h6>Follow us</h6>
                     <a href="https://www.facebook.com/BrokersCR/" class="footer__social__link" target="_blank"><i class="icon-facebook"></i></a>
                     <a href="https://www.twitter.com/brokerscr" class="footer__social__link" target="_blank"><i class="icon-twitter"></i></a>
                     <!-- <a href="#" class="footer__social__link"><i class="icon-google-plus"></i></a> -->
                     <a href="https://www.instagram.com/brokersCR/" class="footer__social__link" target="_blank"><i class="fa fa-instagram"></i></a>
                    
                </article>
                <a href="https://www.ict.go.cr/" class="partners__link" target="_blank"><img src="http://www.pexscr.com/wp-content/uploads/2018/08/ict-1.png" alt="ICT"></a>
            </div>
            <div class="footer__copyright">
                <p>Copyright 2016-<?php echo date('Y'); ?>, <a href="https://www.avotz.com/">Avotz</a>. All rights reserved. </p>
                 <?php
					wp_nav_menu(
						 array(
						 	'theme_location' => 'secondary',
						 	'container'       => 'nav',
							'container_class' => 'footer__menu',
							'container_id'    => '',
							'menu_class'      => 'footer__menu__ul',
							'menu_id'         => '',
						 	 ) 

					);?>
            </div>
        </div>
    </footer>
    <div class="rent-a-cart-button">
        <a href="https://www.budget.co.cr/reserve/reserverequest.php?code=M014600&ref=PEXS&lg=0" class="btn-renta-car" target="_blank">Rent a car</a>
    </div>
    <div id="contact" class="contact white-popup mfp-hide mfp-with-anim">
      
      <?php rewind_posts(); ?>
      <?php query_posts( 'post_type=page&page_id=518' ); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

               <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
             <?php the_content(); ?>

            <?php endwhile; ?>
            <!-- post navigation -->
          
        <?php endif; ?>
      
            
   </div>


<?php wp_footer(); ?>

<script>
 
    var wpcf7ElmContact = document.querySelector( '.wpcf7' ); //form contact
    

      if(wpcf7ElmContact)
    {
          wpcf7ElmContact.addEventListener( 'wpcf7submit', function( event ) {
            ga('send', 'event', 'Contact Form', 'submit');
        }, false );
      }
   
</script>

</body>
</html>
