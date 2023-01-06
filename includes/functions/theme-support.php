<?php

//Theme support title
function swt_theme_support (){
    add_theme_support('title-tag');
    }
    add_action('after_setup_theme','swt_theme_support');


/* ------------------------------------------------
   *  Theme support
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
   *  Dashicon support
--------------------------------------------------- */

function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
 }
 add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);

?>