<?php
/*
 * The actual search form
 */

?>
<h3>in form template</h3>

<div class="wacs-form-wrapper">
    <input name="select" id="wacs-council-form"  />
</div>  <!-- ENDS .wacs_searchform -->

<?php
$dhb = get_terms( array(
    'taxonomy' => 'dhb',
    'hide_empty' => false,
) );


/* list all terms   */
 ?><select><?php  
foreach( $dhb as $key => $value){
    echo "<option value='" .   $value->name  .    "'  >" . $value->name .    "   </option> " ;
    // echo $value->slug  . "<br /> " ;
}
?>
</select>

<script>
 var $ = jQuery.noConflict();
$(document).ready(function($) {
    
    var wacsInput = $(".wacs-form-wrapper") ;

    if ( wacsInput.length != 0  ) {
	
    }
     
</script>
