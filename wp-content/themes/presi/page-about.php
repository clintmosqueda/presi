<?php 
/*
* Template name: About
*/
get_header(); ?>

<?php import_part('banner', array(
  'modifier' => '',
  'text_en' => 'About Us',
  'text_jp' => 'PRESIとは',
  'img' => '/images/banner-about.png',
))?>
<?php import_part('breadcrumbs', array(
  'modifier' => '',
  'page' => 'PRESIとは',
)) ?>

<main class="about-main">
  <div class="wrapper">
    <div class="about-main-inner">
      <?php import_part('title-alt', array(
        'modifier' => 'about-main-title-alt',
        'en' => 'The Three Pledges',
        'jp' => '3つの誓い',
      ))?>

      <div class="about-pledges">
        <div class="about-pledges-box">

          <section class="about-pledges-circle about-pledges-honest">
            <p class="about-pledges-desc">正直に嘘をつかずに
            信用を積み重ねること</p>
            <h3 class="about-pledges-title">honest</h3>
          </section>

          <section class="about-pledges-circle about-pledges-value">
            <h3 class="about-pledges-title">value</h3>
            <p class="about-pledges-desc">お客様の幸せこそが
            最高の価値であること</p>
          </section>

          <section class="about-pledges-circle about-pledges-gratitude">
            <h3 class="about-pledges-title">gratitude</h3>
            <p class="about-pledges-desc">関わった全ての人に
            感謝を忘れないこと</p>
          </section>
        </div>
      </div>

      <div class="about-commitment">
        <h4 class="about-commitment-heading">お客様の利益を第一とする『真のサービス』</h4>
        <div class="about-commitment-words">
          <p class="about-commitment-par">PRESIでは、高品質で価値ある物件をお客様の利益を第一とした弊社独自の適正価格で提供しています。独自の適正価格とは何か ――それは、一気通貫の不動産流通システムの確立が可能とした中間マージンの削減や、企業努力の積み重ねによる建設費のコストダウンによって実現したお客様を幸せに導く価格です。
          総体的に相場より２～３割も安く、弊社が大切にしている『真のサービス』を追求すれば、不動産の価格はここまで抑えられることを体現しております。また単に安いだけではなく、用地は地価が安定している東京23区にこだわり、収益物件の場合はそのなかでも高い収益率を長期的に望める用地を確保。</p>
          <p class="about-commitment-par">建物は耐震性、劣化対策ともに高い水準で満たし、高品質で機能性に長けた設備と優れたデザイン設計に加え、高い居住性も実現するなど、コストパフォーマンスの高さこそが弊社の物件の魅力です。

          「なぜ、こんなに安いのですか？」と尋ねられることが多々ありますが、弊社は本来企業がすべき努力とサービスを当たり前のようにこなしているだけです。強いて言うならば『お客様の利益を第一に考える』という信念があるからこそ、成し得る結果なのかもしれません。</p>
        </div>
      </div>

      <?php import_part('title-alt', array(
        'modifier' => 'about-main-title-alt',
        'en' => 'The Three Pledges',
        'jp' => 'PRESIの強み',
      ))?>

      <div class="about-strengths">
        <section class="about-strength">
          <h4 class="about-strength-heading">土地の仕入れ</h4>
          <p class="about-strength-desc">東京２３区の土地を扱う多くの取引先と、強力なリレーションを持つことで、表に出ていない売却相談を受けたばかりの優良な物件の情報をいち早く獲得。</p>
        </section>
        <section class="about-strength">
          <h4 class="about-strength-heading">土地を判断する目利き</h4>
          <p class="about-strength-desc">自社の設計士が、物件を活用するプランを入れることで、
          その土地が収益を生むかを瞬時に判断。</p>
        </section>
        <section class="about-strength">
          <h4 class="about-strength-heading">スピード</h4>
          <p class="about-strength-desc">わずか1日で物件の可否を判断。
          どこよりも早いスピード感で判断を行えるのが我々の強みです。</p>
        </section>
      </div>
    </div>
  </div>
</main>
<?php import_part('about')?>
<?php
get_footer();