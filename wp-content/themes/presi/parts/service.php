<section class="service">
  <div class="wrapper">
    <div class="service-inner">
      <span class="service-misc"></span>
      <?php import_part('title', array(
        'modifier' => 'service-title',
        'en' => 'SERVICE',
        'jp' => '事業内容'
      ))?>
      <p class="service-desc">弊社では、不動産開発を一貫して責任を持って請け負います。</p>

      <div class="service-grid">
        <a class="service-grid-link" href="<?php echo resolve_url('service?property-development'); ?>">
          PRESIの事業内容
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?real-estate-development'); ?>">
          不動産開発
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?real-estate-value'); ?>">
          不動産の価値再生
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?real-estate-consulting'); ?>">
          不動産コンサルティング
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?tax-consulting'); ?>">
          税務コンサルティング
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
      </div>
    </div>
  </div>
</section>