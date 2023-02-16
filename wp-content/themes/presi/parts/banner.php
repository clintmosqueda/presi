<div class="banner <?php echo $modifier; ?>">
  <div class="wrapper">
    <div class="banner-inner">
      <div class="banner-title-wrap">
        <?php import_part('title', array(
          'modifier' => 'banner-title',
          'en' => $text_en,
          'jp' => $text_jp
        ))?>
      </div>
      <div class="banner-frame">
        <div class="banner-frame-image banner-frame-image-pc" style="background-image: url('<?php echo resolve_asset_url($img_pc); ?>')"></div>
        <div class="banner-frame-image banner-frame-image-sp" style="background-image: url('<?php echo resolve_asset_url($img_sp); ?>')"></div>
      </div>
    </div>
  </div>
</div>