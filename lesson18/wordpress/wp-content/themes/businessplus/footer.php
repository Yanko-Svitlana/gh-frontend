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

<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-2 col-md-2">
				<h2 class="logo footer">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/img/businessplus-logo.png" alt="<?php bloginfo( 'name' ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h2>
				<span class="copiright"><?php echo date( 'Y' ); ?> B&copy; lawyer.</span>
				<ul class="social-icons">
					<li class="icon">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li class="icon">
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</li>
					<li class="icon">
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
					<li class="icon">
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2">
				<h3 class="footer-heading">Navigation</h3>

				<?php wp_nav_menu( array(
					'theme_location' => 'menu_footer',
					'menu_class' => 'footer-nav',
					'container' => false ) );
				?>

			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h3 class="footer-heading">Quick contact us</h3>
				<form class="footer-form" action="#">
					<ul>
						<li class="first-line-input">
							<input type="text" name="Name" placeholder="Name *" required>
						</li>
						<li class="first-line-input">
							<input type="email" name="email" placeholder="Email *"required>
						</li>
						<li>
							<textarea name="comment" required placeholder="Comment *"></textarea>
						</li>
					</ul>
				</form>
				<input type="submit" class="btn" name="submit" value="Submit now">
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
