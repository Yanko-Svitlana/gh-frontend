<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Deliver
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name')?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php

	if (is_front_page()){
		echo '<section class="hero front-page">';
	}
	else	echo '<section class="hero">';
	?>
	
	<header>
		<div class="container">
			<div id="masthead" class="site-header" role="banner">

				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
				<?php
				endif;?>
				<!-- .site-title -->

				<!-- Social links menu-->
				<?php
				wp_nav_menu(array (
					'theme_location' => 'social-links-menu',
					'menu_class' 	 => 'social-links-menu',
					'container'		 => '',
				));
				?>
				<!-- END  links menu-->
			</div>


			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<i class="fa fa-bars"></i>
				</button>
				<?php
				if(is_front_page()){
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu_class'	 => 'front-page-menu'
					));
				}else{
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
					));
				}; ?>
				<div class="search">
					<?php get_search_form();?>
				</div>
			</nav><!-- #site-navigation -->


		</div><!-- .container -->

	</header><!-- #masthead -->

	<?php
	if (is_front_page()) { ?>
		<div class="slider">
			<div class="intro">
				<h2>We <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class='green' rel="home">Deliver</a> nothing Short of Awesome!</h2>
				<p class="intro-description">Check out our portfolio to see our great work.</p>
				<a href="#portfolio" class="btn">Portfolio</a>
			</div>
			<div class="intro">
				<h2>We <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class='green'rel="home">Deliver</a> nothing Short of Awesome!</h2>
				<p class="intro-description">Check out our portfolio to see our great work.</p>
				<a href="#portfolio" class="btn">Portfolio</a>
			</div>
			<div class="intro">
				<h2>We <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class='green' rel="home">Deliver</a> nothing Short of Awesome!</h2>
				<p class="intro-description">Check out our portfolio to see our great work.</p>
				<a href="#portfolio" class="btn">Portfolio</a>
			</div>
			<div class="intro">
				<h2>We <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class='green'rel="home">Deliver</a> nothing Short of Awesome!</h2>
				<p class="intro-description">Check out our portfolio to see our great work.</p>
				<a href="#portfolio" class="btn">Portfolio</a>
			</div>
		</div>

		<?php
	} ?>
	</section>

	<div id="content" class="site-content">
