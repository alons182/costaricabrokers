<?php
/*
    Template Name: Page Home
     */

get_header(); ?>
    <section class="search color" id="properties">
        <div class="inner">

            <!--<form action="#" class="search__form">
                <div class="search__form__row">
                    <div class="form-group">
                        <label for="dep-date">Check in</label>
                        <input type="text" name="dep-date">
                    </div>
                    <div class="form-group">
                        <label for="pick-up">Check out</label>
                        <select name="pick-up" id="pick-up">
                            <option value=""></option>
                            <option value="">lorem</option>
                            <option value="">ipsum</option>
                            <option value="">sit amet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="drop-off">property to rent</label>
                        <select name="drop-off" id="drop-off">
                            <option value=""></option>
                            <option value="">lorem</option>
                            <option value="">ipsum</option>
                            <option value="">sit amet</option>
                        </select>
                    </div>
                </div>
                <div class="search__form__row">
                    <div class="form-group spinner">
                        <label for="people">How many people <small>(including childrens)</small>?</label>
                        <input type="text" name="people" >
                    </div>
                    <div class="form-group radios">
                        <div>
                            <input type="radio" name="type" value="return">
                            <label for="return">lorem</label>
                        </div>
                        <div>
                            <input type="radio" name="type" value="oneway">
                            <label for="return">ipsum</label>
                        </div>
                        
                    </div> 
                   <div class="form-group btns">
                     <button type="submit" class="dark">Book now</button>
                   </div>                        
                </div>
            </form>-->
             <h1>Feature Properties</h1>
        </div>
    </section>
	<section class="services-icons white">

        <div class="inner">

            <div class="services-icons__container">
                <?php rewind_posts(); 
                    $args = array(
                      'post_type' => 'property',
                      /*'post__in' => array(134,138,141,144),*/
                      'posts_per_page'=> 3,
                      'order' => 'asc'
                      );
                    query_posts($args);
                    ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                
            </div>
        </div>
    </section>
    <section class="call dark">
        <div class="inner">
            <p class="wow fadeInLeft">Like what you see? Are you ready to stand out? You know what to do.</p>
            <a href="#" class="call__btn wow fadeInRight color">Contact Us</a>
        </div>
    </section>
    <section class="services-box" id="services">

              <?php rewind_posts(); 
                $args = array(
                  'post_type' => 'page',
                  'post__in' => array(134,138,141,144),
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
                
                <h6 class="testimonials__title">Costa Rica Brokers gives you peace</h6>
                <p class="testimonials__info">Costa Rica Brokers gives you peace of mind knowing professionals are taking care of your property without disrupting your daily life.</p>
                <p class="testimonials__author">Gerardo, Avotz</p>
            </div>
            <div class="testimonials__slide">
                
                <h6 class="testimonials__title">We will go an extra mile</h6>
                <p class="testimonials__info">Our experts will create a personalized travel experience; we will go an extra mile to make sure your vacation is a memorable one.</p>
                <p class="testimonials__author">Alonso, Avotz</p>
            </div>
        </div>
        
    </section>
    <section class="partners white">
        <div class="inner">
            <h2 class="partners__title">Our Partners</h2>
            <a href="http://www.pexscr.com/" class="partners__link" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/partners/PEXS-Costa-Rica-Logo.jpg" alt="pexscr"></a>
            
        </div>
    </section>

<?php
/*get_sidebar();*/
get_footer();
