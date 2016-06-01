var $ = jQuery.noConflict();
$(document).ready(function($) {
    
    var wacsSelect = $("#wacs-wrapper select") ;
    
    /**
     * if the form is present on the page then get terms
     */
    if ( wacsSelect.length != 0  ) {
	console.log("about to run request");
	// build the query
	var target = 'http://'  +  window.location.hostname  + '/wp-admin/admin-ajax.php' ;
	var data = {
	    action: ' wacs_test_ajax'
	} ;
	var req = jQuery.post( target , data,  function(resp) { 
	    console.log(resp.responseText);
	}) ;	
    }

});
