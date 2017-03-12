<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BusinessPlus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name')?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_enqueue_script("jquery"); ?>	
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
global $post;
if ( isset( $post ) ) {
	$classesName = $post->post_type . '-' . $post->post_name;
}
	if (is_front_page()){
		echo '<section class="hero section">';
	} elseif (is_404()){
		echo '<section class="hero-404 top section">';

	} else echo '<section class="hero-blog top section ' . $classesName . '">';

?>

	<header>
		<div class="container">
			<h1 class="logo pull-left">
				<a href="<?php echo esc_url( home_url( '/' )); ?>">
					<img src="<?php echo get_template_directory_uri() ?>./img/businessplus-logo.png" alt="<?php bloginfo( 'name' ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<a href="tel:+9978 8856 999" class="contact-phone-number pull-left">+9978 8856 999</a>
			<nav class="navbar navbar-default pull-right" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-exam">
						<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_class' => 'navbar-nav', 'container'=> '' ) ); ?>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="container">

		<?php
		if (is_front_page()) : ?>
		<div class="sliders">
			<div class="slide1 intro">
				<h3 class="heading">Welcome to <span class="logo-heading">Business Pluss</span></h3>
				<p class="intro-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry
					Lorem Ipsum has been the industry's standard dummy text ever.</p>
				<a href="#about" class="btn">Read more</a>
			</div>
			<div class="slide1 intro">
				<h3 class="heading">Welcome to <span class="logo-heading">Business Pluss</span></h3>
				<p class="intro-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry
					Lorem Ipsum has been the industry's standard dummy text ever.</p>
				<a href="#about" class="btn">Read more</a>
			</div>
			<div class="slide1 intro">
				<h3 class="heading">Welcome to <span class="logo-heading">Business Pluss</span></h3>
				<p class="intro-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry
					Lorem Ipsum has been the industry's standard dummy text ever.</p>
				<a href="#about" class="btn">Read more</a>
			</div>
		</div>

		<?php
			endif;
		?>
	</div>
</section>





	<!-- #masthead -->
