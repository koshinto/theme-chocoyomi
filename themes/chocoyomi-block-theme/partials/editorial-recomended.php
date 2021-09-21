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
