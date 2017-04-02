<?php
/**
 * Template part for displaying services section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="services" class="section triangles">
    <div class="container">
        <?php if (get_theme_mod('services_title') || get_theme_mod('services_subtitle') ) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('services_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('services_title')?></h2>
                <?php endif;?>
                <?php if (get_theme_mod('services_subtitle')):?>
                    <p class="section-subtitle"><?php echo get_theme_mod('services_subtitle')?></p>
                <?php endif;?>
            </div>
        <?php endif;?>

        <?php $args = array('post_type' => 'services',
                            'posts_per_page' => 4);
              $query = new WP_Query($args);
              if ($query->have_posts()) :?>
                <ul class="services-list row ">
                    <?php while ($query->have_posts()):
                        $query->the_post();?>
                        <li class="service-item">
                            <div class="service-icon col-xs-2 col-sm-2 col-md-1"><?php the_post_thumbnail()?></div>
                            <div class="service-content col-xs-10 col-sm-4 col-md-5">
                                <h3 class="service-item-title">
                                    <a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php the_content()?></p>
                            </div>
                        </li>
                    <?php endwhile;?>
                </ul>
              <?php endif;?>

        <?php if (get_theme_mod('services_link')):?>
            <a class="button" href="<?php echo get_permalink(get_theme_mod('services_link'));?>">
                <?php if (get_theme_mod('services_btn_text')):
                    echo get_theme_mod('services_btn_text');
                else: echo __('View more','businessplus');
                endif;?>
            </a>
        <?php endif;?>



    </div>
</section>
