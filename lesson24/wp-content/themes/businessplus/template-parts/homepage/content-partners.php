<?php
/**
 * Template part for displaying partners section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="partners" class="section triangles">
    <div class="container">
        <?php if (get_theme_mod('partners_title') || get_theme_mod('partners_subtitle') ) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('partners_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('partners_title')?></h2>
                <?php endif;?>
                <?php if (get_theme_mod('partners_subtitle')):?>
                    <p class="section-subtitle"><?php echo get_theme_mod('partners_subtitle')?></p>
                <?php endif;?>
            </div>
        <?php endif;?>

        <?php $args = array('post_type' => 'partners',
                            'posts_per_page'=>6);
        $query = new WP_Query($args);
        if ($query->have_posts()) :?>
            <div class="partners-list row">
                <?php while ($query->have_posts()):
                    $query->the_post();?>
                    <div class="partners-item col-xs-3 col-sm-3 col-md-2">
                        <a href="<?php echo get_permalink()?>"><?php the_post_thumbnail();?></a>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>


    </div>
</section>
