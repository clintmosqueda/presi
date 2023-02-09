<?php 
/*
* Template Name: Tips
*/
get_header(); ?>

<?php import_part('banner', array(
  'modifier' => '',
  'text_en' => 'Tips',
  'text_jp' => 'PRESIの不動産活用の秘訣',
  'img' => '/images/banner-tips.png',
))?>
<?php import_part('breadcrumbs', array(
  'modifier' => '',
  'page' => 'PRESIの不動産活用の秘訣',
)) ?>

<main class="tips-main">

  <section class="distribution">
    <div class="wrapper">
      <div class="distribution-inner">
        <span class="distribution-bg">
          <?php import_part("svg", array(
            'svg_class' => 'distribution-bg-triangle',
            'svg_id' => '#triangle'
          )); ?>
        </span>
        <div class="distribution-video">
          <img src="<?php echo resolve_asset_url('/images/video-img.jpg'); ?>" alt="">
        </div>
        <?php import_part('title-alt', array(
          'modifier' => 'distribution-title-alt',
          'en' => 'One-stop real estate distribution system',
          'jp' => '一気通貫の不動産流通システム',
        ))?>
        <p class="distribution-desc">コストをカットしながら、グレードを担保。自社で行うことで、中間マージンとプランニングの時間を劇的に短縮</p>

        <div class="distribution-service">
          <div class="distribution-service-top">
            <div class="distribution-service-left">
              <span class="distribution-service-process">土地の買い付け</span>
              <span class="distribution-service-process">施工</span>
              <span class="distribution-service-process">販売</span>
            </div>
            <div class="distribution-service-right">
              <h4 class="distribution-service-heading">一つひとつの工程に責任をもって取り組み、
              お客様の幸せを長期的にサポートします</h4>
              <p class="distribution-service-desc">PRESIグループでは、お客様に寄り添ったサービスの向上を目指し、
              販売や仲介、管理事業などを専業とする「株式会社PRESI-X」と、
              土地活用や設計・建設事業などを専業とする「株式会社PRESI建設」を設立。不動産の企画・開発を主とする株式会社PRESIと連携し、
              用地の仕入れから設計・建設、運営・管理に至るまで
              一気通貫で請け負う不動産流通システムを確立いたしました。</p>
            </div>
          </div>
          <div class="distribution-service-bottom">
            <div class="distribution-service-item">
              <div class="distribution-service-frame"><img src="<?php echo resolve_asset_url('/images/distri-image1.jpg'); ?>" alt=""></div>
              <p class="distribution-service-par">用地の仕入れから始まり、設計・建設、
              そして経営・管理まで自社で請け負うことで、
              中間マージンのカットに成功。
              コスト削減とともに情報の伝達も潤滑に行われるため、
              連携ミスやタイムロスなどのリスクも軽減いたします。</p>
            </div>
            <div class="distribution-service-item">
              <div class="distribution-service-frame"><img src="<?php echo resolve_asset_url('/images/distri-image2.jpg'); ?>" alt=""></div>
              <p class="distribution-service-par">用地の仕入れから始まり、設計・建設、
              そして経営・管理まで自社で請け負うことで、
              中間マージンのカットに成功。
              コスト削減とともに情報の伝達も潤滑に行われるため、
              連携ミスやタイムロスなどのリスクも軽減いたします。</p>
            </div>
          </div>
        </div>

        <p class="distribution-par">グループが一体となって取り組むからこそ
        PRESIの物件は『土地・建物・経営』に自信があります。</p>
      </div>
    </div>
  </section>

  <section class="property-value">
    <div class="wrapper">
      <div class="property-value-inner">
        <span class="property-value-bg"></span>
        <h3 class="property-value-heading">資産価値を保てる土地</h3>
        <p class="property-value-desc">未来に繋がる価値ある資産とは、地価が安定した東京23区の土地です。
        将来的に資産価値が高い物件を所有することは、お客様にとって最高のステータス。
        だからこそPRESIは、地価が安定した東京23区の物件にこだわり続けています。</p>
        <p class="property-value-desc">用地選びで大切なこと。それは20年、30年先でも
        資産価値が大きく下がることがない土地です。
        そのため弊社では、いまだ人口が増加傾向にあり、地価が安定している
        東京23区の土地にこだわって仕入れを行っております。</p>
        <p class="property-value-desc">なかでも収益物件に関しましては、将来的にも高い集客率を確保でき
        る土地選びが重要です。見極めには経営・管理の知識と経験の積み重ねが必要ですが、
        一気通貫で業務を請け負っている弊社は、そのノウハウを十分に蓄えております。</p>
      </div>
    </div>
  </section>

  <section class="stable-value">
    <div class="wrapper">
      <div class="stable-value-inner">
        <div class="stable-value-box">
          <h3 class="stable-value-heading">地価が安定した土地を所有することが
          お客様にとっては何よりも大切</h3>
          <span class="stable-value-cta">将来の幸せを見据えた土地選び</span>
          <div class="stable-value-block">
            <div class="stable-value-col">
              <span class="stable-value-icon"></span>
              <h5 class="stable-value-label">地方の土地</h5>
              <p class="stable-value-desc">人口が減少傾向にある地方の土地の場合、ローン返済を終える20年、30年先は大きく資産価値を落とす可能性が高まります。購入時の３割程度にまで下落してしまうことも珍しくありません。</p>
            </div>
            <div class="stable-value-col">
              <span class="stable-value-icon"></span>
              <h5 class="stable-value-label">東京23区の土地</h5>
              <p class="stable-value-desc">ローン返済を終える20年、30年先でも地価の安定が予想される東京23区の土地。資産価値が下がるとしても非常に緩やかなため、30年後でも購入時の７割の価値が残り、売却で大きな利益を上げることも可能です。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tips-building">
    <div class="wrapper">
      <div class="tips-building-inner">
        <?php import_part('title-alt', array(
          'modifier' => 'tips-building-title-alt',
          'en' => 'PRESI buildings with different price and quality',
          'jp' => '価格と品質が違うPRESIの建物',
        ))?>
        <p class="tips-building-desc">多角的に事業を展開するPRESIだからこそさまざまな要望を捉えた建設が可能です。</p>

        <div class="tips-building-frame"></div>

        <div class="tips-building-group">
          <p class="tips-building-desc">用地の仕入れから設計・建設まで完遂する弊社では、建材のロット管理や中間コストの削減により、相場よりも２～３割も安い価格で建設が可能です。単に安いだけではなく耐震性、劣化対策ともに高い水準で満たし、そのうえで仕様や構造、デザインにおいても、限られた予算の中で最大限グレードを上げる工夫を怠りません。</p>
          <p class="tips-building-desc">また一戸建てから一棟アパート、商業施設に至るまで、多角的な不動産事業を展開しているため、お客様の要望に柔軟な対応ができるのも弊社の魅力となっております。「マイホームの一部を賃貸アパートにしたい」「賃貸アパートの１階を店舗として使用したい」お客様が思い描く理想の建物を、ぜひともお聞かせください。弊社にはそれを実現する力があります。</p>
        </div>

        <div class="tips-building-frame"></div>

        <div class="tips-building-cluster">
          <h5 class="tips-building-label">不動産投資の成功に繋がる
          高い集客力を維持する収益物件</h5>
          <p class="tips-building-desc">収益物件で大切なことは、安定した収益を長期に渡って上げ続ける高い集客力です。たとえ立地条件が良くても、たとえどんなに立派な建築物を建てたとしても、入居者が決まらなければ収益物件としては失敗です。重要なのは、その立地に対してのマーケティング。東京23区のどこに位置し、そこではどんな賃貸物件が求められているのか…。用地の仕入れも行っている弊社だからこそ確かなニーズを割り出すことができ、なおかつ経営・管理の経験とノウハウから、ニーズを満たす条件を建物に反映できると確信しております。</p>
        </div>

      </div>
    </div>
  </section>


  <div class="tips-case-study">
    <div class="wrapper">
      <div class="tips-case-study-inner">
        <?php import_part('case-study')?>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();