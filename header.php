<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio | Kohei Mitsuya</title>

  <!-- Favicon -->

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/archive.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single.css">

  <!-- JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hamburger.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/filter.js"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="header">
    <div class="header-wrap">
      <div class="hamburger-wrap sp-only">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <p><a href="<?php echo home_url(); ?>" class="header-title">Portfolio</a></p>
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li><a href="<?php echo esc_url( home_url('/#top') ); ?>" class="header-nav-item nav-top is-selected">Top</a></li>
          <li><a href="<?php echo esc_url( home_url('/#about') ); ?>" class="header-nav-item nav-about">About</a></li>
          <li><a href="<?php echo esc_url( home_url('/#works') ); ?>" class="header-nav-item nav-works">Works</a></li>
          <li><a href="<?php echo esc_url( home_url('/#news') ); ?>" class="header-nav-item nav-blog">News</a></li>
          <li><a href="<?php echo esc_url( home_url('/#contact') ); ?>" class="header-nav-item nav-contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>