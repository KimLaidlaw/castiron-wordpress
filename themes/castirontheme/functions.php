<?php
/**
 * functions.php
 **/

// block direct access
if ( !defined( 'WPINC' ) ) {
	exit( 'This file cannot be accessed directly.' );
}

$template_directory = get_template_directory();

// Basic functionality
require_once $template_directory . '/includes/functions-utilities.php';

// Enqueue scripts and styles
require_once $template_directory . '/includes/functions-enqueue.php';

// Removes all comment functionality
require_once $template_directory . '/includes/functions-nocomment.php';