<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="robots" content="noindex" />

  <meta name="description" content="We developed and deliver a well-designed, fully customized website for your audience just on time. Our battle-proven developers make sure the best uses of web tools to ship your product under the budget.">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@1ManDev">
  <meta name="twitter:title" content="1MANDEV | Battle Proven Developers at Services">
  <meta name="twitter:description" content="We developed and deliver a well-designed, fully customized website for your audience just on time. Our battle-proven developers make sure the best uses of web tools to ship your product under the budget.">
  <meta name="twitter:image" content="http://1mandev.com/wp-content/themes/theme1mandev/assets/img/logo-colordark.png">
  
  <!-- Facebook Meta Tags -->
  <meta property="og:image" content="http://1mandev.com/wp-content/themes/theme1mandev/assets/img/logo-colordark.png" itemprop="thumbnailUrl">
  <meta property="og:title" content="1MANDEV | Battle Proven Developers at Services">
  <meta property="og:url" content="http://1mandev.com">
  <meta property="og:site_name" content="1MANDEV">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="We developed and deliver a well-designed, fully customized website for your audience just on time. Our battle-proven developers make sure the best uses of web tools to ship your product under the budget.">

  <!-- TODO: -->
  <meta property="fb:app_id" content="..." />
  

  <title><?php bloginfo('name');  ?> | <?php bloginfo('description') ?></title>

  <?php wp_head(); ?>

  <style type="text/css">
    .contact__field--select {
      background-image: url(<?php echo get_theme_file_uri('/assets/icon/chevron-small-down.svg'); ?>) !important;
    }
  </style>
</head>

<body>

<h1></h1>
  <header class="nav">
    <div class="navigation">
      <div class="navigation__button">
        <button class="navigation__toggle"></button>
      </div>

      <nav>
        <ul class="menu">
          <li data-text="Home"><a href="<?php echo site_url('/') ?>">Home</a></li>
          <li data-text="Services"><a href="<?php echo site_url('#services') ?>">Services</a></li>
          <li data-text="Pricing"><a href="<?php echo site_url('#pricing') ?>">Pricing</a></li>
          <li data-text="Why Us"><a href="<?php echo site_url('#why-us') ?>">Why Us</a></li>
          <li data-text="Portfolio"><a href="<?php echo site_url('#portfolio') ?>">Portfolio</a></li>
          <li data-text="Contact Us"><a href="<?php echo site_url('#contact-us') ?>">Contact Us</a></li>
        </ul>
      </nav>
    </div>

    <div class="nav__menu-bar">
      <a href="#" class="md__btn md__btn--primary">Client Area</a>
      <a href="get-started.html" class="md__btn md__btn--secondary">Get Started</a>

    </div>
  </header>

  <main>