<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Name
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			&copy;<span class="copyright"><?php echo get_theme_mod( 'footer_copyright' ); echo the_time('Y')?></span>


			<ul class="social-links">
				<li>
					<a href="<?php echo get_theme_mod('social_link_1');?>"><i class="fa fa-facebook"></i></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('social_link_2');?>"><i class="fa fa-twitter"></i></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod('social_link_3');?>"><i class="fa fa-linkedin"></i></a>
				</li>
			</ul>

			<?php /*wp_nav_menu( array(
			'theme_location' => 'social-links-menu',
			'container'		 => '',
			) ); */?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
