<?php 
/*
* Template Name: Service
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'text_en' => 'SERVICE',
  'text_jp' => '事業内容',
  'img' => '/images/banner-service.png',
))?>
<?php import_part('breadcrumbs', array(
  'modifier' => '',
  'page' => '事業内容',
)) ?>

<main class="service-main">
  <div class="wrapper">
    <div class="service-main-inner">
      <p class="service-main-desc">弊社は不動産の総合エキスパート企業グループであるPRESIグループの中核企業として、
      不動産に関するあらゆるステージにおいて、お客様のニーズにお応えします。</p>
      <?php import_part('estate-dev') ?>
      <?php import_part('estate-services') ?>
    </div>
  </div>
</main>

<?php
get_footer();