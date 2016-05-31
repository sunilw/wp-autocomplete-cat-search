<?php 

/*
Plugin Name: Autocomplete Category Search
Plugin URI: 
Description: Publish a form that affords a category search. Form autocompletes
Version: 0.1.0
Author:  Sunil Williams
Author URI: http://sunil.co.nz
License: GPLv2 or later
*/

/*
* don't allow direct access
*/
defined( 'ABSPATH' ) or die( 'naff off' );

define( "WPACS_PLUGINDIRURI",  plugin_dir_url(__FILE__) ) ; 
define( "WPACS_PLUGINDIR",  plugin_dir_path(__FILE__) ) ;

/**
*  load our assets
*/
add_action( 'wp_enqueue_scripts', 'wpcs_load_assets' );
function wpcs_load_assets() {
    wp_enqueue_script('tokeninput-js',  plugin_dir_url( __FILE__ ) .  '/js/jquery.tokeninput.js',  array(jquery) ) ;
    wp_enqueue_script('wpacs-js',  plugin_dir_url( __FILE__ ) .  '/js/wacs.js',  array(jquery) ) ;
    wp_enqueue_style('wacs-styles', plugin_dir_url( __FILE__ ) .    '/css/wacs-styles.css'  , array()) ; 
    wp_enqueue_style('easy-complete-styles', plugin_dir_url( __FILE__ ) .    '/css/token-input.css'  , array()) ; 
}

/*
*  get the form template
*/

add_action('', '') ;
function wpacs_publish_searchform() {
    ob_start() ;
    include(  WPACS_PLUGINDIR   . '/templates/wacs_searchform.php') ;
    return ob_get_clean() ;
}
add_shortcode('wpac-cat-search', 'wpacs_publish_searchform'  ) ;

