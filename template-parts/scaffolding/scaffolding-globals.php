<?php
/**
 * The template used for displaying colors & fonts in the scaffolding library.
 *
 * @package Lavander
 */
?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Globals', 'lavander' ); ?></h2>

	<?php // Theme colors. ?>
	<?php lavander_display_global_scaffolding_section( array( // WPCS: XSS OK.
		'global_type' => 'colors',
		'title'       => 'Colors',
		'arguments'   => array(
			'Blue'         => '#21759b',
			'Light Yellow' => '#fff9c0',
			'Black'        => '#000000',
			'White'        => '#FFFFFF',
			'Red'          => '#f00000',
		),
	) ); ?>

	<?php // Theme fonts. ?>
	<?php lavander_display_global_scaffolding_section( array( // WPCS: XSS OK.
		'global_type'  => 'fonts',
		'title'        => 'Fonts',
		'arguments'    => array(
			'Sans'  => '"Open Sans", sans-serif',
			'Serif' => 'Roboto, Georgia, Times, "Times New Roman", serif',
			'Code'  => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace',
			'Pre'   => '"Courier 10 Pitch", Courier, monospace',
		),
	) ); ?>
</section>
