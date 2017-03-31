<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BusinessPlus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="author-avatar col-xs-12 col-sm-1">
		<img src="<?php echo get_avatar_url(get_the_author_meta( 'ID' )) ?>" alt="<?php echo get_the_author_meta('nickname')?>";?>
	</div>


	<div class="entry-content col-xs-12 col-sm-11">
		<header class="entry-header ">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php businessplus_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
			endif; ?>
		</header><!-- .entry-header -->

		<?php
			the_post_thumbnail();
			if(!is_single()):
				the_excerpt();
			else : the_content();
			endif;?>
		<ul class="social-links">
			<li><a href="https://www.facebook.com/sharer.php?u=<?php echo get_post_permalink(get_the_ID()) ?>" class="facebook-icon" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/share?url=<?php echo get_post_permalink(get_the_ID()) ?>" class="twitter-icon" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://plus.google.com/share?url=<?php echo get_post_permalink(get_the_ID()) ?>" class="google-icon" target="_blank"><i class="fa fa-google-plus"></i></a></li>
		</ul>
		<?php if (!is_single()):?>
		<a href="<?php echo get_post_permalink();?>"><?php echo __('Read more');?></a>
		<?php endif;

		?>
	</div><!-- .entry-content -->
	<?php if (is_single()):?>
		<div class="author-info">
			<div class="col-xs-2">
				<img src="<?php echo get_avatar_url(get_the_author_meta( 'ID' )) ?>" alt="<?php echo get_the_author_meta('nickname')?>";?>
			</div>
			<div class="about-author col-xs-10">
				<?php echo get_the_author_meta( 'description' )?>
			</div>
		</div>
	<?php endif;?>
</article><!-- #post-## -->
