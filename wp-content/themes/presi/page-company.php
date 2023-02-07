<?php 
/*
* Template Name: Company
*/
get_header(); ?>


<?php import_part('banner', array(
  'modifier' => '',
  'text_en' => 'COMPANY',
  'text_jp' => 'PRESIとは',
  'img' => '/images/banner-company.png',
))?>
<?php import_part('breadcrumbs', array(
  'modifier' => '',
  'page' => 'PRESIとは',
)) ?>
<main class="company-main">
  <div class="wrapper">
    <div class="company-main-block">
      <div class="company-sidebar">
        <ul class="company-sidebar-list">
          <li class="company-sidebar-item"><span class="company-sidebar-anchor">理念</span></li>
          <li class="company-sidebar-item"><span class="company-sidebar-anchor">社長挨拶</span></li>
          <li class="company-sidebar-item"><span class="company-sidebar-anchor">会社概要</span></li>
          <li class="company-sidebar-item"><span class="company-sidebar-anchor">会社沿革</span></li>
          <li class="company-sidebar-item"><span class="company-sidebar-anchor">グループ会社</span></li>
          <li class="company-sidebar-item"><span class="company-sidebar-anchor">アクセス</span></li>
        </ul>
      </div>

      <div class="company-main-content">

        <?php import_part('idea')?>
        <?php import_part('message')?>
        <?php import_part('profile')?>
        <?php import_part('history')?>
        <?php import_part('conglomerate')?>
        <?php import_part('access')?>

      </div>
    </div>
  </div>
</main>

<?php
get_footer();