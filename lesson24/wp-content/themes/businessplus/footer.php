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
					<h3 class="footer-title">Navigation</h3>
					<nav id="site-navigation" class="footer-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<?php dynamic_sidebar('footer-form');?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
