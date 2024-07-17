<?php 
 $images = get_field('images');
?>
<div style="my-carousel">
<?php foreach($images as $image):?>
    <img src="<?php echo  $image['image']['url'];?>" alt="">
    <?php endforeach ?>
</div>
 <style>
  .my-carousel {
    display: flex;
  }
 </style>