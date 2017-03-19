<?php
/**
 * Template name: Home page
 *
 * @package Deliver
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <section class="services">
            <div class="container">
                <div class="subheading">
                    <h2>We are a Small Team Doing Big Things!</h2>
                    <p><?php echo get_theme_mod('about-desc','Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla 
                        metus non nulla cursus, sit amet rutrum est pretium.');?>
                    </p>
                </div>

                <ul class="services-list">
                    <?php
                    $serv = array('post_type' => 'services');

                    $serv_query = new WP_Query($serv);

                    if($serv_query -> have_posts()):
                        while ($serv_query -> have_posts()):
                            $serv_query -> the_post();?>

                            <li class="service-item">
                                <?php the_post_thumbnail(array(83,83));?>
                                <h3 class="heading">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                                <?php the_content(); ?>
                                <a href="#" class="green btn-find-out">Find Out More</a>
                            </li>

                        <?php endwhile;
                        wp_reset_postdata();
                    endif;?>

                </ul>
            </div>
        </section><!--.services-->

        <section class="works">
            <div class="container">
                <div class="subheading">
                    <h2>Some of Our Latest Work</h2>
                    <p><?php echo get_theme_mod('about-desc','Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin 
                        fringilla metus non nulla cursus, sit amet rutrum est pretium..');?>
                    </p>
                </div>

                <ul class="works-list">
                    <?php
                    $work = array('post_type' => 'works');

                    $work_query = new WP_Query($work);

                    if($work_query -> have_posts()):
                        while ($work_query -> have_posts()):
                            $work_query -> the_post();?>

                            <li class="work-item">
                                <?php the_post_thumbnail();?>
                                <div class="overlay">
                                    <a href="#">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <h3 class="heading">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                            </li>

                        <?php endwhile;
                        wp_reset_postdata();
                    endif;?>

                </ul>
            </div>
        </section>

        <section class="join">
            <div class="container">
                <div class="subheading">
                    <h2>If you like what you see, Join Us!</h2>
                    <p><?php echo get_theme_mod('about-desc','Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin 
                        fringilla metus non nulla cursus, sit amet rutrum est pretium..');?>
                    </p>
                </div>
                <a href="#" class="purchase btn">Purchase</a>
            </div>
        </section>


    </div><!-- #primary -->

<?php

get_footer();
