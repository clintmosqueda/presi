<article class="book <?php echo $modifier;?>">
  <div class="book-frame" style="width: <?php echo $img_width.'px'?>">
    <img src="<?php echo $img?>" alt="">
  </div>
  <div class="book-content">
    <h3 class="book-title"><?php echo $title?></h3>
    <p class="book-desc"><?php echo $desc?></p>
    <span class="book-author"><?php echo $author?></span>
    <a class="book-link" target="_blank" href="<?php echo $link["uri"]; ?>">
      <?php echo $link["text"]; ?>
      <?php import_part("svg", array(
        'svg_class' => 'book-link-icon',
        'svg_id' => '#icon-external'
      )); ?>
    </a>
  </div>

</article>