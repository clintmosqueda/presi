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
              'uri' => 'http://www.amazon.com',
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
              'uri' => 'http://www.amazon.com',
              'text' => 'amazon'
            )
          ))?>
        </div>
    </div>
  </div>
</section>