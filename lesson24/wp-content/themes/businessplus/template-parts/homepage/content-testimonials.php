<?php
/**
 * Template part for displaying testimonials section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="testimonials" class="section light">
    <div class="container">
        <?php if (get_theme_mod('testimonials_title') || get_theme_mod('testimonials_subtitle') ) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('testimonials_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('testimonials_title')?></h2>
                <?php endif;?>
                <?php if (get_theme_mod('testimonials_subtitle')):?>
                    <p class="section-subtitle"><?php echo get_theme_mod('testimonials_subtitle')?></p>
                <?php endif;?>
            </div>
        <?php endif;?>

        <?php $args = array('post_type' => 'testimonials',
                            'post_per_page'=>-1);
        $query = new WP_Query($args);
        if ($query->have_posts()) :?>
            <div class="testimonials-list row">
                <?php while ($query->have_posts()):
                    $query->the_post();?>
                    <div class="testimonial-item col-xs-12 col-sm-6 col-md-4">
                        <?php the_content();?>
                        <div class="testimonial-author">
                            <div class="author-icon col-xs-2 col-sm-3"><?php the_post_thumbnail()?></div>
                            <div class="author col-xs-10 col-sm-9">
                                <h6><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h6>
                                <p><?php  echo get_post_meta(get_the_ID(),'description',true);?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </div>
</section>
