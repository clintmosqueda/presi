<section class="estate-services">
  <p class="estate-desc">お客様の利益を第一とした、不動産に関するサービスを一貫して承っております</p>

  <div class="estate-cards">
    <?php import_part('card-estate', array(
      'image' => '/images/services-img1.jpg',
      'heading' => '不動産の開発',
      'description' => '不動産にとって最適な開発プランを提案し、高度な設計・建設・マネジメントを行い、高需要収益物件として、売却あるいは運用することによって収益を生み出します。',
      'id' => 'real-estate-development'
    )) ?>
    <?php import_part('card-estate', array(
      'image' => '/images/services-img2.jpg',
      'heading' => '不動産の価値再生',
      'description' => '不動産のリノベーション、あるいは用途の転用などによって、付加価値を高め、資産価値を向上させ、
      新たな価値を創造することによって収益を生み出します。',
      'id' => 'real-estate-value'
    )) ?>
    <?php import_part('card-estate', array(
      'image' => '/images/services-img3.jpg',
      'heading' => '不動産コンサルティング事業',
      'description' => 'お客様の所有する不動産の特性、可能性、将来性などを弊社エキスパートが検証し、マンション、アパート、オフィス、店舗、ホテル、駐車場、保育園など、その土地の価値の最大化を導きだす開発、新築、再構築などをご提案いたします。',
      'id' => 'real-estate-consulting'
    )) ?>
    <?php import_part('card-estate', array(
      'image' => '/images/services-img4.jpg',
      'heading' => '税務コンサルティング事業',
      'description' => '弊社では、不動産を活用した、さまざまな節税に関するコンサルタント業務を行っております。 弊社の税務エキスパートがお客様の節税対策をお助けいたします。',
      'id' => 'tax-consulting',
      'tax' => array(
        'heading' => '主な節税対策',
        'desc' => '不動産投資による所得税・住民税の節税対策<br>
        不動産投資による相続税の節税対策<br>
        資産管理会社の活用による節税対策'
      )
    )) ?>
  </div>
</section>