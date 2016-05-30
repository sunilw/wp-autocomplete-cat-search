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
    wp_enqueue_script('angularjs', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js',  array() ) ;
    wp_enqueue_script('wpacsjs', WPACS_PLUGINDIRURI . '/js/wpac.js', array('angularjs')) ;
    wp_enqueue_style('wpac-styles', WPACS_PLUGINDIRURI . '/css/wpac.css', array()) ;
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

