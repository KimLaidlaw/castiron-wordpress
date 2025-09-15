<?php
/**
 * Functions utilities
 * Misc standalone functions 
 **/

// block direct access
if ( !defined( 'WPINC' ) ) {
	exit( 'This file cannot be accessed directly.' );
}

// disable block editor for all pages and posts
add_filter( 'use_block_editor_for_post', '__return_false'  );

// set acf pro folder location 
function _castiron_acf_json_save_point( $path ) {
	$path = get_stylesheet_directory() . '/assets/acf-json';
	return $path;
}
add_filter('acf/settings/save_json', '_castiron_acf_json_save_point');

function _castiron_acf_json_load_point( $paths ) {
   unset( $paths[0] );
   $paths[] = get_stylesheet_directory() . '/assets/acf-json';
   return $paths;
}
add_filter('acf/settings/load_json', '_castiron_acf_json_load_point');
