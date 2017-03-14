<?php
/**
 * Template Name: Home Page Template
 */

get_header(); ?>

    <section class="about section" id="about">
        <div class="container">
            <div class="content">
                <div class="section-heading">
                    <h2><?php echo get_the_title(108);?></h2>
                    <span class="short-description">Our Short Story</span>
                </div>
                <div class="section-descriprion">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <a href="#services" class="btn">Read more</a>
                </div>
            </div>

        </div>
    </section>

    <section class="services section" id="services">
        <div class="container">
            <div class="section-heading">
                <h2><?php echo get_theme_mod('home_services_title', 'Services'); ?></h2>
                <span class="short-description"><?php echo get_theme_mod('home_services_desc', 'What we are doing');?></span>
            </div>

            <div class="services-items">
            <?php
            $serv = array('post_type' => 'services');

            $serv_query = new WP_Query($serv);

            if($serv_query -> have_posts()):
                while ($serv_query -> have_posts()):
                    $serv_query -> the_post();?>

                    <div class="service-item">
                        <a href="<?php the_permalink(); ?>">
                            <img <?php the_post_thumbnail();?>
                            <div class="service-content">
                                <h3 class="heading"> <?php the_title(); ?> </h3>
                                <?php the_content(); ?>
                            </div>
                        </a>
                    </div>

                <?php endwhile;
                wp_reset_postdata();
            endif;?>

            </div>
            <a href="#" class="btn">View more</a>
        </div>
    </section>


    <section class="testimonials section" id="testimonials">
        <div class="container">
            <div class="section-heading">
                <h2><?php echo get_theme_mod('home_testimonials_title', 'Clients'); ?></h2>
                <span class="short-description"><?php echo get_theme_mod('home_services_subtitle', 'Whats our client says'); ?></span>
            </div>
            <div class="testimonials-slider">
                <?php
                $testim = array('post_type' => 'testimonials');

                $testim_query = new WP_Query($testim);

                if($testim_query -> have_posts()):
                    while ($testim_query -> have_posts()):
                        $testim_query -> the_post();?>

                        <div class="testimonial-item">
                            <?php the_content();?>
                            <h3><?php  the_author();?></h3>
                            <span class="category">Designation</span>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                endif;?>
                    
            </div>
        </div>
    </section>


    <section class="news section" id="news">
        <div class="container">
            <div class="section-heading">
                <h2><?php echo get_theme_mod('home_news_title', 'News'); ?></h2>
                <span class="short-description"><?php echo get_theme_mod('home_news_subtitle', 'From Our Blog'); ?></span>
            </div>
            <ul class="news-items">
            <li class="news-item">
                <div class="counter">
                    <ul class="counter-items">
                        <li class="counter-item date"><span>30</span>Oct-2015</li>
                        <li class="counter-item comments">8-Com</li>
                        <li class="counter-item views">16-View</li>
                    </ul>
                </div>
                <div class="main-news">
                    <img src="<?php echo get_template_directory_uri()?>./img/news-img.png" alt="News">
                    <h3 class="heading">Blog heading</h3>
                    <p class="news-description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy...
                    </p>
                </div>
            </li>

            <?php
                $news = array('post_type' => 'post','posts_per_page' => 2);

                $news_query = new WP_Query($news);

                if($news_query -> have_posts()):
                    while ($news_query -> have_posts()):
                        $news_query -> the_post();?>

                        <li class="news-item">
                            <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                            <span class="news-date"><?php the_time('d-F-Y');?></span>
                            <p class="news-description"><?php the_content()?></p>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;?>

            </ul>
            <div class="row">
                <div class="col-xs-12 col-sm-2 col-sm-offset-6">
                    <a href="#" class="btn">View more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="partners section" id="partners">
        <div class="container">
            <div class="section-heading">
                <h2><?php echo get_theme_mod('home_partners_title', 'Partners'); ?></h2>
                <span class="short-description"><?php echo get_theme_mod('home_partners_subtitle', 'Our Great Partners'); ?></span>
            </div>
            <div class="partners-slider">
                <?php
                $partner = array('post_type' => 'partners', 'posts_per_page' => -1,);

                $partner_query = new WP_Query($partner);

                if($partner_query -> have_posts()):
                    while ($partner_query -> have_posts()):
                        $partner_query -> the_post();?>

                    <div class="partner-item">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail();?>

                        </a>
                    </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif;?>
            </div>
        </div>
    </section>
<?php

get_footer();

