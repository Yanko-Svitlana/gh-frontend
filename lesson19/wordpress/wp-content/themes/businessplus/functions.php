<?php
/**
 * BusinessPlus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BusinessPlus
 */

if ( ! function_exists( 'businessplus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function businessplus_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on BusinessPlus, use a find and replace
	 * to change 'businessplus' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'businessplus', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Primary', 'businessplus' ),
		'menu_footer' => esc_html__( 'Footer menu', 'businessplus')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'businessplus_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'businessplus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function businessplus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'businessplus_content_width', 640 );
}
add_action( 'after_setup_theme', 'businessplus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function businessplus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'businessplus' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'businessplus' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'businessplus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function businessplus_scripts() {
	wp_enqueue_style( 'businessplus-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
	wp_enqueue_style( 'businessplus-raleway', '//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800');
	wp_enqueue_style( 'businessplus-lora', '//fonts.googleapis.com/css?family=Lora:400,400i');

	wp_enqueue_style( 'reset', get_template_directory_uri(). '/libs/reset.css');

	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/libs/bootstrap.min.css');

	wp_enqueue_style('fontawesome', get_template_directory_uri(). '/libs/font-awesome.min.css');

	wp_enqueue_style('slick', get_template_directory_uri(). '/libs/slick.css');

	wp_enqueue_style( 'businessplus-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'businessplus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'businessplus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(),'', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/vendor/js/slick.js', array(), '', true);

	wp_enqueue_script( 'businessplus-slider', get_template_directory_uri().'/js/slider.js', array(), '20170311', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'businessplus_scripts' );

/*****************Custom Post types**************************/
/**
 * Icons for Type:
 * https://developer.wordpress.org/resource/dashicons/
 */

function create_services() {
	register_post_type( 'services',
		array(
			'labels' => array(
				'name' => 'Services',
				'singular_name' => 'Service',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New service',
				'edit' => 'Edit',
				'edit_item' => 'Edit service',
				'new_item' => 'New service',
				'view' => 'View',
				'view_item' => 'View service',
				'search_items' => 'Search',
				'not_found' => 'No found',
				'not_found_in_trash' => 'No in Trash',
				'parent' => 'Parent'
			),
			'public' => true,
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies' => array( '' ),
			'has_archive' => true,
			'menu_icon' =>  'dashicons-admin-generic',
			'has_archive' => true,
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_services' );

function allowAuthorEditing()
{
	add_post_type_support( 'testimonials', 'author' );
}
add_action('init','allowAuthorEditing');


function create_testimonials() {
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => 'Testimonials',
				'singular_name' => 'Testimonial',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New testimonial',
				'edit' => 'Edit',
				'edit_item' => 'Edit testimonial',
				'new_item' => 'New testimonial',
				'view' => 'View',
				'view_item' => 'View testimonial',
				'search_items' => 'Search',
				'not_found' => 'No found',
				'not_found_in_trash' => 'No in Trash',
				'parent' => 'Parent'
			),
			'public' => true,
			'menu_position' => 8,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'author' ),
			'taxonomies' => array( '' ),
			'menu_icon' => 'dashicons-testimonial',
			'has_archive' => true
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_testimonials' );

function create_partners() {
	register_post_type( 'partners',
		array(
			'labels' => array(
				'name' => 'Partners',
				'singular_name' => 'Partner',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New partner',
				'edit' => 'Edit',
				'edit_item' => 'Edit partner',
				'new_item' => 'New partner',
				'view' => 'View',
				'view_item' => 'View partner',
				'search_items' => 'Search',
				'not_found' => 'No found',
				'not_found_in_trash' => 'No in Trash',
				'parent' => 'Parent'
			),
			'public' => true,
			'menu_position' => 8,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies' => array( '' ),
			'menu_icon' => 'dashicons-groups',
			'has_archive' => true
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_partners' );

/********************* Customizer action from database*************************/

function display_options_customizer_css(){
?>
	<style type="text/css">
		<?php if( false === get_theme_mod( 'display_about_us' ) ) {?>
		#about { display: none; }
		<?php } ;// end if ?>

		<?php if( false === get_theme_mod( 'display_services' ) ) {?>
		#services { display: none; }
		<?php } ;// end if ?>

		<?php if( false === get_theme_mod( 'display_testimonials' ) ) {?>
		#testimonials { display: none; }
		<?php } ;// end if ?>

		<?php if( false === get_theme_mod( 'display_news' ) ) {?>
		#news { display: none; }
		<?php } ;// end if ?>

		<?php if( false === get_theme_mod( 'display_partners' ) ) {?>
		#partners { display: none; }
		<?php } ;// end if ?>
	</style>

<?php

}add_action( 'wp_head', 'display_options_customizer_css' );

/**************************/
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Pagination
 */


add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );