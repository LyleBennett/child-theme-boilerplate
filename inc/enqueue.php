<?php
//enqueue theme files
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_script( 'scrollm', get_stylesheet_directory_uri(). '/js/min/ScrollMagic.min.js' , array('jquery'), true ); //scrollmagic
	//wp_enqueue_script( 'scrolldebug', get_stylesheet_directory_uri(). '/js/min/debug.addIndicators.min.js' , array('jquery'), true ); //for debugging scroll magic
	wp_enqueue_script( 'slick', get_stylesheet_directory_uri(). '/js/min/slick.min.js' , array('jquery'), true ); //slick slider
	wp_enqueue_script( 'child', get_stylesheet_directory_uri(). '/js/min/build.min.js' , array('jquery'), true );
	wp_localize_script(
		'child',
		'child_obj',
		array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
	);
} );

//admin styles
add_action( "admin_enqueue_scripts", function(){
    wp_register_style( 'child_admin_styles', get_stylesheet_directory_uri() . '/editor-style.css', array(), '1.0.0' );
    wp_enqueue_style( 'child_admin_styles' );
} );


