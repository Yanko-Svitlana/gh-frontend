<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BusinessPlus
 */

get_header(); ?>

	<section id="primary" class="section">
		<div class="container">
		<!--<main id="main" class="site-main" role="main">-->

		<?php
		if ( have_posts() ) : ?>

			<div class="post">
				<?php
					the_archive_title( '<h3 class="post-heading">', '</h3>' );
					the_archive_description( '<div class="post-description">', '</div>' );
				?>
			</div><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
