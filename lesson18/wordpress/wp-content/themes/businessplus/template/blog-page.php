<?php /**
 * Template Name: Blog Page Template
 * @package BusinessPlus
 */
get_header()?>

    <section class="blog-content section">
        <div class="container">
            <div class="section-heading">
                <h2>Blog Page</h2>
                <span class="short-description">Our featured Post</span>
            </div>

            <?php
                query_posts( 'posts_per_page=1');

                $args = array('post_type' => 'post');
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) {

                    echo '<ul class="posts">';

                    while ($the_query->have_posts()) {
                        $the_query->the_post();

                        echo '<li class="row post">' ?>
                            <div class="col-xs-1 author-photo">
                                <img src="<?php echo get_template_directory_uri() ?>./img/admin-photo.png" alt="Author">
                            </div>
                            <div class="col-xs-11 post-content">
                                <h3 class="post-heading"><a href="<?php the_permalink('single-blog.php'); ?>"> <?php the_title(); ?> </a></h3>

                                <span class="posted">
                                            Posted by:
                                    <?php the_author(); ?>,
                                    <?php the_time('F - j - Y'); ?>
                                </span>

                                <?php
                                the_post_thumbnail();
                                the_content();?>

                                <div class="col-xs-5 share">
                                    <span class="share-description">Share : </span>
                                    <ul class="share-icons">
                                        <li class="share-item facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="share-item twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="share-item google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="col-xs-2 col-xs-offset-4 btn">Read more</a>
                            </div>
                        <?php echo'</li>';
                        }
                    echo '</ul>';
                    wp_reset_postdata();
                } else {
                    echo "Posts not found";
                }?>


            <?php wp_reset_postdata();?>
            <?php

            $args = array(
                'show_all'     => false, // показаны все страницы участвующие в пагинации
                'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'add_args'     => false // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
            );

            the_posts_pagination(); ?>

        </div>
    </section>


<?php
get_footer();

