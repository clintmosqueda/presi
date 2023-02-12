<?php 
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'text_en' => 'CONTACT',
  'text_jp' => 'お問い合わせ',
  'img' => '/images/banner-contact.png',
))?>
<?php import_part('breadcrumbs', array(
  'modifier' => '',
  'page' => 'お問い合わせ',
)) ?>

<div class="contact">
  <div class="wrapper">
    <div class="contact-inner">

      <?php while (have_posts()) : the_post(); ?>
        <?php remove_filter ('the_content', 'wpautop'); the_content();?>
      <?php endwhile; ?>

      <!-- end contact-inquiry -->

    </div>
  </div>
</div>

<?php
get_footer(); 