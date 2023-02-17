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
                <h5 class="about-investment-heading">不動産投資を成功させる絶対的な自信</h5>
              </div>
              <div class="about-investment-services">
                <p class="about-investment-par">アパート経営、土地活用、賃貸併用住宅
                まだまだ歴史の浅い会社ではありますが、弊社代表をはじめ、
                社員各々がこれまで築き上げてきた確かな経験と実績。</p>
                <p class="about-investment-par">そして不動産のノウハウを注ぎ込む商品とサービスは、
                老舗企業に負けない自信があります。
                不動産投資の勝ちへのロジックが、我々の強みです</p>
              </div>
            </div>
            <a href="<?php echo resolve_url('about'); ?>" class="about-link">More <?php import_part('caret', array(
              'modifier' => 'about-link-caret'
            ))?></a>
          </div>
        <?php endif; ?>

        <div class="about-realty">
          <h5 class="about-realty-heading">PRESIの不動産活用の秘訣</h5>
          <p class="about-realty-desc">高品質で価値ある物件を提供するために弊社が大切している
          『真のサービス』</p>
          <div class="about-realty-cards">
              <?php import_part('card', array(
                'modifier' => 'about-realty-card',
                'text' => '一気通貫の<br>不動産流通システム',
                'image' => '/images/realty-img1.jpg'
              ))?>
              <?php import_part('card', array(
                'modifier' => 'about-realty-card',
                'text' => '資産価値を保てる<br>土地',
                'image' => '/images/realty-img2.jpg'
              ))?>
              <?php import_part('card', array(
                'modifier' => 'about-realty-card',
                'text' => '価格と品質が違う<br>建物',
                'image' => '/images/realty-img3.jpg'
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