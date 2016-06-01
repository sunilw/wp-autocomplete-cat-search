<?php 
/*
* simple ajax test
*/
add_action( 'wp_ajax_wacs_test_ajax', 'wacs_test_ajax' );
add_action( 'wp_ajax_nopriv_wacs_test_ajax', 'wacs_test_ajax' );

function  wacs_test_ajax() {    
    
    $resp = array('title' => 'here is the title', 'content' => ' here is the content') ;        
    wp_send_json($resp) ;
    
}


