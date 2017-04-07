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
		'name'          => esc_html__( 'Popular posts', 'businessplus' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
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

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/vendor/js/jquery.js', array(),'', true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(),'', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/vendor/js/slick.js', array(), '', true);

	wp_enqueue_script( 'businessplus-main-js', get_template_directory_uri().'/js/main.js', array(), '', true);
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
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';




//Filters for the excerpt
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
	$new_fields = array();
	$myorder = array('author','email','phone','comment');

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


function businessplus_list_comment($comment, $args, $depth) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
		<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<?php printf( __( '<cite class="fn">%s</cite> ' ), get_comment_author_link() ); ?>
	</div>
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<br />
	<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
			/* translators: 1: date, 2: time */
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
		?>
	</div>

	<?php comment_text(); ?>

	<div class="reply">
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
		</div>
	<?php endif; ?>
	<?php
}

add_filter('wp_list_categories', 'add_span_cat_count');
function add_span_cat_count($links) {
	$links = str_replace('</a> (', '</a> <span>(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}


function wp_custom_archive($args = '') {
	global $wpdb, $wp_locale;
	$defaults = array(
		'limit' => '',
		'format' => 'html', 'before' => '',
		'after' => '', 'show_post_count' => false,
		'echo' => 1
	);
	$r = wp_parse_args( $args, $defaults );
	extract( $r, EXTR_SKIP );
	if ( '' != $limit ) {
		$limit = absint($limit);
		$limit = ' LIMIT '.$limit;
	}
	// over-ride general date format ? 0 = no: use the date format set in Options, 1 = yes: over-ride
	$archive_date_format_over_ride = 0;
	// options for daily archive (only if you over-ride the general date format)
	$archive_day_date_format = 'Y/m/d';
	// options for weekly archive (only if you over-ride the general date format)
	$archive_week_start_date_format = 'Y/m/d';
	$archive_week_end_date_format   = 'Y/m/d';
	if ( !$archive_date_format_over_ride ) {
		$archive_day_date_format = get_option('date_format');
		$archive_week_start_date_format = get_option('date_format');
		$archive_week_end_date_format = get_option('date_format');
	}
	//filters
	$where = apply_filters('customarchives_where', "WHERE post_type = 'post' AND post_status = 'publish'", $r );
	$join = apply_filters('customarchives_join', "", $r);
	$output = '<ul>';
	$query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC $limit";
	$key = md5($query);
	$cache = wp_cache_get( 'wp_custom_archive' , 'general');
	if ( !isset( $cache[ $key ] ) ) {
		$arcresults = $wpdb->get_results($query);
		$cache[ $key ] = $arcresults;
		wp_cache_set( 'wp_custom_archive', $cache, 'general' );
	} else {
		$arcresults = $cache[ $key ];
	}
	if ( $arcresults ) {
		$afterafter = $after;
		foreach ( (array) $arcresults as $arcresult ) {
			$url = get_month_link( $arcresult->year, $arcresult->month );
			/* translators: 1: month name, 2: 4-digit year */
			$text = sprintf(__('%s'), $wp_locale->get_month($arcresult->month));
			$year_text = sprintf('<li>%d</li>', $arcresult->year);
			if ( $show_post_count )
				$after = '&nbsp;('.$arcresult->posts.')' . $afterafter;
			$output .= ( $arcresult->year != $temp_year ) ? $year_text : '';
			$output .= get_archives_link($url, $text, $format, $before, $after);
			$temp_year = $arcresult->year;
		}
	}
	$output .= '</ul>';
	if ( $echo )
		echo $output;
	else
		return $output;
}