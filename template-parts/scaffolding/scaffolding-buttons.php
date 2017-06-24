<?php
/**
 * The template used for displaying Buttons in the scaffolding library.
 *
 * @package Lavander
 */
?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Buttons', 'lavander' ); ?></h2>

	<?php // Button.
	lavander_display_scaffolding_section( array(
		'title'       => 'Button',
		'description' => 'Display a button.',
		'usage'       => '<button class="button" href="#">Click Me</button>',
		'output'      => '<button class="button">Click Me</button>',
	) ); ?>
</section>
