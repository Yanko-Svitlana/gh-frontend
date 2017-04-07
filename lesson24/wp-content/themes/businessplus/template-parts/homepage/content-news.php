<?php
/**
 * Template part for displaying news section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="news" class="section">
    <div class="container">
        <?php if (get_theme_mod('news_title') || get_theme_mod('news_subtitle') ) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('news_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('news_title')?></h2>
                <?php endif;?>
                <?php if (get_theme_mod('news_subtitle')):?>
                    <p class="section-subtitle"><?php echo get_theme_mod('news_subtitle')?></p>
                <?php endif;?>
            </div>
        <?php endif;?>

        <?php
        if(have_posts()):?>
            <div class="row">
            <?php
                $args=array('numberposts'=>3,'post_type'=>'post');
                $recent_posts = wp_get_recent_posts($args);
                foreach ($recent_posts as $recent) :
                    if ($recent === $recent_posts[0]) : ?>
                        <ul class="counter col-xs-2 col-sm-1">
                            <li class="date-posted"><span class="date"><?php echo date("d", strtotime($recent["post_date"])) ?></span><?php echo date("M-Y", strtotime($recent["post_date"])) ?></li>
                            <li class="comments-number"><i class="fa fa-comments-o"></i><?php echo $recent['comment_count'];?> - Com</li>
                            <li class="views-number"><i class="fa fa-eye"></i><?php echo get_post_meta($recent['ID'], 'views_count', true)?> - View</li>.
                        </ul>
                        <div class="news-content col-xs-10 col-sm-5">
                            <?php echo get_the_post_thumbnail($recent['ID']);?>
                            <h3 class="news-title"><a href="<?php echo get_permalink($recent['ID']);?>"><?php echo $recent['post_title'];?></a></h3>
                            <p><?php echo $recent['post_excerpt'];?></p>
                        </div>

                    <?php else : ?>
                        <div class="news-content-simple col-xs-12 col-sm-6">
                            <h3 class="news-title"><a href="<?php echo get_permalink($recent['ID']);?>"><?php echo $recent['post_title'];?></a></h3>
                            <span class="post-date"><?php echo date("d-M-Y", strtotime($recent["post_date"])); ?></span>
                            <p><?php echo $recent['post_excerpt'];?></p>
                        </div>

                <?php endif; endforeach;?>

                <?php if (get_theme_mod('news_link')):?>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-6">
                        <a class="button" href="<?php echo get_permalink(get_theme_mod('news_link'));?>">
                            <?php if (get_theme_mod('newss_btn_text')):
                                echo get_theme_mod('news_btn_text');
                            else: echo __('View more','businessplus');
                            endif;?>
                        </a>
                    </div>
                <?php endif;?>

            </div>

        <?php endif;?>




    </div>
</section>
