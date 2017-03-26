<?php
/**
 * Blog Name Theme Customizer
 *
 * @package Blog_Name
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blog_name_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	//Site Name
	$wp_customize->add_section('site_title',array(
		'title'		=>	__('Enter site name', 'blog-name'),
		'priority'	=>	1
	));

	$wp_customize->add_setting('first_word', array(
		'default'	=>	'blog',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('first_word', array(
		'label'		=>	__('Enter first word','blog-name'),
		'section'	=>	'site_title',
		'setting'	=>	'first_word',
		'type'		=>	'text'
	));

	$wp_customize->add_setting('second_word', array(
		'default'	=>	'name',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('second_word', array(
		'label'		=>	__('Enter second word','blog-name'),
		'section'	=>	'site_title',
		'settings'	=>	'second_word',
		'type'		=>	'text'
	));

	//Switch main color of the site

	$wp_customize -> add_setting('site_main_color', array(
		'default'	=>	'#ffd500',
		'transport'	=>	'postMessage',
	));
	$wp_customize -> add_control(
		new WP_Customize_Color_Control($wp_customize,'main_color',array(
				'priority'	=>	1,
				'label'		=>	__('Brand color','blog-name'),
				'section'	=>	'colors',
				'settings'	=>	'site_main_color',
			)
		)
	);

	//Add effects to the slider

	$wp_customize->add_section('slide_option',array(
		'title'		=>	__('Effects for slider', 'blog-name'),
		'priority'	=>	1
	));

	$wp_customize->add_setting('fade_slide_options', array(
		'default'	=>	'fade',
		'transport'	=>	'postMessage'
	));

	$wp_customize->add_control('fade_slide_options', array(
		'section'	=>	'slide_option',
		'label'		=>	__('Choice effect for slider','blog-name'),
		'type'		=>	'radio',
		'choices'	=>	array(
							'slide'	=>	__('slide','blog-name'),
							'fade'	=>	__('fade','blog-name')
		)
	));

	//Add title to the front page
	$wp_customize->add_section('blog_title',array(
		'title'		=>	__('Title for blog', 'blog-name'),
		'priority'	=>	1
	));
	$wp_customize->add_setting('front_page_title',array(
		'default'	=>	__('Latest Blog Post','blog-name'),
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('front_page_title',array(
		'label'		=>	__('Enter title for the blog posts','blog-name'),
		'section'	=>	'blog_title',
		'settings'	=>	'front_page_title'
	));


	//Add sidebar banner
	$wp_customize->add_section('sidebar_banner',array(
		'title'		=>	__('Sidebar banner', 'blog-name'),
		'priority'	=>	2
	));

	$wp_customize->add_setting('sidebar_image', array(
		'transport'	=>	'postMessage'
	));

	$wp_customize->add_control(
		new WP_Customize_Image_Control( $wp_customize,'sidebar_image',array(
				'label'      => __( 'Upload an image', 'blog-name' ),
				'section'    => 'sidebar_banner',
				'settings'   => 'sidebar_image'
			)
		)
	);

	//Add names to categories pages

	$wp_customize->add_section('pages_names',array(
		'title'		=>	__("Page's names", 'blog-name'),
		'priority'	=>	3
	));
	$cat = apply_filters( 'pages_names', 6 );
	for ( $i = 1; $i < ( 1 + $cat ); $i++ ) {
		$wp_customize->add_setting( 'category_' . $i, array(
			'default'           => '',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'category_' . $i, array(
			'label'          => sprintf( __( 'Category %d page title', 'blog-name' ), $i ),
			'section'        => 'pages_names',
			'type'           => 'text'
		) );


	};


	//Contact page customize
	$wp_customize->add_section('contact_page', array(
		'title'		=> __('Contact page', 'blog-name'),
		'priority'	=>4
	));

	$wp_customize->add_setting('subtitle',array(
		'default'		=>__('Morbi accumsan ipsum velit.'),
		'transport'		=>'postMessage'
	));
	$wp_customize->add_control('subtitle',array(
		'label'		=>__('Subtitle Contact page','blog-name'),
		'section'	=>'contact_page',
		'type'		=>'text'
	));

	$wp_customize->add_setting('description',array(
		'default'		=>__('Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
		 					  consequat auctor eu in elit.'),
		'transport'		=>'postMessage'
	));
	$wp_customize->add_control('description',array(
		'label'		=>__('Description us','blog-name'),
		'section'	=>'contact_page',
		'type'		=>'text'
	));

	$wp_customize->add_setting('contact_image',array(
		'transport'		=>'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control( $wp_customize,'contact_image',array(
				'label'      => __( 'Upload an image', 'blog-name' ),
				'section'    => 'contact_page',
				'settings'   => 'contact_image'
			)
	));

	$wp_customize->add_setting('phone_number',array(
		'default'	=>	'123.456.7890',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('phone_number',array(
		'label'		=>__('Fill your contact phone number','blog-name'),
		'section'	=>'contact_page',
	));

	$wp_customize->add_setting('small_exp',array(
		'default'	=>	__('Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.',
							'blog-name'),
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('small_exp',array(
		'label'		=>	__('Fill some info about you','blog-name'),
		'section'	=>	'contact_page',
		'type'		=>	'textarea'
	));

	$wp_customize->add_setting('email',array(
		'default'	=>	'info@domain.com',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('email',array(
		'label'		=>	__('Fill your contact email','blog-name'),
		'section'	=>	'contact_page',
	));



	//Footer customize

	$wp_customize->add_section('copyrights',array(
		'title'		=>	__('Copyrights', 'blog-name'),
		'priority'	=>	5
	));

	$wp_customize->add_setting('footer_copyright',array(
		'default'	=>	__('Copyright'),
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('footer_copyright',array(
		'label'		=>	__('Fill copyright warning','blog-name'),
		'section'	=>	'copyrights'
	));

	//Footer social links
	$wp_customize->add_section('social_links',array(
		'title'		=>	__('Social links','blog-name'),
		'priority'	=>	6
	));
	//first link
	$wp_customize->add_setting('social_link_1',array(
		'default'	=>	'https://www.facebook.com/',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('social_link_1',array(
		'label'		=>	__('Enter link to your facebook page'),
		'section'	=>	'social_links',
		'settings'	=>	'social_link_1'
	));

	$wp_customize->add_setting('social_link_2',array(
		'default'	=>	'https://www.twitter.com/',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('social_link_2',array(
		'label'		=>	__('Enter link to your twitter page'),
		'section'	=>	'social_links',
		'settings'	=>	'social_link_2'
	));

	$wp_customize->add_setting('social_link_3',array(
		'default'	=>	'https://www.linkedin.com/',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('social_link_3',array(
		'label'		=>	__('Enter link to your linkedin page'),
		'section'	=>	'social_links',
		'settings'	=>	'social_link_3'
	));







}
add_action( 'customize_register', 'blog_name_customize_register' );

/********************/

function blog_name_customizer_action() {

	?>
	<script>
		jQuery(function ($) {
			$('.slider').slick({
				dots: true,
				arrows: false,
				cssEase: 'ease-in',
				slidesToShow: 1,
				autoplay: true,
				<?php if (get_theme_mod('fade_slide_options')==='slide') { ?>

				SlideToScroll: 1,

				<?php }  else  {?>
				fade: true,
				<?php } ?>
				speed: 500
			});
		});
	</script>



<?php }

add_action( 'wp_head', 'blog_name_customizer_action' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blog_name_customize_preview_js() {
	wp_enqueue_script( 'blog_name_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'blog_name_customize_preview_js' );