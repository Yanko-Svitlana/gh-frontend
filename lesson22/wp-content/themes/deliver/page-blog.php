<?php
/**
 * The template for displaying blog page
 *
 * @package Deliver
 */

get_header(); ?>

    <div class="page-heading">
        <div class="container">
            <?php the_title();?>
        </div>
    </div>
    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main row" role="main">

               <div class="col-lg-9 col-xl-9">


               <?php
                   query_posts( 'posts_per_page=5');

                   $args = array('post_type' => 'post');
                   $query = new WP_Query($args);

                   if ($query->have_posts()) {

                       echo '<ul class="posts">';

                           while ($query->have_posts()) {
                               $query->the_post();

                                   echo '<li class="post">';
                                       echo '<a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
                                            echo get_the_post_thumbnail(  );
                                       echo '</a>';

                                       echo '<h3 class="post-heading">';
                                           echo '<a href="' . esc_url( get_permalink()) . '">' . get_the_title() . '</a>';                                       echo'</h3>';

                                       echo'<span class="entry-meta">'.
                                           the_time('F  j , Y');
                                           the_author();
                                           the_category(',');
                                           comments_number('comments', 'comment','comments');

                                       echo'</span>';

                                       the_content();

                                    echo'</li>';
                           }
                       echo '</ul>';
                       wp_reset_postdata();
                   } else {
                       echo "Posts not found";
                   }?>
               </div>

               <?php get_sidebar();?>
            </main><!-- #main -->
        </div>
    </div><!-- #primary -->

<?php

get_footer();
