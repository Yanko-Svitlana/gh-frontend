<?php
/**
* Template part for displaying services section in homepage
*
* @package BusinessPlus
*/
?>


       <?php $args = array('post_type' => 'slides');
       $the_query = new WP_Query($args);
       if ($the_query->have_posts()) : ?>
        <div class="hero-slider">
           <?php  while ($the_query->have_posts()) :
               $the_query->the_post(); ?>

               <div class="hero">
                   <div class="container">
                       <div class="intro">
                           <span><?php echo __('Welcome to','businessplus');?></span>
                           <h2 class="main-title"><?php the_title(); ?></h2>
                           <?php the_content(); ?>
                           <?php
                           if (get_post_meta(get_the_ID(),'main-page-link',true)!=''): ?>
                               <a class="button" href="<?php echo get_permalink(get_post_meta(get_the_ID(),'main-page-link',true));?>">
                                   <?php echo __('Read more','businessplus'); ?>
                               </a>
                           <?php endif;?>
                       </div>
                   </div>
               </div>
           <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>



