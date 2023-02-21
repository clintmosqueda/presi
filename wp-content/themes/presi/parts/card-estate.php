<article class="card-estate" id="<?php echo $id; ?>">
  <div class="card-estate-frame">
    <img src="<?php echo resolve_asset_url($image); ?>" alt="">
  </div>
  <div class="card-estate-content">
    <h3 class="card-estate-heading"><?php echo $heading; ?></h3>
    <p class="card-estate-desc"><?php echo $description?></p>
    <?php if(!empty($tax)) { ?>
      <div class="card-estate-tax">
        <h4 class="card-estate-tax-heading"><?php echo $tax["heading"]?></h4>
        <p class="card-estate-tax-desc"><?php echo $tax["desc"]?></p>
      </div>
    <?php } ?>
  </div>
</article>