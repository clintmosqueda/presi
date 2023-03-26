<section class="service">
  <div class="wrapper">
    <div class="service-inner">
      <span class="service-misc"></span>
      <?php import_part('title', array(
        'modifier' => 'service-title',
        'en' => 'SERVICE',
        'jp' => '事業内容'
      ))?>
      <p class="service-desc">4種の事業を中心に資産形成・資産運用を多角的にプロデュースします。</p>

      <div class="service-grid">
        <a class="service-grid-link" href="<?php echo resolve_url('service?property-development'); ?>">
          不動産開発事業
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?real-estate-development'); ?>">
          不動産売却
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?real-estate-value'); ?>">
          不動産買取
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?real-estate-consulting'); ?>">
          オーダー型新築1棟投資
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
        <a class="service-grid-link" href="<?php echo resolve_url('service?tax-consulting'); ?>">
          土地活用
          <?php import_part("svg", array(
          'svg_class' => 'service-grid-link-caret',
          'svg_id' => '#caret'
          )); ?>
        </a>
      </div>
    </div>
  </div>
</section>