<?php
/**
 * The header for our theme.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php wp_title('|'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" id="js-viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <meta name="keywords" content="PRESI,プレジ,ぷれじ,不動産投資,土地活用,アパート経営,勝てる不動産投資">
  <meta property="og:image" content="<?php echo resolve_asset_url('/images/ogp.png'); ?>">
  <meta name="twitter:image" content="<?php echo resolve_asset_url('/images/ogp.png?'); ?>"></meta>
  <link rel="stylesheet" href="<?php echo resolve_asset_url('/css/app.css'); ?>">
  <?php wp_head(); ?>
  <?php import_part('favicon'); ?>
</head>

<body <?php body_class(); ?>>

<input id="base-url" type="hidden" value="<?php echo resolve_url(); ?>" /> 
<div class="wrap js-wrap">
  <div class="header-topmost">
  <header class="header js-header">
    <!-- <div class="wrapper"> -->
      <div class="header-content">
        <a class="header-logo" href="<?php echo resolve_url(); ?>"><img src="<?php echo resolve_asset_url('/images/logo.png'); ?>" alt=""></a>
        <?php import_part('nav')?>
      </div>
    <!-- </div> -->
  </header>
  <div class="hamburger">
    <div class="hamburger-menu js-hamburger-menu">
      <span class="hamburger-dash"></span>
      <span class="hamburger-dash"></span>
    </div>
  </div>

  </div>


  <?php import_part('mega-menu');?>

