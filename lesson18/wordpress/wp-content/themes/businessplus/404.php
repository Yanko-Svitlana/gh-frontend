<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BusinessPlus
 */

get_header(); ?>


	<section class="error-content section">
		<div class="container">
			<div class="info">
				<p class="error-heading"><?php esc_html_e( 'error', 'businessplus' ); ?>
					<span class="big-number"><?php esc_html_e( '404', 'businessplus' )?></span>
					<?php esc_html_e( 'not found', 'businessplus' )?>
				</p>
				<p class="error-description"><?php esc_html_e( 'You may have mis-typed the URL Or the page has been removed', 'businessplus' )?></p>
			</div>
		</div>
	</section>

<?php
get_footer();
