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