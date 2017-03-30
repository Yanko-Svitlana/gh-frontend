<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BusinessPlus
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<h2 class="site-title"><?php the_custom_logo('custom-logo')?></h2>
					<span class="copyright">
						<?php echo get_theme_mod('copyrights-year');?>
						&copy;
						<?php echo get_theme_mod('copyrights')?></span>
					<ul class="footer-social-links">
						<li><a href="<?php echo get_theme_mod('social_link_1');?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo get_theme_mod('social_link_2');?>"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="<?php echo get_theme_mod('social_link_3');?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo get_theme_mod('social_link_4');?>"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
					<nav id="site-navigation" class="footer-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<?php dynamic_sidebar('footer-form');?>
				</div>
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'businessplus' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'businessplus' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'businessplus' ), 'businessplus', '<a href="https://automattic.com/" rel="designer">Yanko Svitlana</a>' ); ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
