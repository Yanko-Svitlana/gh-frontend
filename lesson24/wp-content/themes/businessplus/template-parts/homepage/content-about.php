<?php
/**
 * Template part for displaying about section in homepage
 *
 * @package BusinessPlus
 */

?>

    <section id="about" class="section light">
        <div class="container">
            <div class="row">
                <?php if (get_theme_mod('about_title') || get_theme_mod('about_subtitle') ) : ?>
                    <div class="section-header col-xs-12 col-sm-5">
                       <?php if (get_theme_mod('about_title')):?>
                            <h2 class="section-title"><?php echo get_theme_mod('about_title')?></h2>
                       <?php endif;?>
                       <?php if (get_theme_mod('about_subtitle')):?>
                            <p class="section-subtitle"><?php echo get_theme_mod('about_subtitle')?></p>
                       <?php endif;?>
                    </div>
                <?php endif;?>
                <?php dynamic_sidebar('sidebar-2')?>
                <?php wp_custom_archive();?>

                <?php if (get_theme_mod('about_description') || get_theme_mod('about_link') ) : ?>
                    <div class="about-desc col-xs-12 col-sm-7">
                        <?php  if (get_theme_mod('about_description')):?>
                            <p class="section-description"><?php echo get_theme_mod('about_description')?></p>
                        <?php endif;?>
                        <?php if (get_theme_mod('about_link')):?>
                            <a class="button" href="<?php echo get_permalink(get_theme_mod('about_link'));?>">
                                <?php if (get_theme_mod('about_btn_text')):
                                         echo get_theme_mod('about_btn_text');
                                    else: echo __('Read more','businessplus');
                                endif;?>
                            </a>
                        <?php endif;?>

                    </div>
                <?php endif;?>
            </div>
            
        </div>
    </section>


