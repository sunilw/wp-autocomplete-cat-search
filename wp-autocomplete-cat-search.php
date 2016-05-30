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
/*
*  present the search form
*/

add_action('', '') ;
function wpacs_publish_searchform() {
    ob_start() ;
    ?>
    <h2>In function. About to output form...</h2>
    <?php 
    include(  WPACS_PLUGINDIR   . '/templates/wacs_searchform.php') ;
    return ob_get_clean() ;
}
add_shortcode('wpac-cat-search', 'wpacs_publish_searchform'  ) ;

