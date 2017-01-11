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
                <article id="contact" class="footer__contact">
                    <h6>Need Help?</h6>
                    <p>Contac us for any query</p>
                    <p class="footer__contact__data">
                        <i class="icon-phone"></i>
                        +506 4702-7098
                    </p>
                     <p class="footer__contact__data">
                        <i class="icon-envelope-o"></i>
                        <a href="mailto::info@costarica-brokers.com">info@costarica-brokers.com</a>
                    </p>
                </article>
                <article class="footer__social">
                     <h6>Follow us</h6>
                     <a href="#" class="footer__social__link"><i class="icon-facebook"></i></a>
                     <a href="#" class="footer__social__link"><i class="icon-twitter"></i></a>
                     <a href="#" class="footer__social__link"><i class="icon-google-plus"></i></a>
                     <a href="#" class="footer__social__link"><i class="icon-youtube"></i></a>
                     <a href="https://www.budget.com/budgetWeb/home/home.ex?HP" class="budget-logo" target="_blank"><img src="https://www.budget.com/budgetWeb/images/newlayout/budgetLogoNew1.png" alt="budgetLogo"></a>
                </article>
            </div>
            <div class="footer__copyright">
                <p>Copyright 2016, <a href="https://www.avotz.com/">Avotz</a>. All rights reserved. </p>
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

<?php wp_footer(); ?>

</body>
</html>
