<?php
/**
 * BusinessPlus Theme Customizer
 *
 * @package BusinessPlus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function businessplus_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//Home page panel
	$wp_customize->add_panel( 'home_page_panel', array(
		'priority' => 5,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Home page', 'businessplus' ),
		'description' => __( 'Settings of home page.', 'gh-exam' ),
	) );
		
		//About section
		$wp_customize->add_section('about_us',array(
			'title'		=> __('About us','businessplus'),
			'priority'	=>2,
			'panel'		=>'home_page_panel'
		));

			$wp_customize->add_setting('about_title',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('about_title',array(
				'section'	=>	'about_us',
				'label'		=>	__('Fill title section about', 'businessplus')
			));

			$wp_customize->add_setting('about_subtitle',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('about_subtitle',array(
				'section'	=>	'about_us',
				'label'		=>	__('Fill subtitle section about', 'businessplus')
			));

			$wp_customize->add_setting('about_description',array(
				'transport'	=>	'postMessage'
			));
			$wp_customize->add_control('about_description',array(
				'section'	=>	'about_us',
				'label'		=>	__('Fill description in section about', 'businessplus'),
				'type'		=>	'textarea'
			));

			$wp_customize->add_setting('about_btn_text',array(
				'transport'	=>	'postMessage'
			));
			$wp_customize->add_control('about_btn_text',array(
				'section'	=>	'about_us',
				'label'		=>	__('Text in button', 'businessplus')
			));

			$wp_customize->add_setting('about_link'
			);
			$wp_customize->add_control('about_link',array(
				'section'	=> 'about_us',
				'label' 	=> esc_html__('Choose page to link', 'businessplus'),
				'type'     	=> 'dropdown-pages'
			));

			$wp_customize->add_setting( 'display_about_us' , array(
				'default'	=>	true,
				'transport' => 'postMessage'
			) );
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_about_us' , array(
				'section'	=>	'about_us',
				'label'		=>	__('Do you wont to display "About us" section?', 'businessplus'),
				'type'		=> 'checkbox',
			)));


		//Services section
		$wp_customize->add_section('services',array(
			'title'		=> __('Services section','businessplus'),
			'priority'	=>3,
			'panel'		=>'home_page_panel'
		));

			$wp_customize->add_setting('services_title',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('services_title',array(
				'section'	=>	'services',
				'label'		=>	__('Fill title section services', 'businessplus')
			));

			$wp_customize->add_setting('services_subtitle',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('services_subtitle',array(
				'section'	=>	'services',
				'label'		=>	__('Fill subtitle section services', 'businessplus')
			));

			$wp_customize->add_setting('services_btn_text',array(
				'transport'	=>	'postMessage'
			));
			$wp_customize->add_control('services_btn_text',array(
				'section'	=>	'services',
				'label'		=>	__('Text in button', 'businessplus')
			));

			$wp_customize->add_setting('services_link'
			);
			$wp_customize->add_control('services_link',array(
				'section'	=> 'services',
				'label' 	=> esc_html__('Choose page to link', 'businessplus'),
				'type'     	=> 'dropdown-pages'
			));

			$wp_customize->add_setting( 'display_services' , array(
				'default'	=>	true,
				'transport' => 'postMessage'
			) );
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_services' , array(
				'section'	=>	'services',
				'label'		=>	__('Do you wont to display "Services" section?', 'businessplus'),
				'type'		=> 'checkbox',
			)));

		//Testimonials section
		$wp_customize->add_section('testimonials',array(
			'title'		=> __('Testimonials section','businessplus'),
			'priority'	=>3,
			'panel'		=>'home_page_panel'
		));

			$wp_customize->add_setting('testimonials_title',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('testimonials_title',array(
				'section'	=>	'testimonials',
				'label'		=>	__('Fill title section Testimonials', 'businessplus')
			));

			$wp_customize->add_setting('testimonials_subtitle',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('testimonials_subtitle',array(
				'section'	=>	'testimonials',
				'label'		=>	__('Fill subtitle section Testimonials', 'businessplus')
			));

			$wp_customize->add_setting( 'display_testimonials' , array(
				'default'	=>	true,
				'transport' => 'postMessage'
			) );
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_testimonials' , array(
				'section'	=>	'testimonials',
				'label'		=>	__('Display Section?', 'businessplus'),
				'type'		=> 'checkbox',
			)));

		//News section
		$wp_customize->add_section('news',array(
			'title'		=> __('News section','businessplus'),
			'priority'	=>3,
			'panel'		=>'home_page_panel'
		));
		
			$wp_customize->add_setting('news_title',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('news_title',array(
				'section'	=>	'news',
				'label'		=>	__('Fill title section News', 'businessplus')
			));

			$wp_customize->add_setting('news_subtitle',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('news_subtitle',array(
				'section'	=>	'news',
				'label'		=>	__('Fill subtitle section News', 'businessplus')
			));

			$wp_customize->add_setting('news_btn_text',array(
				'transport'	=>	'postMessage'
			));
			$wp_customize->add_control('news_btn_text',array(
				'section'	=>	'news',
				'label'		=>	__('Text in button', 'businessplus')
			));
		
			$wp_customize->add_setting('news_link'
			);
			$wp_customize->add_control('news_link',array(
				'section'	=> 'news',
				'label' 	=> esc_html__('Choose page to link', 'businessplus'),
				'type'     	=> 'dropdown-pages'
			));
		
			$wp_customize->add_setting( 'display_news' , array(
				'default'	=>	true,
				'transport' => 'postMessage'
			) );
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_news' , array(
				'section'	=>	'news',
				'label'		=>	__('Display Section?', 'businessplus'),
				'type'		=> 'checkbox',
			)));
	
	
		//Partners section
		$wp_customize->add_section('partners',array(
			'title'		=> __('Partners section','businessplus'),
			'priority'	=>3,
			'panel'		=>'home_page_panel'
		));
		
			$wp_customize->add_setting('partners_title',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('partners_title',array(
				'section'	=>	'partners',
				'label'		=>	__('Fill title section Partners', 'businessplus')
			));
		
			$wp_customize->add_setting('partners_subtitle',array(
				'transport'	=>'postMessage'
			));
			$wp_customize->add_control('partners_subtitle',array(
				'section'	=>	'partners',
				'label'		=>	__('Fill subtitle section Partners', 'businessplus')
			));

			$wp_customize->add_setting( 'display_partners' , array(
				'default'	=>	true,
				'transport' => 'postMessage'
			) );
			$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_partners' , array(
				'section'	=>	'partners',
				'label'		=>	__('DisplaySection?', 'businessplus'),
				'type'		=> 'checkbox',
			)));
		
	//Main info
	$wp_customize->add_section('main-info',array(
		'title'		=> __('Main info','businessplus'),
		'priority'	=>2
	));

	$wp_customize->add_setting('phone-number',array(
		'transport'	=>'postMessage'
	));

	$wp_customize->add_control('phone-number',array(
		'section'	=>	'main-info',
		'label'		=>	__('Fill your contact phone number', 'businessplus')
	));

	//

	//Footer section

	$wp_customize->add_section('footer',array(
		'title'		=>__('Footer custom fields', 'businessplus'),
		'priority'	=>3
	));
	//copyrights
	$wp_customize->add_setting('copyrights-year',array(
		'transport'	=>'postMessage'
	));

	$wp_customize->add_control('copyrights-year',array(
		'section'	=>	'footer',
		'label'		=>	__('Fill year of creating site', 'businessplus')
	));
	
	$wp_customize->add_setting('copyrights',array(
		'transport'	=>'postMessage'
	));

	$wp_customize->add_control('copyrights',array(
		'section'	=>	'footer',
		'label'		=>	__('Fill copyrights of this site', 'businessplus')
	));
	//social links
	$wp_customize->add_setting('social_link_1',array(
		'default'	=>	'https://www.facebook.com/',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('social_link_1',array(
		'label'		=>	__('Enter link to your facebook page'),
		'section'	=>	'footer',
		'settings'	=>	'social_link_1'
	));

	$wp_customize->add_setting('social_link_2',array(
		'default'	=>	'https://www.plus.google.com/',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('social_link_2',array(
		'label'		=>	__('Enter link to your googleplus page'),
		'section'	=>	'footer',
		'settings'	=>	'social_link_2'
	));

	$wp_customize->add_setting('social_link_3',array(
		'default'	=>	'https://www.twitter.com/',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('social_link_3',array(
		'label'		=>	__('Enter link to your twitter page'),
		'section'	=>	'footer',
		'settings'	=>	'social_link_3'
	));

	$wp_customize->add_setting('social_link_4',array(
		'default'	=>	'https://www.linkedin.com/',
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('social_link_4',array(
		'label'		=>	__('Enter link to your linkedin page'),
		'section'	=>	'footer',
		'settings'	=>	'social_link_4'
	));






}
add_action( 'customize_register', 'businessplus_customize_register' );


function custom_style() {
	?>
	<style type="text/css">
		.blog .header-section {
			background: url(<?php the_field('background-image', get_option('page_for_posts')); ?>) center /cover no-repeat;
		}
		.single .header-section {
			background: url(<?php the_field('background-image', get_option('page_for_posts')); ?>) center /cover no-repeat;
		}
		.page-template-default .header-section {
			background: url(<?php the_field('background-image', get_option('page_for_posts')); ?>) center /cover no-repeat;
		}
		
	</style>
	<?php
}
add_action('wp_head', 'custom_style');
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businessplus_customize_preview_js() {
	wp_enqueue_script( 'businessplus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'businessplus_customize_preview_js' );
