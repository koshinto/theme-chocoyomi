<?php get_header(); ?>

<main>
  <div class="container">
    <?php if(is_single()): ?>
    <!-- 個別ページ -->
    <h1 id="post-title"><?php the_title(); ?></h1>
    <section id="post-meta">
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
      </time>
      <?php the_category(); ?>
    </section>
    <?php if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail('large'); ?>
    <?php endif; ?>
    <div id="contents">
      <article id="content">
        <?php the_content(); ?>
        <?php comments_template(); ?>
      </article>
      <section class="sidebar">
        <section id="author_meta">
          <?php $author_id = get_the_author_id(); ?>
          <p>この記事の著者</p>
          <h3><?php the_author_meta('nickname', $author_id); ?></h3>
          <?php echo get_avatar($author_id, 150); ?>
          <p><?php the_author_meta('description', $author_id); ?></p>
        </section>
        <div>
          <ul><?php dynamic_sidebar(); ?></ul>
        </div>
      </section>
    </div>
    <?php else: ?>
    <!-- 投稿一覧表示 -->
    <div class="sec-title">
      <p class="color-orange">New Posts</p>
      <h3>新着記事</h3>
    </div>
    <?php while(have_posts()): the_post(); ?>
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
    <?php endwhile; ?>

    <?php the_pegination(); ?>      
    <?php endif; ?>
  </div>  <!-- container閉じタグ -->
</main>

<?php get_footer(); ?>
