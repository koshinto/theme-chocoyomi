<?php get_header(); ?>

<main>
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if(is_single() || is_page()): ?>
    <article>
      <h1><?php the_title(); ?></h1>
    </article>
    <?php else: ?>
    <article <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(array(510, 510)); ?>
        <?php else: ?>
        <img class="wp-post-image no-image" src="<?php echo get_template_directory_uri() ?>/assets/no_image.jpg" alt="noimage">
        <?php endif; ?>
        <h1 class="wp-post-title"><?php echo wp_trim_words(get_the_title(), 24, '...') ?></h1>
        <p class="wp-post-excerpt"><?php echo get_the_excerpt(); ?></p>
        <time class="wp-post-date"><?php the_date(); ?></time>
      </a>
    </article>
    <?php endif; ?>
    <?php endwhile; endif; ?>

    <?php the_pegination(); ?>

    <?php if(is_single()): ?>
    <!-- 個別ページ -->
    <section>
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
      </time>
      <span><?php the_category(); ?></span>
    </section>
    <section><?php the_post_thumbnail('large'); ?></section>
    <article>
      <?php the_content(); ?>
    </article>
    <section id="author_meta">
      <?php $author_id = get_the_author_id(); ?>
      <p>この記事の著者</p>
      <h3><?php the_author(); ?></h3>
      <?php echo get_avatar($author_id, 150); ?>
      <p><?php the_author_meta('description', $author_id); ?></p>
    </section>
    <section>
      <?php comments_template(); ?>
    </section>
    <div>
      <ul><?php dynamic_sidebar(); ?></ul>
    </div>
    <?php endif; ?>

    <?php if(is_page()): ?>
    <!-- 固定ページ -->
    <article>
      <?php the_content(); ?>
    </article>
    <?php endif; ?>
  </div>  <!-- container閉じタグ -->
</main>

<?php get_footer(); ?>

</body>
</html>
