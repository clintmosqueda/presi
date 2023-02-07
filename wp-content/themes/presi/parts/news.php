<section class="news">
  <div class="wrapper">
    <div class="news-inner">
      <div class="news-marquee">

      </div>
      <div class="news-content">
        <?php import_part('title', array(
          'modifier' => 'news-title',
          'en' => 'NEWS',
          'jp' => ''
        ))?>
        
        <ul class="news-list">
          <?php for ($x = 1; $x <= 3; $x++) { ?>
            <li class="news-item">
              <a class="news-link" href="">
                <time class="news-time">2022.01.01</time>
                <span class="news-category">カテゴリ</span>
                <p class="news-desc">ここにお知らせのタイトルを記載</p>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>