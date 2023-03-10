<div class="nav">
  <ul class="nav-list">
    <li class="nav-item"><a class="nav-link <?php echo (is_page(ABOUT_PAGE)) ? 'is-active' : ''; ?>" href="<?php echo resolve_url('about'); ?>">PRESIとは</a></li>
    <li class="nav-item"><a class="nav-link <?php echo (is_page(COMPANY_PAGE)) ? 'is-active' : ''; ?>" href="<?php echo resolve_url('company'); ?>">会社案内</a></li>
    <li class="nav-item"><a class="nav-link <?php echo (is_page(SERVICE_PAGE)) ? 'is-active' : ''; ?>" href="<?php echo resolve_url('service'); ?>">事業内容</a></li>
    <li class="nav-item"><a class="nav-link" target="_blank" href="http://presi.co.jp/recruit/">新卒採用</a></li>
    <li class="nav-item"><a class="nav-link nav-cta" href="<?php echo resolve_url('contact'); ?>">お問い合わせ</a></li>
  </ul>
</div>