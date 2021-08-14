<?php get_header(); ?>

<main>
  <div class="container container-sp container-l">
  <?php if(have_posts()): ?>
    <div class="title">
      <span class="section-subtitle">Categories</span>
      <h2 class="section-title"><?php single_cat_title(); ?></h2>
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
              <time class="wp-post-date"><?php the_date(); ?></time>
            </div>
          </div>
        </a>
      </li>
      <?php endwhile; ?>
      </ul>
      <section class="sidebar">
        <ul><?php dynamic_sidebar(); ?></ul>
      </section>
    </div>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>