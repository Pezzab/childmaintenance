<?php

add_action( 'after_setup_theme', 'childmaintenance_setup', 11 );

function childmaintenance_setup() {

	/* Get the parent theme prefix. */
	$prefix = hybrid_get_prefix();

	/* Actions and filters calls go here in the future. */
	add_action( 'wp_print_scripts', 'childmaintenance_dequeue_script', 100 );
	add_action( 'wp_enqueue_scripts', 'childmaintenance_scripts' );
}

function childmaintenance_scripts() {

	wp_enqueue_script( 'childmaintenance-concat', get_stylesheet_directory_uri() . '/js/concat.js', array( 'jquery' ), '1.0', true );


}


function childmaintenance_dequeue_script() {

   wp_dequeue_script( 'parentalguidance-bootstrap' );
}
