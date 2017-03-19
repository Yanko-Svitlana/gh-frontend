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

/******************* Custom Customizer*********************************/

	$wp_customize->add_section( 'display_controls' , array(
		'title'      => __( 'Display sections', 'businessplus' ),
		'priority'   => 3,
	) );
	/*  Section About  */
	$wp_customize->add_setting( 'display_about_us' , array(
		'default'   => true,
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_about_us' , array(
		'section'	=>	'display_controls',
		'label'		=>	__('Do you wont to display "About us" section?', 'businessplus'),
		'type'		=> 'checkbox',
	)));

	/* Section Services*/
	$wp_customize->add_setting( 'display_services' , array(
		'default'   => true,
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Control ( $wp_customize ,'display_services' , array(
		'section'	=>	'display_controls',
		'label'		=>	__('Do you wont to display "Services" section?', 'businessplus'),
		'type'		=> 'checkbox',
	)));
	/* Section Testimonials*/
	$wp_customize->add_setting( 'display_testimonials' , array(
		'default'   => true,
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control(new WP_Customize_Control ( $wp_customize , 'display_testimonials' , array(
		'section'	=>	'display_controls',
		'label'		=>	__('Do you wont to display "Testimonials" section?', 'businessplus'),
		'type'		=> 'checkbox',
	)));

	/* Section News */
	$wp_customize->add_setting( 'display_news' , array(
		'default'   => true,
		'transport' => 'postMessage',
	) );

	$wp_customize-> add_control ( new WP_Customize_Control ( $wp_customize , 'display_news' , array(
		'section'	=>	'display_controls',
		'label'		=>	__('Do you wont to display "News" section?', 'businessplus'),
		'type'		=> 'checkbox',
	)));

	/* Section Partners */
	$wp_customize->add_setting( 'display_partners' , array(
		'default'   => true,
		'transport' => 'postMessage',
	) );

	$wp_customize->add_control ( new WP_Customize_Control ( $wp_customize , 'display_partners' , array(
		'section'	=>	'display_controls',
		'label'		=>	__('Do you wont to display "Partners" section?', 'businessplus'),
		'type'		=> 'checkbox',
	)));

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

/******************** End Custom Customizer*********************************/


}
add_action( 'customize_register', 'businessplus_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businessplus_customize_preview_js() {
	wp_enqueue_script( 'businessplus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'businessplus_customize_preview_js' );
