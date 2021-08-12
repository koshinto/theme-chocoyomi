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
<header>
  <div id="pc-nav-bar" class="bg-black">
    <div id="pc-nav-bar-content" class="container container-m">
      <button class="openSearchFieldButton"><i class="fas fa-search"></i>キーワードから記事を検索</button>
      <?php wp_nav_menu(array(
          'container' => 'nav',
          'container_class' => 'contact',
          'theme_location' => 'contact'
        ));
      ?>
    </div>
  </div>
  <div class="container">
    <nav id="header-nav">
      <h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/logo.svg" width="300" height="104" alt="logo"></a></h1>
      <button class="openSearchFieldButton sp-SearchFieldButton"><i class="fas fa-bars"></i></button>
    </nav>
    <section id="category" class="container-sp">
      <p class="section-subtitle left">カテゴリー</p>
      <h2 class="section-title left">Category</h2>
      <?php wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'categories',
        'theme_location' => 'categories'
      ));
      ?>
    </section>
  </div>
  <div id="searchfield" class="hidden">
    <div class="modal searchfield-modal">
      <div class="searchfield-inner">
        <h3 class="modal-title">キーワードから記事を検索</h3>
        <?php get_search_form(); ?>
        <button id="searchfieldclose"><i class="fas fa-times"></i>閉じる</button>
      </div>
    </div>
  </div>
</header>