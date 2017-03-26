<?php
/**
 * Template part for displaying frontpage posts
 *
 * @package Blog_Name
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="meta-time">
        <a href="<?php get_the_permalink();?>">
            <span class="number"><?php echo the_time('j')?></span><?php echo the_time('F'); ?></a>
    </div>
    <div class="main-part-article">
        <header class="entry-header">
            <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
					<span class="comments-link">
						<i class="fa fa-comment"></i>
                        <a href="<?php the_permalink() ?>"><?php comments_number('no comment', 'comment','% comments');?></a>
					</span>
					<span class="category-link">
						<i class="fa fa-folder"></i>
                        <?php the_category(' '); ?>
					</span>
                </div><!-- .entry-meta -->
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content( sprintf(
            /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'blog-name' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );
          
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog-name' ),
                'after'  => '</div>',
            ) );

            ?>
        </div><!-- .entry-content -->
    </div>

    <footer class="entry-footer">

    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
