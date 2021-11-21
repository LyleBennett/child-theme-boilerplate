<?php
// Example on how to add custom custom style options to the Gutenberg buttons
add_action('init', function() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'plain-text-button',
			'label' => __( 'Plain Text', 'plain-text-button' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'arrow-button',
			'label' => __( 'Right Arrow', 'arrow-button' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'jumbo-button',
			'label' => __( 'Jumbo', 'jumbo-button' ),
		)
	);
});