<?php

update_user_meta( 1, 'show_admin_bar_front', 'true' );

// サイドバー
register_sidebar();

// アイキャッチ画像
add_theme_support('post-thumbnails');

// 概要の文字数
function excertpt_my_length($length) {
  return 55;
}
add_filter('excerpt_mblength', 'excertpt_my_length');

// 概要の省略記号
function my_more($more) {
  return '...';
}
add_filter('excerpt_more', 'my_more');

// カテゴリーのURL
function get_category_url($category_name) {
  $category_id = get_cat_ID($category_name);
  return get_category_link($category_id);
}

function the_categories() {
  $categories = get_categories();
  foreach($categories as $category) {
    echo '<li>'.$category->name.'</li>';
  }
}

// ナビゲーションメニュー
register_nav_menus(array(
  'header-menu' => 'Header Menu',
  'footer-menu' => 'Footer Menu'
));

// コメントのテキストを変更
add_filter( 'comment_form_defaults', 'my_title_reply');
function my_title_reply( $defaults){
    $defaults['title_reply'] = 'この記事の感想を書きませんか？';
    return $defaults;
}

// ページネーション
function the_pegination() {
  $args = array(
      'mid_size' => 1,
      'prev_text' => '<i class="fas fa-arrow-left"></i>',
      'next_text' => '<i class="fas fa-arrow-right"></i>',
      'screen_reader_text' => ' ',
  );
  the_posts_pagination($args);
}