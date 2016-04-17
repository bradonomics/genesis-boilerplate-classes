<?php

//* Start the Genesis engine
include_once( get_template_directory() . '/lib/init.php' );

/**
* The core plugin class that is used to define internationalization,
* admin-specific hooks, and public-facing site hooks.
*/
require get_stylesheet_directory() . '/includes/class-geneplate.php';

//* Begin execution of the theme.
function run_geneplate() {

	$theme = new Geneplate();
	$theme->run();

}
run_geneplate();