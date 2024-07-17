<?php
 $label = get_field("label");
 $destination = get_field("destination");
 $align = get_field("align");
?>
  <style>
    .my-btn {
      border: 0;
      background: linear-gradient(96deg,#6254e7 0%,#9289f1 100%);
      padding: 0.75rem;
      border-radius: 5%;
      color: white !important;
      text-decoration: none !important;
      cursor: pointer;
    }
  </style>

<div style="display: flex; 
justify-content: <?php echo ($align == 'center') ? 'center' : (($align == 'right') ? 'end' : 'left');?>">
  <a class="my-btn">
    <?php echo $label?>
  </a>
</div>