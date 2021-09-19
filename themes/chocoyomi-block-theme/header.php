<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://kit.fontawesome.com/f2989748a4.js" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri() ?>/dist/js/style.bundle.js"></script>
  <title><?php bloginfo('name');?> <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header">
  <div class="container container-sp container-l">
    <div class="header-links">
      <nav id="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/logo.svg"
              width="300"
              height="104"
              alt="logo"
            >
          </a>
      </nav>
      <?php wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'header-menu',
        'theme_location' => 'header-menu'
      )) ?>
      <div id="toggle-drawer-menu-button">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</header>

<nav id="drawer-menu" class="hide-drawer-menu">
  <div class="margin-65 only-smartphone"></div>
  <section>
    <h4 class="drawer-menu-head">記事を検索</h4>
    <?php get_search_form(); ?>
  </section>
  <section id="categories">
    <h4 class="drawer-menu-head">カテゴリー</h4>
    <?php wp_nav_menu(array(
      'container' => 'nav',
      'container_class' => 'nav-columns-wrap',
      'theme_location' => 'categories'
    )) ?>
  </section>
  <section>
    <h4 class="drawer-menu-head">コンタクト</h4>
    <?php wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'nav-columns-wrap',
        'theme_location' => 'contact'
      ));
    ?>
  </section>
</nav>

<div class="margin-65 smartphone-only"></div>
