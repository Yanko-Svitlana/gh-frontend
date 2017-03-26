<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Name
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div class="subscribe-form">
		<h2>Sign Up for Newsletter</h2>
		<form role="subscribe" method="post" class="subscribe" action="http://localhost/homework/gh-frontend/lesson23/">
			<ul>
				<li>
					<input type="text" class="" placeholder="Name"  name="name">
				</li>
				<li>
					<input type="email" class="" placeholder="Email" name="email">
				</li>
				<li>
					<input type="submit" value="Subscribe" class="btn">
				</li>
			</ul>
		</form>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="sidebar-banner">
		<img src="<?php echo esc_url( get_theme_mod('sidebar_image'));?>" alt="banner">
	</div>
</aside><!-- #secondary -->
