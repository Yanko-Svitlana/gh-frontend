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
		'menu-1' => esc_html__( 'Primary', 'businessplus' ),
		'footer-menu'=> esc_html__('Footer menu', 'businessplus')
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

	add_theme_support( 'custom-logo', array(
		'width'       => 164,
		'height'      => 34,
		'flex-width'  => true,
	) );
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

	register_sidebar( array(
		'name'          => esc_html__( 'Footer form', 'businessplus' ),
		'id'            => 'footer-form',
		'description'   => esc_html__( 'Add widgets here.', 'businessplus' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>'
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

	wp_enqueue_style('slick-theme', get_template_directory_uri(). '/libs/slick-theme.css');

	wp_enqueue_style( 'businessplus-style', get_stylesheet_uri() );

	wp_enqueue_script( 'businessplus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'businessplus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(),'', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/vendor/js/slick.js', array(), '', true);

	wp_enqueue_script( 'businessplus-main', get_template_directory_uri().'/js/main.js', array(), '', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'businessplus_scripts' );

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

//Filters
add_filter("the_excerpt", "break_text");
function break_text($text){
	$length = 450;
	if(strlen($text)<$length+10) return $text;//don't cut if too short

	$break_pos = strpos($text, ' ', $length);//find next space after desired length
	$visible = substr($text, 0, $break_pos);
	return balanceTags($visible) . " …</p>";
}



function sort_comment_fields( $fields ){
	if ( isset($fields['url'] ))
		unset ( $fields['url'] );

	if ( isset($fields['comment_field'] )) {
		unset ( $fields['comment_field'] );
		$fields['comment_field'] =
			'<p class="comment-form-comment">
			 <label for="comment">' . _x('Comment', 'noun') . '<span class="required">*</span></label>
			 <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>';
	};

	$fields['phone_number'] =
		'<p class="comment-form-phone">
		<label for="phone-number">	' . __( 'Phone Number' ) . '	<span class="required">*</span></label>
		<input type="tel" id="phone" name="phone" value="" size="30" aria-required="true" required>
		</p>';

	$new_fields = array();
	$myorder = array('author','email','phone_number','comment');

	if ( isset($fields['url'] ))
		unset ( $fields['url'] );

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;
	return $new_fields;
}
add_filter('comment_form_fields', 'sort_comment_fields' );

