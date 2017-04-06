<?php
/**
 * gh-exam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gh-exam
 */

if ( ! function_exists( 'gh_exam_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gh_exam_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gh-exam, use a find and replace
	 * to change 'gh-exam' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gh-exam', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	//Add custom logo

	add_theme_support( 'custom-logo',array(
		'height'	=> '100',
		'width'		=>'100'
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'gh-exam' ),
		'footer-menu'=> esc_html__( 'Footer menu', 'gh-exam' ),
		'aside-menu'=> esc_html__( 'Sidebar menu', 'gh-exam' ),
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
	add_theme_support( 'custom-background', apply_filters( 'gh_exam_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gh_exam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gh_exam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gh_exam_content_width', 640 );
}
add_action( 'after_setup_theme', 'gh_exam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gh_exam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gh-exam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gh-exam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget', 'gh-exam' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'gh-exam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'gh_exam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gh_exam_scripts() {
	wp_enqueue_style( 'gh-exam-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');

	wp_enqueue_style( 'gh-exam-raleway', '//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800');

	wp_enqueue_style( 'gh-exam-lora', '//fonts.googleapis.com/css?family=Lora:400,400i');

	wp_enqueue_style( 'reset', get_template_directory_uri(). '/libs/reset.css');

	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/libs/bootstrap.min.css');

	wp_enqueue_style('fontawesome', get_template_directory_uri(). '/libs/font-awesome.min.css');

	wp_enqueue_style('slick', get_template_directory_uri(). '/libs/slick.css');

	wp_enqueue_style('slick-theme', get_template_directory_uri(). '/libs/slick-theme.css');


	wp_enqueue_style( 'gh-exam-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gh-exam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gh-exam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/vendor/js/jquery.js', array(),'', true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(),'', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/vendor/js/slick.js', array(), '', true);
	wp_enqueue_script( 'gh-exam-main-js', get_template_directory_uri().'/js/main.js', array(), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gh_exam_scripts' );

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
 * Custom post types for this theme.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
