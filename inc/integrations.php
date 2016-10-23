<?php
/**
* Require files that deal with various plugin integrations.
 *
 * @package Lavander
 */

/**
 * Load Login with Ajax compatibility file.
 * https://wordpress.org/plugins/login-with-ajax/
 */
if ( class_exists( 'LoginWithAjax' ) ) {
	require get_template_directory() . '/inc/integrations/login-with-ajax.php';
}

function lavander_using_lwa() {
	//just this for now
	return function_exists( 'login_with_ajax' );
}
