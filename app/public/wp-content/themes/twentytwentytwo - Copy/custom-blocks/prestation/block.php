<?php 
  $blackFontImg = get_field('black_font_img');
  $whiteFontImg = get_field('white_font_img');
  $title = get_field('title');
?>

<div>
  <h3><?php echo $title;?></h3>
  <div>
    <img src="<?php if(empty(!$blackFontImg['url'])) echo $blackFontImg['url'];?>" alt="">
  </div>
  <div>
    <img src="<?php if(empty(!$whiteFontImg['url'])) echo $whiteFontImg['url'];?>" alt="">
  </div>
</div>
