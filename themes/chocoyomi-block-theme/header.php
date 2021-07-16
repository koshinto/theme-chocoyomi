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
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="https://kit.fontawesome.com/f2989748a4.js" crossorigin="anonymous"></script>
  <title><?php bloginfo('name');?> <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <section>
      <ul>
        <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
        <li><a href="<?php echo home_url('/press_release'); ?>">プレスリリース</a></li>
      </ul>
    </section>
    <nav>
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php get_search_form(); ?>
    </nav>
    <?php wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'header-menu',
        'theme_location' => 'header-menu'
    ));
    ?>
  </div>
</header>