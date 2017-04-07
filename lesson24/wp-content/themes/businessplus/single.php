<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BusinessPlus
 */

get_header(); ?>
	<section class="header-section"></section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container">
			<?php
			while ( have_posts() ) : the_post();
				if(get_the_ID()){
					update_post_meta( get_the_ID(),'views_count',get_post_meta( get_the_ID(),'views_count',true )+1 );
				};
				get_template_part( 'template-parts/content', get_post_format());


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
