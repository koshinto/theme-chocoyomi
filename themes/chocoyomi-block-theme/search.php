<?php get_header(); ?>

<main>
  <div class="container">
    <?php if(have_posts()): ?>
    <p>「<?php the_search_query() ;?>」の検索結果</p>
    <ul class="posts">
    <?php while(have_posts()): the_post(); ?>
    <li <?php post_class(); ?>>
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
    </li>
    <?php endwhile; ?>
    </ul>
    <?php else: ?>
    <p>該当する記事が見つかりませんでした。</p>
    <?php endif; ?>
    <?php the_pegination(); ?>
  </div>
</main>

<?php get_footer(); ?>