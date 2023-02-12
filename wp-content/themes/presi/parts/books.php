<section class="books">
  <div class="wrapper">
    <div class="books-inner">
        <?php import_part('title', array(
          'modifier' => 'books-title',
          'en' => 'books',
        ))?>

        <div class="books-catalogue">
          <?php import_part('book', array(
            'modifier' => '',
            'img_width' => 185,
            'img' => resolve_asset_url('/images/book1.png'),
            'title' => '損得の「トク」は人徳の「徳」',
            'desc' => 'PRESI流営業術',
            'author' => '石井 雄也 (著)',
            'link' => array(
              'uri' => 'https://www.amazon.co.jp/PRESI%E6%B5%81%E5%96%B6%E6%A5%AD%E8%A1%93-%E6%90%8D%E5%BE%97%E3%81%AE%E3%80%8C%E3%83%88%E3%82%AF%E3%80%8D%E3%81%AF%E4%BA%BA%E5%BE%B3%E3%81%AE%E3%80%8C%E5%BE%B3%E3%80%8D-%E7%9F%B3%E4%BA%95-%E9%9B%84%E4%B9%9F/dp/4296101366',
              'text' => 'amazon'
            )
          ))?>
          <?php import_part('book', array(
            'modifier' => '',
            'img_width' => 228,
            'img' => resolve_asset_url('/images/book2.png'),
            'title' => '不動産革命',
            'desc' => '年商185億を稼ぐ男の根拠のない自信を<br>“本物"に変える力。',
            'author' => '石井 雄也 (著)',
            'link' => array(
              'uri' => 'https://www.amazon.co.jp/%E4%B8%8D%E5%8B%95%E7%94%A3%E9%9D%A9%E5%91%BD%E3%80%82%E5%B9%B4%E5%95%86185%E5%84%84%E3%82%92%E7%A8%BC%E3%81%90%E7%94%B7%E3%81%AE%E6%A0%B9%E6%8B%A0%E3%81%AE%E3%81%AA%E3%81%84%E8%87%AA%E4%BF%A1%E3%82%92%E2%80%9C%E6%9C%AC%E7%89%A9-%E3%81%AB%E5%A4%89%E3%81%88%E3%82%8B%E5%8A%9B%E3%80%82-%E7%9F%B3%E4%BA%95-%E9%9B%84%E4%B9%9F/dp/4822257738',
              'text' => 'amazon'
            )
          ))?>
        </div>
    </div>
  </div>
</section>