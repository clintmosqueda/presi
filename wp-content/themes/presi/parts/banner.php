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
        <div class="banner-frame-image" style="background-image: url('<?php echo resolve_asset_url($img); ?>')"></div>
      </div>
    </div>
  </div>
</div>