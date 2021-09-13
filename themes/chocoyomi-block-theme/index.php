<?php get_header(); ?>

<main class="container container-sp container-l">
    <!-- 投稿一覧表示 -->
    <?php if(have_posts()): ?>
    <div class="title">
      <h2 class="section-title">新着記事</h2>
      <span class="section-subtitle">Recent Posts</span>
    </div>
    <div id="contents">
      <ul class="posts content">
      <?php while(have_posts()): the_post(); ?>
      <li <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
          <div class="post-columns">
          <?php if(has_post_thumbnail()): ?>
            <div class="wp-post-image-wrap"><?php the_post_thumbnail(array(510, 510)); ?></div>
          <?php else: ?>
            <div class="wp-post-image-wrap"><img class="wp-post-image no-image" src="<?php echo get_template_directory_uri() ?>/assets/no_image.jpg" alt="noimage"></div>
          <?php endif; ?>
            <div class="wp-post-summary">
              <h1 class="wp-post-title"><?php echo wp_trim_words(get_the_title(), 36, '...') ?></h1>
              <div class="wp-post-info">
                <time class="wp-post-date"><?php the_date(); ?></time>
                <ul class="post-categories">
                <?php
                  $cats = get_the_category();
                  foreach($cats as $cat):
                ?>
                  <li class="post-category">
                    <?php echo $cat->name; ?>
                  </li>
                <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </a>
      </li>
      <?php endwhile; ?>
      <?php the_pegination(); ?>      
      </ul>
      <section class="sidebar">
        <ul><?php dynamic_sidebar(); ?></ul>
      </section>
    </div>
    <?php endif; ?>

    <?php
      $args = array(
        'category_name' => 'recommend',
        'posts_per_page' => 3
      );
      $query = new WP_Query($args);
      if($query->have_posts()):
    ?>
    <div class="title">
      <h3 class="section-title">編集部のお知らせ</h3>
      <span class="section-subtitle">Notice by Editorial</span>
    </div>
    <ul class="posts notice-by-editorial">
    <?php while($query->have_posts()): $query->the_post(); ?>
      <li <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
          <div class="post-columns">
          <?php if(has_post_thumbnail()): ?>
            <div class="wp-post-image-wrap"><?php the_post_thumbnail(array(510, 510)); ?></div>
          <?php else: ?>
            <div class="wp-post-image-wrap"><img class="wp-post-image no-image" src="<?php echo get_template_directory_uri() ?>/assets/no_image.jpg" alt="noimage"></div>
          <?php endif; ?>
            <div class="wp-post-summary">
              <h1 class="wp-post-title"><?php echo wp_trim_words(get_the_title(), 36, '...') ?></h1>
              <time class="wp-post-date"><?php the_date(); ?></time>
            </div>
          </div>
        </a>
      </li>
    <?php endwhile; endif; ?>
    </div>
  </div>  <!-- container閉じタグ -->
</main>

<?php get_footer(); ?>
