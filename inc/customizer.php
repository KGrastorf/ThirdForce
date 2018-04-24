<?php
/**
 * Third Force Communication and Coaching Theme Customizer
 *
 * @package Third_Force_Communication_and_Coaching
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function third_force_communication_and_coaching_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'third_force_communication_and_coaching_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'third_force_communication_and_coaching_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'third_force_communication_and_coaching_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function third_force_communication_and_coaching_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function third_force_communication_and_coaching_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function third_force_communication_and_coaching_customize_preview_js() {
	wp_enqueue_script( 'third-force-communication-and-coaching-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'third_force_communication_and_coaching_customize_preview_js' );
