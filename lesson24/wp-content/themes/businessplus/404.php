<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BusinessPlus
 */

get_header(); ?>
	<section class="header-section"></section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found triangles">
				<div class="container">

					<div class="info-404">
						<header>
							<h1 class="title-404">
								<?php esc_html_e( 'Error', 'businessplus' ); ?>
								<span class="blue">404</span>
								<?php esc_html_e('not found', 'businessplus');?>
							</h1>
						</header><!-- header -->

						<div class="page-content">
							<p><?php esc_html_e( 'You may have mis-typed the URL Or the page has been removed','businessplus' ); ?></p>
							<?php
/*							get_search_form();

							the_widget( 'WP_Widget_Recent_Posts' );

							// Only show the widget if site has multiple categories.
							if ( businessplus_categorized_blog() ) :
								*/?><!--

								<div class="widget widget_categories">
									<h2 class="widget-title"><?php /*esc_html_e( 'Most Used Categories', 'businessplus' ); */?></h2>
									<ul>
										<?php
/*										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
										*/?>
									</ul>
								</div><!-- .widget -->

								<?php
/*							endif;

							/* translators: %1$s: smiley */
/*							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'businessplus' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );
							*/?>

						</div><!-- .page-content -->
					</div>

				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
