<?php

function e11_register_menus() {

	// Navigation Menus
	register_nav_menus(
		array(	'primary-navigation' => 'Primary Navigation',
				'secondary-navigation' => 'Secondary Navigation',
				'footer-navigation' => 'Footer Navigation',
		)
	);

}
add_action( 'init', 'e11_register_menus' );
