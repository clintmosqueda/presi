<section class="interview">
  <div class="wrapper">
    <div class="interview-inner">
      <?php import_part('title', array(
        'modifier' => 'interview-title',
        'en' => 'interview',
      ))?>
      <div class="interview-content">
        <div class="interview-carousel js-interview-carousel">

          <div class="swiper-wrapper">
            <?php for ($x = 1; $x <= 3; $x++) { ?>
            <div class="swiper-slide">
              <div class="interview-slide">
                <div class="interview-block">
                  <div class="interview-group">
                    <div class="interview-quotes">
                      <span class="interview-opening-quote">
                        <?php import_part("svg", array(
                          'svg_class' => 'interview-opening-quote-icon',
                          'svg_id' => '#quote1'
                        )); ?>
                      </span>
                      <span class="interview-closing-quote">
                      <?php import_part("svg", array(
                          'svg_class' => 'interview-closing-quote-icon',
                          'svg_id' => '#quote2'
                        )); ?>
                      </span>
                      <p class="interview-par">掲載準備中</p>
                    </div>
                    <a class="interview-link" href="">More 
                      <?php import_part("svg", array(
                        'svg_class' => 'interview-link-icon',
                        'svg_id' => '#caret'
                      )); ?>
                    </a>
                  </div>
                  <div class="interview-picture">
                    <div class="interview-picture-frame">
                        <img src="<?php echo resolve_asset_url('/images/slider/slide-image.png'); ?>" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>

        </div>
      </div>

      <div class="interview-nav">
          <span class="interview-nav-button interview-nav-prev js-interview-nav-prev">
            <?php import_part("svg", array(
              'svg_class' => 'interview-nav-button-icon',
              'svg_id' => '#caret'
            )); ?>
          </span>
          <span class="interview-nav-button interview-nav-next js-interview-nav-next">
            <?php import_part("svg", array(
              'svg_class' => 'interview-nav-button-icon',
              'svg_id' => '#caret'
            )); ?>
          </span>
        </div>
    </div>
  </div>
</section>