<?php
/**
 * Deliver functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Deliver
 */

if ( ! function_exists( 'deliver_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deliver_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Deliver, use a find and replace
	 * to change 'deliver' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'deliver', get_template_directory() . '/languages' );

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
		'main-menu' => esc_html__( 'Primary', 'deliver' ),

		'social-links-menu' => esc_html__( 'Social links menu', 'deliver' ),

		'footer-menu' => esc_html__('Footer menu', 'deliver'),
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
	add_theme_support( 'custom-background', apply_filters( 'deliver_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'deliver_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deliver_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deliver_content_width', 640 );
}
add_action( 'after_setup_theme', 'deliver_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deliver_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deliver' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deliver' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'deliver_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deliver_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri(). '/libs/reset.css');

	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/libs/bootstrap.min.css');

	wp_enqueue_style('fontawesome', get_template_directory_uri(). '/libs/font-awesome.min.css');

	wp_enqueue_style('slick', get_template_directory_uri(). '/libs/slick.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri(). '/libs/slick-theme.css');

	wp_enqueue_style( 'deliver-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/js/jquery.js', array(), '', true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(),'', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/vendor/js/slick.js', array(), '', true);

	wp_enqueue_script( 'deliver-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'deliver-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'deliver-slider', get_template_directory_uri() . '/js/slider.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deliver_scripts' );

/**Menu-icons*/
add_filter( 'storm_social_icons_use_latest', '__return_true' );

/**
 * Icons for Type:
 * https://developer.wordpress.org/resource/dashicons/
 */

function create_features() {
	register_post_type( 'features',
		array(
			'labels' => array(
				'name' => 'Features',
				'singular_name' => 'Feature',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New feature',
				'edit' => 'Edit',
				'edit_item' => 'Edit feature',
				'new_item' => 'New feature',
				'view' => 'View',
				'view_item' => 'View feature',
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
			'menu_icon' =>  'dashicons-sticky',
			'has_archive' => false,
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_features' );


function create_team() {
	register_post_type( 'team',
		array(
			'labels' => array(
				'name' => 'Team',
				'singular_name' => 'Team item',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New team item',
				'edit' => 'Edit',
				'edit_item' => 'Edit team item',
				'new_item' => 'New team item',
				'view' => 'View',
				'view_item' => 'View team',
				'search_items' => 'Search',
				'not_found' => 'No found',
				'not_found_in_trash' => 'No in Trash',
				'parent' => 'Parent'
			),
			'public' => true,
			'menu_position' => 6,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'author' ),
			'taxonomies' => array( '' ),
			'has_archive' => true,
			'menu_icon' =>  'dashicons-groups',
			'has_archive' => false,
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_team' );


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
			'menu_position' => 7,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies' => array( '' ),
			'has_archive' => true,
			'menu_icon' =>  'dashicons-admin-generic',
			'has_archive' => false,
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_services' );


function create_works() {
	register_post_type( 'works',
		array(
			'labels' => array(
				'name' => 'Works',
				'singular_name' => 'Work',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New work',
				'edit' => 'Edit',
				'edit_item' => 'Edit work',
				'new_item' => 'New work',
				'view' => 'View',
				'view_item' => 'View work',
				'search_items' => 'Search',
				'not_found' => 'No found',
				'not_found_in_trash' => 'No in Trash',
				'parent' => 'Parent'
			),
			'public' => true,
			'menu_position' => 8,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies' => array( '' ),
			'has_archive' => true,
			'menu_icon' =>  'dashicons-format-gallery',
			'has_archive' => true,
		)
	);
	flush_rewrite_rules();
}
add_action( 'init', 'create_works' );





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
 * Custom fields if comment form
 */

function add_comment_fields($fields) {

	$fields = array(
		//add Name field
		'author' =>
			'<div class="comment-form-author">
				<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			'" size="30"' . $aria_req . ' />
				<label for="author">' . __( 'Name', 'deliver' ) .'</label>'.
				( $req ? '<span class="required">*</span>' : '' ).'
				<span class="expl">'. __('Your full name please.','deliver') .'</span>
				</label>
			</div>',

		//add EMAIL field
		'email' =>
			'<div class="comment-form-email">
				<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			'" size="30"' . $aria_req . ' />
				<label for="email">' . __( 'Email address', 'deliver' ) . ( $req ? '<span class="required">*</span>' : '' ) .'
					<span class="expl">'.__('Used for gravatar.', 'deliver') .'</span>
				</label> 
			</div>',

		//add WEBSITE field
		'url' =>
			'<div class="comment-form-url">
				<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
			'" size="30" />
				<label for="url">' . __( 'Website', 'deliver' ) . '
					<span class="expl">'.__('Link back if you want.', 'deliver') .'</span>
				</label>
			</div>',

		);
	return $fields;

}
add_filter('comment_form_default_fields','add_comment_fields');

/**
 * Add values to the database
 */

function add_comment_meta_values($comment_id) {
	if(isset($_POST['author'])) {
		$author = wp_filter_nohtml_kses($_POST['author']);
		add_comment_meta($comment_id, 'author', $author, false);
	};

	if(isset($_POST['email'])) {
		$email = wp_filter_nohtml_kses($_POST['email']);
		add_comment_meta($comment_id, 'email', $email, false);
	};

	if(isset($_POST['url'])) {
		$url = wp_filter_nohtml_kses($_POST['url']);
		add_comment_meta($comment_id, 'url', $url, false);
	};

}
add_action ('comment_post', 'add_comment_meta_values');

function sort_comment_fields( $fields ){
	$new_fields = array();
	$myorder = array('author','email','url','comment'); // порядок полей

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