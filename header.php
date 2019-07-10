<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title><?php bloginfo('name');  ?> | <?php bloginfo('description') ?></title>

  <?php wp_head(); ?>

  <style type="text/css">
    .contact__field--select {
      background-image: url(<?php echo get_theme_file_uri('/assets/icon/chevron-small-down.svg'); ?>) !important;
    }
  </style>
</head>

<body>
  <header class="nav">
    <nav>
      <ul class="">
      </ul>
    </nav>
    <div class="nav__menu-bar">
      <a href="#" class="md__btn md__btn--primary">Client Area</a>
      <a href="get-started.html" class="md__btn md__btn--secondary">Get Started</a>
      <a href="#" class="nav__menu-bar--icon"><i class="fa fa-bars"></i></a>
    </div>
  </header>