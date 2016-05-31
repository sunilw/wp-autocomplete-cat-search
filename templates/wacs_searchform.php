<?php
/*
 * The actual search form
 */

?>
<div id="wacs-wrapper">

<?php
$dhb = get_terms( array(
    'taxonomy' => 'dhb',
    'hide_empty' => false,
) );

// echo "<option value='" .   $value->name  .  "'>" . $value->name . "   </option>" ;
// echo $value->slug  . "<br /> " ;

/* list all terms   */
?> <p class="wacs-select-container">
    <select><?php
            foreach( $dhb as $key => $value){ ?>
        <option value="<?= $value->name  ?>"  data-url="<?= $value->slug  ?>"><?= $value->name  ?></option>
    <?php  } ?>
    </select>
</p>

<div class="wacs-button-container">
    <p>
        <a class="btn wacs-button button" href="#">See what the candidates think</a>
    </p>
</div>


</div>  <!-- ENDS .wacs-wrapper -->


<script>
$(document).ready(function(){
     console.log("testing from within the template") ;
}) ; 
</script>
