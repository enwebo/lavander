<?php
/**
 * Customizer panels.
 *
 * @package Lavander
 */

/**
 * Add a custom panels to attach sections too.
 */
function lavander_customize_panels( $wp_customize ) {

	// Register a new panel.
	$wp_customize->add_panel( 'site-options', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Site Options', 'lavander' ),
		'description'    => esc_html__( 'Other theme options.', 'lavander' ),
	) );
}
add_action( 'customize_register', 'lavander_customize_panels' );
