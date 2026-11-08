<?php
/**
 * Lauren Kapraun Portfolio theme functions.
 */

// Load theme.css on the site
add_action( 'wp_enqueue_scripts', function () {
	$path = get_theme_file_path( 'assets/css/theme.css' );
	wp_enqueue_style(
		'kapraun-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		file_exists( $path ) ? filemtime( $path ) : null
	);
} );

// Load the same file in the site editor, so what you see there matches the site
add_action( 'after_setup_theme', function () {
	add_editor_style( 'assets/css/theme.css' );
} );
