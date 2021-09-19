<?php get_header(); ?>

<main class="container container-sp container-l">
  <?php if(is_single()): ?>
    <div id="single">
      <?php
        $author_id = get_the_author_id();
        $author = get_userdata($post->post_author);
      ?>
      <!-- 個別ページ -->
      <h1 class="post-title nam"><?php the_title(); ?></h1>
      <section class="post-meta">
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
            <?php echo get_avatar($author, 350); ?>
            <div class="author-content nam">
              <h2 class="author-nickname nam"><?php echo $author->nickname; ?></h2>
              <p class="author-description nam"><?php echo $author->description; ?></p>
            </div>
          </div>
          <?php comments_template(); ?>
        </div>
      <?php endif; ?>
    </div>  <!-- end single -->
  </div>  <!-- end entry -->
</main>  <!-- end container -->


<?php get_footer(); ?>