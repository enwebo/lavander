<?php
/**
 * Customizer sections.
 *
 * @package Lavander
 */

/**
 * Register the section sections.
 */
function lavander_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'lavander_additional_scripts_section',
		array(
			'title'    => esc_html__( 'Additional Scripts', 'lavander' ),
			'priority' => 10,
			'panel'    => 'site-options',
		)
	);

	// Register a footer section.
	$wp_customize->add_section(
		'lavander_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customizations', 'lavander' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);
}
add_action( 'customize_register', 'lavander_customize_sections' );
