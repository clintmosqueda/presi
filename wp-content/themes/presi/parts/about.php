<section class="about">
  <div class="wrapper">
    <?php if(!is_page('about')) : ?>
      <?php import_part('title', array(
        'modifier' => 'about-title',
        'en' => 'About us',
        'jp' => 'PRESIとは'
      ))?>
    <?php endif; ?>
  </div>

  <div class="about-inner js-observe">
    <div class="wrapper">
      <div class="about-content">

        <?php if(!is_page('about')) : ?>
          <div class="about-investment">
            <div class="about-investment-table">
              <div class="about-investment-property">
                <h5 class="about-investment-heading">業界の通例にこだわらず新たなカタチで資産の形成・運用をサポート</h5>
              </div>
              <div class="about-investment-services">
                <p class="about-investment-par">PRESIは、皆様の大切な資産の形成と、より価値を高める運用に尽力する総合不動産会社です。
                高品質な物件を相場よりも安く、そして圧倒的なスピードで創出すべく弊社では、
                ロボット建築士兼鑑定士「オートカルク」やブロックチェーンといった最先端の技術を積極的に導入。
                業界の通例へのこだわりを捨てることで、これまでの限界を超えるサービスを実現しています。</p>
              </div>
            </div>
            <a href="<?php echo resolve_url('about'); ?>" class="about-link">More <?php import_part('caret', array(
              'modifier' => 'about-link-caret'
            ))?></a>
          </div>
        <?php endif; ?>

        <div class="about-realty">
          <h5 class="about-realty-heading">高い満足度を実現するPRESIの強み</h5>
          <p class="about-realty-desc">さまざまなニーズに柔軟かつ迅速に対応できるシステムでお客様の満足度を高めています。</p>
          <div class="about-realty-cards">
              <?php import_part('card', array(
                'modifier' => 'about-realty-card',
                'text' => 'ワンストップによる<br>中間コストの削減',
                'image' => '/images/realty-img4.jpg'
              ))?>
              <?php import_part('card', array(
                'modifier' => 'about-realty-card',
                'text' => '独自のネットワークを活かした<br>希少価値の高い用地の獲得',
                'image' => '/images/realty-img5.jpg'
              ))?>
              <?php import_part('card', array(
                'modifier' => 'about-realty-card',
                'text' => '確かな実績に基づいた<br>安心・安全な物件の創出',
                'image' => '/images/realty-img6.jpg'
              ))?>
          </div>
          <div class="about-realty-link">
            <a href="<?php echo resolve_url('tips'); ?>" class="about-link">More <?php import_part('caret', array(
              'modifier' => 'about-link-caret'
            ))?></a>
          </div>
        </div>
        
      </div>
    </div>
  </div>

</section>