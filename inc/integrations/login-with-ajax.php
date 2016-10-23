<?php
/**
 * Custom functions that deal with the integration of Login with Ajax.
 * See: https://wordpress.org/plugins/login-with-ajax/
 *
 * @package Lavander
 */

function lavander_lwa() {
	//double check just to be sure
	if ( lavander_using_lwa() ) {
		$atts = array(
			'profile_link' => true,
			'template'     => 'modal',
			'registration' => true,
			'redirect'     => false,
			'remember'     => true
		);

		return LoginWithAjax::shortcode( $atts );
	}

	return '';
}
