<?php get_header(); ?>

<main>
  <div class="single container container-sp">
    <?php if(is_single()): ?>
    <?php
      $author_id = get_the_author_id();
      $author = get_userdata($post->post_author);
    ?>
    <!-- 個別ページ -->
    <h1 id="post-title"><?php the_title(); ?></h1>
    <section id="post-meta">
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
      </time>
      <?php the_category(); ?>
    </section>
    <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
    <div id="contents">
      <div class="content">
        <section id="entry">
          <?php the_content(); ?>
        </section>
        <div id="author-meta">
          <span class="section-subtitle">Written By</span>
          <h2 class="section-title">この記事を書いた人</h2>
          <div class="author-avatar"><?php echo get_avatar($author, 350); ?></div>
          <div class="author-content">
            <h2 class="author-nickname"><?php echo $author->nickname; ?></h2>
            <p class="author-description"><?php echo $author->description; ?></p>
          </div>
        </div>
        <?php comments_template(); ?>
      </div>

      <section class="sidebar">
        <div>
          <ul><?php dynamic_sidebar(); ?></ul>
        </div>
      </section>
    </div>
    
    <?php else: ?>
    <!-- 投稿一覧表示 -->
    <?php if(have_posts()): ?>
    <div class="title">
      <span class="section-subtitle">Recent Posts</span>
      <h2 class="section-title">新着記事</h2>
    </div>
    <ul class="posts">
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
            <time class="wp-post-date"><?php the_date(); ?></time>
          </div>
        </div>
      </a>
    </li>
    <?php endwhile; ?>
    </ul>
    <?php endif; ?>

    <?php the_pegination(); ?>      
    <?php endif; ?>

    <?php
      $args = array(
        'category_name' => 'recommend',
        'posts_per_page' => 3
      );
      $query = new WP_Query($args);
      if($query->have_posts()):
    ?>
    <div class="sec-title">
      <p class="color-blue">Recommended by Editorial</p>
      <h3>編集部のおすすめ</h3>
    </div>
    <?php while($query->have_posts()): $query->the_post(); ?>
    <article <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(array(510, 510)); ?>
        <?php else: ?>
          <img class="wp-post-image no-image" src="<?php echo get_template_directory_uri() ?>/assets/no_image.jpg" alt="noimage">
        <?php endif; ?>
          <div class="wp-post-summary">
            <h1 class="wp-post-title"><?php echo wp_trim_words(get_the_title(), 36, '...') ?></h1>
            <time class="wp-post-date"><?php the_date(); ?></time>
          </div>
      </a>
    </article>
    <?php endwhile; endif; ?>
  </div>  <!-- container閉じタグ -->
</main>

<?php get_footer(); ?>
