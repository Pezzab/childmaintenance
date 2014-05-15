<?php

add_action( 'after_setup_theme', 'childmaintenance_setup', 11 );

function childmaintenance_setup() {

	/* Get the parent theme prefix. */
	$prefix = hybrid_get_prefix();

	add_theme_support( 'hybrid-core-sidebars', array( 'subsidiary' ) );

	/* Actions and filters calls go here in the future. */
}