<?php

update_user_meta( 1, 'show_admin_bar_front', 'true' );

// サイドバー
register_sidebar();

// アイキャッチ画像
add_theme_support('post-thumbnails');

// 概要の文字数
function mb_length($length) {
  return 55;
}
add_filter('excerpt_mblength', 'mb_length');

// カテゴリーのURL
function get_category_url($category_name) {
  $category_id = get_cat_ID($category_name);
  return get_category_link($category_id);
} 

// コメントのテキストを変更
add_filter( 'comment_form_defaults', 'my_title_reply');
function my_title_reply( $defaults){
    $defaults['title_reply'] = 'この記事の感想を書きませんか？';
    return $defaults;
}
