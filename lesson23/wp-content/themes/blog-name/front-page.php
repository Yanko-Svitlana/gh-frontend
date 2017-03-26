<?php
/**
 * The template for displaying front pages
 *
 * @package Blog_Name
 */
get_header(); ?>

    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">


                <?php
                    $args = array('post_type' => 'slide');
                    $query = new WP_Query($args);
                    if($query -> have_posts()):?>
                        <div class="slider">
                        <?php while ($query -> have_posts()):
                            $query -> the_post();?>
    `                        <div class="slide-item">
                                <figure>
                                    <a href="<?php get_permalink( $_post->ID );?>" title="<?php esc_attr( $_post->post_title );?>">
                                        <?php the_post_thumbnail();?>
                                        <figcaption>
                                            <?php
                                                the_title('<h2 class=slide-title>','</h2>');
                                                the_excerpt();
                                            ?>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div><!--.slide-item-->
                        <?php endwhile;?>
                        </div><!--.slider-->
                        <?php wp_reset_query();
                    endif;?>

                    <h2 class="frontpage-title"><?php echo get_theme_mod('front_page_title');?></h2>
                    <?php
                    $args = array('post_type' => 'post',
                                    'post_per_page'=>4);
                    $query = new WP_Query($args);
                    if($query -> have_posts()):
                        while ($query -> have_posts()):
                            $query -> the_post();
                            get_template_part( 'template-parts/content','frontpage' );
                        endwhile;?>
                        <div class="pagination">
                            <?php   echo paginate_links(array(
                                        'total'     =>$query->max_num_pages,
                                        'prev_next' =>false
                                    ));?>
                        </div><?php
                    endif;
                    wp_reset_query();
                ?>
            </main><!-- #main -->
            <?php get_sidebar();?>
        </div><!-- #primary -->
    </div>
<?php
get_footer();