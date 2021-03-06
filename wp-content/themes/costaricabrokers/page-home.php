<?php
/*
    Template Name: Page Home
     */

get_header(); ?>
    <section class="search color" id="properties">
        <div class="inner">
             <h1 class="title-slider">Get inspired</h1>
        </div>
    </section>
	<section class="services-icons white">

        <div class="inner">

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
											//Original
                                            //$thumb_url = wp_get_attachment_image_src($id,'thumbnail', true);
                                            $thumb_url = wp_get_attachment_image_src($id,array('100','100'), true);
											?>
                                            
                                             <img src="<?php echo $thumb_url[0] ?>" alt="img">           
                                        <?php endif; ?>
                                        </span>
                                        <h3 class="services-icons__item__title"><?php the_title(); ?></h3>
                                        <p class="services-icons__item__intro"><?php the_excerpt(); ?></p>
                                        
                                       <?php if($post->post_title == "Hermosa Heights 13") : ?>
                                        <a href="http://bookings.costarica-brokers.com/Unit/Details/137362" class="services-icons__link"></a>
                                        <?php elseif($post->post_title == "Azul Paraiso 3-B") : ?>
                                          <a href="http://bookings.costarica-brokers.com/Unit/Details/124154" class="services-icons__link"></a>
                                       <?php elseif($post->post_title == "Azul Paraiso 9-A") : ?>
                                          <a href="http://bookings.costarica-brokers.com/Unit/Details/124173" class="services-icons__link"></a>
                                       <?php  /*if($post->post_title == "Blue Villa") : ?>
                                        <a href="http://bookings.costarica-brokers.com/Unit/Details/110413" class="services-icons__link"></a>
                                        <?php elseif($post->post_title == "Casa Lina") : ?>
                                           <a href="http://bookings.costarica-brokers.com/Unit/Details/110410" class="services-icons__link"></a>
                                          <?php */ elseif($post->post_title == "Villa Tesora") : ?>
                                             <a href="http://bookings.costarica-brokers.com/Unit/Details/120068" class="services-icons__link"></a>
                                           <?php else : ?>
                                            <a href="#" class="services-icons__link"></a>
                                           <?php endif ?> 

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
    <section class="call dark">
        <div class="inner">
            <p class="wow fadeInLeft">Like what you see?</p>
            <a href="#contact" class="call__btn wow fadeInRight color">Contact Us</a>
        </div>
    </section>
    <h3 class="services-title">Activities</h3>
    <section class="services-box" id="services">

              <?php rewind_posts(); 
                $args = array(
                  'post_type' => 'page',
                  'post__in' => array(134,138,141,144,733),
                  'order' => 'asc'
                  );
                query_posts($args);
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
                  
                <?php endif; ?>
    </section>
    <section class="testimonials dark">
        <div class="cycle-slideshow inner" data-cycle-fx="fade"  data-cycle-timeout="5000"  data-cycle-slides=".testimonials__slide">
            <div class="testimonials__slide">
                
                <h6 class="testimonials__title">Costa Rica Brokers gives you peace of mind</h6>
                <p class="testimonials__info">Costa Rica Brokers gives you peace of mind knowing professionals are taking care of your property without disrupting your daily life.</p>
                <p class="testimonials__author"></p>
            </div>
            <div class="testimonials__slide">
                
                <h6 class="testimonials__title">We will go an extra mile</h6>
                <p class="testimonials__info">Our experts will create a personalized travel experience; we will go an extra mile to make sure your vacation is a memorable one.</p>
                <p class="testimonials__author"></p>
            </div>
        </div>
        
    </section>
    <section class="partners white">
        <div class="inner">
            <h2 class="partners__title">Our Partners</h2>
            <a href="http://www.pexscr.com/" class="partners__link" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/partners/PEXS-Costa-Rica-Logo.jpg" alt="pexscr"></a>
             <a href="http://marinacharterscr.com/" class="partners__link" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/partners/marina-charters.png" alt="Marina Charters"></a>
             <a href="http://caturgua.com/" class="partners__link" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/partners/Guanacaste.png" alt="Guanacaste Caturga"></a>
             <a href="http://caturgua.com/" class="partners__link" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/partners/caturga.png" alt="Guanacaste Caturga"></a>
             <a href="http://www.johansens.com/north-america/costa-rica/" class="partners__link" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/partners/Jo-Logo.jpg" alt="Johansen"></a>
             <a href="https://www.budget.co.cr/reserve/reserverequest.php?code=M014600&ref=PEXS&lg=0" class="partners__link budget-logo" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/partners/budgetLogoNew1.png" alt="budgetLogo"></a>
            
            
        </div>
    </section>

<?php
/*get_sidebar();*/
get_footer();
