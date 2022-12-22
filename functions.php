<?php

//Theme support
function swt_theme_support (){
add_theme_support('title-tag');
}
add_action('after_setup_theme','swt_theme_support');


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


/* ------------------------------------------------
   *  Thumbnails
--------------------------------------------------- */

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    add_image_size('post_grid', 200, 300, true);
    add_image_size('gallery-thumb_medium', 300, 300, true);
    add_image_size('archive_image', 635, 300, true);  
}
   /* End of Thumbnails */

/* ------------------------------------------------
   *  Theme options
--------------------------------------------------- */

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support('align-wide');
    add_theme_support('automatic-feed-links');
    add_theme_support('core-block-patterns');
    add_theme_support('custom-background');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('custom-units');
    add_theme_support('editor-color-palette');
    add_theme_support('editor-gradient-presets');
    add_theme_support('editor-font-sizes');
    add_theme_support('editor-styles');
    add_theme_support('featured-content');
    add_theme_support('html5');
    add_theme_support('menus');
    add_theme_support('post-formats');
    add_theme_support('post-thumbnails');
    add_theme_support('starter-content');
    add_theme_support('title-tag');
    add_theme_support('wp-block-styles');
    add_theme_support('widgets');
    add_theme_support('widgets-block-editor');
    add_theme_support('wp-block-styles' );
    add_editor_style ('style-editor.css' );
    add_theme_support('responsive-embeds' );
    add_theme_support('custom-units', 'rem', 'em' );
    add_theme_support( 'rank-math-breadcrumbs' );
}

/* ------------------------------------------------
   *  Registers menus
--------------------------------------------------- */

function swt_menues() {
      
        $locations = array(
          'primary' => "Desktop Primary Top",
          'footer_one' => "Footer Menu one",
          'footer_two' => "Footer Menu two"
         );

     register_nav_menus($locations);
}

add_action('init','swt_menues');

/* End of Registers menus */


/* ------------------------------------------------
   *  Excerpt limit
--------------------------------------------------- */


function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
    }




/* ------------------------------------------------
    Breadcrumbs code
--------------------------------------------------- */


/**
* Enables the HTTP Strict Transport Security (HSTS) header in WordPress.

*/


function ww_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);

/* ------------------------------------------------
    External functions
--------------------------------------------------- */




?>