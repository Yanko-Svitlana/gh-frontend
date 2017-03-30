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

	//Add section witch
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

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businessplus_customize_preview_js() {
	wp_enqueue_script( 'businessplus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'businessplus_customize_preview_js' );
