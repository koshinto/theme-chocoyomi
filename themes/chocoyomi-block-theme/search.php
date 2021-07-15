<?php get_header(); ?>

<main>
  <div class="container">
    <p>「<?php the_search_query() ;?>」の検索結果</p>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(array(510, 510)); ?>
        <?php else: ?>
        <img class="wp-post-image no-image" src="<?php echo get_template_directory_uri() ?>/assets/no_image.jpg" alt="noimage">
        <?php endif; ?>
        <h1><?php echo wp_trim_words(get_the_title(), 24, '...') ?></h1>
      </a>
    </article>
    <?php endwhile; ?>
    <?php else: ?>
    <p>該当する記事が見つかりませんでした。</p>
    <?php endif; ?>
    <?php the_pegination(); ?>
  </div>
</main>

<?php get_footer(); ?>