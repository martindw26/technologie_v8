<?php

//Loads CSS & Styles
function load_swt_css(){
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style('swt_style_main_css', get_template_directory_uri() . "/assets/css/main.css", array(), $version, 'all');
     wp_enqueue_style('swt_style_css', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
	wp_enqueue_style('swt_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
	wp_enqueue_style('swt_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
	wp_enqueue_style('swt_bootstrap_icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css", array(), '1.9.1', 'all');

wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
}
add_action ('wp_enqueue_scripts','load_swt_css');

// Loads Scripts
function load_swt_script(){

	wp_enqueue_script( 'bootstrap_bundle_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(),'5.0.2',true);
}

add_action ('wp_enqueue_scripts','load_swt_script');

?>