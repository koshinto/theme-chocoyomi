<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://kit.fontawesome.com/f2989748a4.js" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri() ?>/dist/js/bundle.js"></script>
  <title><?php bloginfo('name');?> <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <nav id="header-nav">
      <h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/logo.svg" width="300" height="104" alt="logo"></a></h1>
      <?php get_search_form(); ?>
    </nav>
    <?php wp_nav_menu(array(
      'container' => 'nav',
      'container_class' => 'header-menu',
      'theme_location' => 'header-menu'
    ));
    ?>
    <div class="manip-support">
      <span class="center">
        <i class="fas fa-arrow-left"></i>
          Scroll  
        <i class="fas fa-arrow-right"></i>
      </span>
    </div>
    <nav class="sp-nav"><?php get_search_form(); ?></nav>
  </div>
</header>