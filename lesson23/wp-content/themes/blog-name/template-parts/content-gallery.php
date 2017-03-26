<?php
/**
 * Template part for displaying category posts
 *
 * @package Blog_Name
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('gallery-item'); ?>>
    <a href="<?php the_permalink($post->ID);?>">
        <div class="post-image">
            <?php the_post_thumbnail();?>
        </div>
        <h2 class="post-title-overlay">
            <?php the_title();?>
        </h2>
        <div class="hover-overlay">
            <?php the_excerpt();?>
        </div>
    </a>

</div><!-- #post-## -->