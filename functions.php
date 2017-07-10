<?php 

/*
update_option('siteurl','http://tlwsolicitors.dev');
update_option('home','http://tlwsolicitors.dev');
*/
if (!is_admin()) {
	function tlw_tablet_scripts() {
		// Load stylesheets.
	$functions_dep = array(
	'jquery',
	'bootstrap-min',
	'bootstrap-select', 
	'jquery-cookie', 
	'slim-scroll',
	'widow-fix'
	);
	wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/_/css/styles.css', null, filemtime( get_stylesheet_directory().'/_/css/styles.css' ), 'screen' );
		wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/_/js/functions-min.js', $functions_dep, filemtime( get_stylesheet_directory().'/_/js/functions.js' ), true );
	}
	add_action( 'wp_enqueue_scripts', 'tlw_tablet_scripts' );
	
}
?>