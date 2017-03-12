<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BusinessPlus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			?>
			<div class="col-xs-1 author-photo">
				<img src="<?php echo get_template_directory_uri() ?>./img/admin-photo.png" alt="Author">
			</div>
			<div class="col-xs-11 post-content"><?php
			the_title( '<h3 class="post-heading">', '</h3>' );?>
			</div>	<?php
		else :
			the_title( '<h3 class="post-heading">
							<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>
						</h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php businessplus_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			echo get_the_post_thumbnail();
			the_content( sprintf(

				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'businessplus' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'businessplus' ),
				'after'  => '</div>',
			) );


		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php businessplus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
