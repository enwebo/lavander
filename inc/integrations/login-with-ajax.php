<?php
/**
 * Custom functions that deal with the integration of Login with Ajax.
 * See: https://wordpress.org/plugins/login-with-ajax/
 *
 * @package Lavander
 */

function lavander_lwa() {
	if ( lavander_using_lwa() ) {
		$atts = array(
			'profile_link' => true,
			'template'     => 'divs-only',
			'registration' => true,
			'redirect'     => true,
			'remember'     => true
		);

		return LoginWithAjax::shortcode( $atts );
	}

	return '';
}
