<?php if(have_posts()): ?>
<div id="contents">
  <ul class="posts content">
  <?php while(have_posts()): the_post(); ?>
  <li <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
      <div class="post-columns">
      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(array(510, 510)); ?>
      <?php else: ?>
        <img class="wp-post-image no-image" src="<?php echo get_template_directory_uri() ?>/assets/no_image.jpg" alt="noimage">
      <?php endif; ?>
        <div class="wp-post-summary">
          <h1 class="wp-post-title"><?php echo wp_trim_words(get_the_title(), 36, '...') ?></h1>
          <div class="wp-post-info">
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
            <time class="wp-post-date"><?php the_date(); ?></time>
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
