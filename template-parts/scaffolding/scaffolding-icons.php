<?php
/**
 * The template used for displaying icons in the scaffolding library.
 *
 * @package Lavander
 */
?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Icons', 'lavander' ); ?></h2>

	<?php // SVG
	lavander_display_scaffolding_section( array(
		'title'       => 'SVG',
		'description' => 'Display inline SVGs.',
		'usage'       => '<?php lavander_get_svg( array( \'icon\' => \'facebook-square\' ) ); ?>',
		'parameters'  => array(
			'$args' => '(required) Configuration arguments.',
		),
		'arguments'    => array(
			'icon'  => '(required) The SVG icon file name. Default none',
			'title' => '(optional) The title of the icon. Default: none',
			'desc'  => '(optional) The description of the icon. Default: none',
		),
		'output'       => lavander_get_svg( array( 'icon' => 'facebook-square' ) ),
	) ); ?>
</section>
