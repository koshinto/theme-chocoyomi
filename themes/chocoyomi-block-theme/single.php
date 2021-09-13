<?php get_header(); ?>

<div class="single container container-sp container-l">
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
  <?php endif; ?>
  </div>
</div>  <!-- end container -->


<?php get_footer(); ?>