<section class="media-info">
  <div class="wrapper">
    <div class="media-info-inner">
      <?php import_part('title', array(
        'modifier' => 'media-info-title',
        'en' => 'media info',
        'jp' => 'メディア実績'
      ))?>
      <ul class="media-info-list">
        <?php for ($x = 1; $x <= 16; $x++) { ?>
          <li class="media-info-item">
            <time class="media-info-date">2017年1月</time>
            <p class="media-info-par">経営者通信にインタビュー掲載</p>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>