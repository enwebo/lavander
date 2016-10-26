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

/**
 * Load WooCommerce compatibility file.
 * https://www.woothemes.com/woocommerce/
 *
 * @todo implement functionality
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/integrations/woocommerce.php';
}

/**
 * Load WooCommerce Social Login compatibility file.
 * https://www.woothemes.com/products/woocommerce-social-login/
 *
 * @todo implement functionality
 */
if ( class_exists( 'WC_Social_Login' ) ) {
	require get_template_directory() . '/inc/integrations/woocommerce-social-login.php';
}

/**
 * Load WPML compatibility file.
 *
 * @todo implement functionality
 */
if ( class_exists( 'SitePress' ) ) {
	require get_template_directory() . '/inc/integrations/wpml.php';
}

/**
 * Test if Login with Ajax plugin is activated.
 */
function lavander_using_lwa() {
	return function_exists( 'login_with_ajax' );
}
