<section class="company">
  <div class="wrapper">
    <div class="company-inner">
      <div class="company-banner">
        <?php import_part('title', array(
          'modifier' => 'company-title',
          'en' => 'COMPANY',
          'jp' => '会社案内'
        ))?>
        <div class="company-banner-img">
          <img src="<?php echo resolve_asset_url('/images/building-alt.png'); ?>" alt="">
        </div>
        <span class="company-banner-bg"></span>
      </div>

      <div class="company-content">
        <div class="company-content-left">
          <h4 class="company-heading">
            <span class="company-heading-text">お客様の利益を第一とする</span>
            <span class="company-heading-text">真のサービス</span>
          </h4>
          <p class="company-desc">PRESIは2016年の創業以来、
            総合不動産企業として多角的な事業を展開し、
            不動産業界のさらなる発展、
            繁栄を牽引すべく日々邁進しております。
          </p>
        </div>
        <div class="company-content-right">
          <a href="" class="company-button">
            トップメッセージ
            <?php import_part("svg", array(
            'svg_class' => 'company-button-caret',
            'svg_id' => '#caret'
            )); ?>
          </a>
          <a href="" class="company-button">
            会社概要
            <?php import_part("svg", array(
            'svg_class' => 'company-button-caret',
            'svg_id' => '#caret'
            )); ?>
          </a>
        </div>
      </div>


      <div class="company-property">
        <?php import_part('case-study')?>
      </div>
    </div>
  </div>
</section>