<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blog_Name
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
					<div class="wrapper">
						<header class="page-header">
							<?php
								if  ( is_category()) {
									$var = get_the_category();
									for ( $i = 1; $i < 7; $i++ ) {
										if ($var[0]->cat_name === 'Category '.$i) {
											echo get_theme_mod('category_'.$i);
										}
									}
								}
							?>
						</header><!-- .page-header -->
						<div class="masonry">
							<?php
							$args = array('post_type' => 'post');
							$query = new WP_Query($args);

							if($query -> have_posts()) {
								while ($query->have_posts()):
									$query->the_post();
									get_template_part('template-parts/content', 'gallery');
								endwhile; ?>
								<div class="pagination">
								<?php echo paginate_links(array(
									'total' => $query->max_num_pages,
									'prev_next' => false
								)); ?>
								</div><?php
							}else {
								get_template_part('template-parts/content', 'none');
							}?>
						</div><!--masonry-->
						<?php	wp_reset_query();?>
					</div><!--.wrapper-->

				</main><!-- #main -->
			<?php get_sidebar();?>
		</div><!-- #primary -->
	</div>

<?php

get_footer();
