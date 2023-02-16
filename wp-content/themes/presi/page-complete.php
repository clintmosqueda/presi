<?php 
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'text_en' => 'CONTACT',
  'text_jp' => 'お問い合わせ',
  'img_pc' => '/images/banner-contact.png',
  'img_sp' => '/images/banner-contact-sp.png',
))?>
<?php import_part('breadcrumbs', array(
  'modifier' => '',
  'page' => 'お問い合わせ',
)) ?>

<div class="complete">
  <div class="wrapper">
    <div class="complete-inner">
      <h3 class="complete-heading">送信完了</h3>
      <p class="complete-desc">このたびはお問い合わせいただきありがとうございます。
      ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。
      確認メールが届いていない場合には、メールアドレスが誤っているか、
      確認メールが迷惑メールフォルダ等に振り分けられている可能性がありますので、再度ご確認をお願いいたします。
      なお、お問い合わせ内容につきましては、通常3営業日程度を目処に、弊社担当者よりご回答させていただきます。
      いましばらくお待ちくださいませ。</p>
      <a class="complete-cta" href="<?php echo resolve_url(); ?>">HOME
        <?php import_part("svg", array(
          'svg_class' => 'complete-cta-icon',
          'svg_id' => '#caret'
        )); ?>
      </a>
    </div>
  </div>
</div>

<?php
get_footer(); 