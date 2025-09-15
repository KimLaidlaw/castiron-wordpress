<?php
/**
 * Functions enqueue
 * Enqueue styles and scripts
 */

// block direct access
if ( !defined( 'WPINC' ) ) {
	exit( 'This file cannot be accessed directly.' );
}

// enqueue main theme stylesheet
function _castiron_enqueue_styles() {
	wp_enqueue_style( 
		'castiron-google-fonts', 
		'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"',
		false 
); 
	wp_enqueue_style(
		'theme-styles', 
		get_template_directory_uri() . '/assets/css/style.css', 
		false, 
		filemtime( get_template_directory() . '/assets/css/style.css' )
	);
}
add_action('wp_enqueue_scripts', '_castiron_enqueue_styles');


