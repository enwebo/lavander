<?php
/**
 * Custom functions that deal with the integration of Login with Ajax.
 * See: https://wordpress.org/plugins/login-with-ajax/
 *
 * @package Lavander
 */

/**
 * Show Login with Ajax forms.
 *
 * @return string Returns shortcode generated content.
 */
function lavander_lwa() {
	if ( function_exists( 'login_with_ajax' ) ) {
		$atts = array(
			'profile_link' => true,
			'template'     => 'divs-only',
			'registration' => true,
			'redirect'     => true,
			'remember'     => true,
		);

		return LoginWithAjax::shortcode( $atts );
	}

	return '';
}
