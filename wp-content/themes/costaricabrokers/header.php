<?php

/**

 * The header for our theme.

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package costaricabrokers

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway' rel='stylesheet' type='text/css'>

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicon-16x16.png" sizes="16x16">

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicon-32x32.png" sizes="32x32">

<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

 <header class="header">

            <div class="inner">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo" class="header__logo__img" /></a>

                <?php wp_nav_menu( array(

	                     'theme_location' => 'primary',

	                     'menu_id' => 'primary-menu',

	                     'container'       => 'nav',

		                'container_class' => 'header__menu',

		                'container_id'    => '',

		                'menu_class'      => 'header__menu__ul',

	                      ) 

                      ); 

                      ?>

                <button id="btn-menu" class="header__btn-menu"><i class="icon-menu"></i></button>

            </div>

        </header>

        <main class="main">

             <?php if ( is_front_page() ) : ?>

	            <section class="intro">

                    <div class="banner">

                        <div class="cycle-slideshow" data-cycle-slides=".banner-slide" data-cycle-pager=".banner-pager" data-cycle-timeout="2000"  data-cycle-pager-template="<a href=#></a>">
                             <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/brokers1.jpg');">

                            </div>

                            <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/brokers2.jpg');">

                            </div>

                            <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/brokers3.jpg');">  

                            </div>

                            <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">

                            </div>

                            <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">

                            </div>

                            <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">  

                            </div>

                              <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner4.jpg');">  

                            </div>

                                   

                        

                                    

                            </div>

                    </div>

                    

	                <div class="inner">

	                    <div class="intro__info">

	                         <?php rewind_posts(); ?>

                              <?php query_posts( 'post_type=page&page_id=25' ); ?>

                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                       

                                        <?php the_content(); ?>

                        

                                    <?php endwhile; ?>

                                    <!-- post navigation -->

                                  

                                <?php endif; ?>

                            <!--<h1 class="wow fadeInDown">Lorem Ipsum ?</h1>

	                        <h2 class="wow fadeInUp">Lorem ipsum dolor sit amet</h2> 

	                        <div class="intro__info__actions">

	                            <a href="#services" title="Our services" class="intro__info__btn  white wow fadeInLeft anchor ">Our services</a>

	                            <a href="#booking" title="Contact" class="intro__info__btn  color wow fadeInRight anchor">Booking</a>

	                        </div>-->

	                    </div>

	                </div>

	            </section>

			        <?php

				endif;

				?>

                <?php wp_reset_query(); ?>



            

        

