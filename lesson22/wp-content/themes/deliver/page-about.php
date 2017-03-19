<?php
/**
 * The template for displaying page about
 *
 * @package Deliver
 */

get_header(); ?>
    <div class="page-heading">
        <div class="container">
            <?php the_title();?> us
        </div>
    </div>
    <div id="primary" class="content-area">
        <section class="features">
            <div class="container">
                <div class="subheading">
                    <h2>We are a Small Team Doing Big Things!</h2>
                    <p><?php echo get_theme_mod('about-desc','Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla 
                        metus non nulla cursus, sit amet rutrum est pretium.');?>
                    </p>
                </div>

                <ul class="features-list">
                    <?php
                    $feat = array('post_type' => 'features');

                    $feat_query = new WP_Query($feat);

                    if($feat_query -> have_posts()):
                        while ($feat_query -> have_posts()):
                            $feat_query -> the_post();?>

                            <li class="feature-item">
                                <h3 class="heading">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                                <?php the_content(); ?>
                            </li>

                        <?php endwhile;
                        wp_reset_postdata();
                    endif;?>

                </ul>
            </div>
        </section><!--.features-->

        <section class="team">
            <div class="container">
                <div class="subheading">
                    <h2>Meet Our Team</h2>
                    <p><?php echo get_theme_mod('about-desc','Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin 
                        fringilla metus non nulla cursus, sit amet rutrum est pretium..');?>
                    </p>
                </div>

                <ul class="team-list">
                    <?php
                    $team = array('post_type' => 'team');

                    $team_query = new WP_Query($team);

                    if($team_query -> have_posts()):
                        while ($team_query -> have_posts()):
                            $team_query -> the_post();?>

                            <li class="team-member">
                                <?php echo get_the_post_thumbnail();?>
                                <h3 class="heading">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                                <span class="position"><?php the_meta();?></span>
                                <?php the_content(); ?>
                                <ul class="follow">
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
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
                <a class="apply btn">Apply Today</a>
            </div>
        </section>


    </div><!-- #primary -->

<?php

get_footer();
