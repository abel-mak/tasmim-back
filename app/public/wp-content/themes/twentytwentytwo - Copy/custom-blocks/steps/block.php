<div>
  steps->
<?php 
// Check rows exists.
if( have_rows('step') ):

  // Loop through rows.
  while( have_rows('step') ) : the_row();
    $title = get_sub_field('title');
    $value = get_sub_field('value');
?>
<div style="border: 1px solid black; margin: 5px auto;">
  <h5><?php echo $title ?></h5>
  <p><?php echo $value?></p>
</div>
<?php
  endwhile;
endif;
?>
</div>