<?php
if ( empty( $modifier ) ) { $modifier = ''; }
?>

<a href="" class="card <?php echo $modifier; ?>">
  <div class="card-frame">
    <span>
      <img src="<?php echo resolve_asset_url($image); ?>" alt="">
    </span>
  </div>
  <p class="card-desc"><?php echo $text;?></p>
</a>