<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deliver
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="about-company col-lg-4 col-xl-4">
					<div class="logo-footer">
						<h2 class="footer site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<?php
						wp_nav_menu(array (
							'theme_location' => 'social-links-menu',
							'menu_class' 	 => 'social-links-menu'
						));?>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum placerat. Proin eu mi
						vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.
					</p>
				</div>

				<div class="contact-info col-lg-2 col-xl-2">
					<h2>Contact info</h2>
					<ul>
						<li>
							<address>
								222 Ave C South
								Saskatoon, Saskatchewan
								Canada S7K 2N5
							</address>
						</li>
						<li>
							<a class="company-email" href="mailto:info@deliver.ca">info@deliver.ca</a>
						</li>
						<li>
							<a class="phone-number" href="tel:+13062223456">1.306.222.3456</a>
						</li>
					</ul>
				</div>

				<div class="nav-footer col-lg-2 col-xl-2">
					<h2>Quick Links</h2>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer-menu',
						'menu_class'	 => 'footer-menu',
					));?>
				</div>

				<div class="newsletter col-lg-3 col-xl-3">
					<h2>Newsletter</h2>
					<p>
						Lorem ipsum dolor sit amet dolor consectetur adipiscing elit.
					</p>
					<input type="email" name="email" placeholder="Email">
					<input type="submit" name="submit-email" value="Ok">
				</div>
			</div>
			<span class="copyright">Copyright 2013  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Deliver</a>. All Rights Reserved.</span>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
