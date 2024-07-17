
<?php
$image = get_field('image');
$paragraph = get_field('paragraph');
$title = get_field('title');
// layout left or right
$paragraph_position = get_field('paragraph_position');
?>

<div style="display: flex; flex-direction: <?php echo ($paragraph_position == 'Right') ? 'row' : 'row-reverse'; ?>; ">
  <div style="flex: 1">
    <?php
    if (!empty($image)): ?>
    <img src="<?php echo ((!empty($image['url'])) ? esc_url($image['url']) : ''); ?>" id="my_image"/>
    <?php endif; ?>
  </div>
  <div style="flex: 1">
    <h><?php if(!empty($title)) echo $title?></h5>
    <p><?php if(!empty($paragraph)) echo $paragraph?></p>
  </div>
</div>