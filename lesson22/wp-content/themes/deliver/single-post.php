<?php
/**
 * The template for displaying  single blog posts
 *
 * @package Deliver
 */

get_header(); ?>
    <div class="page-heading">
        <div class="container">
            OUR BLOG
        </div>
    </div>

    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main row" role="main">

                <div class="col-lg-9 col-xl-9">
                    <?php
                    while ( have_posts() ) : the_post();

                        echo '<article class="post">';
                            echo '<a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
                                echo get_the_post_thumbnail(  );
                            echo '</a>';

                            echo '<h3 class="post-heading">';
                                echo'<a href="'. get_permalink().'">'. the_title().'</a>';
                            echo'</h3>';

                            echo'<span class="entry-meta">'.
                                the_time('F  j , Y');
                                the_author();
                                the_category(',');
                                comments_number('comments', 'comment','comments');
                                echo'</span>';

                            the_content();

                        echo'</article>';

                 /*       the_post_navigation();*/

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>

                <?php get_sidebar();?>

            </main><!-- #main -->
        </div><!--.container-->
    </div><!-- #primary -->

<?php

get_footer();