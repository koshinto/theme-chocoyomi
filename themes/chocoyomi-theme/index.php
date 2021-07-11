<?php get_header(); ?>
  <article>
    <?php if(is_single()): ?>
      <!-- 小ページ -->
      <section id="content-head">
        <div id="head-text">
          <h1 id="title"><?php the_title(); ?></h1>
          <div class="postinfo">
            <ul>
              <li>
                <span class="info-icon"><i class="far fa-calendar-alt"></i></span><?php the_time('Y年m月d日'); ?>
              </li>
              <li>
                <span class="info-icon"><i class="fas fa-tag"></i></span><?php the_category(', ') ?>
              </li>
              <li>
                <span class="info-icon"><i class="fas fa-user-alt"></i></span>
                <?php
                  $author = get_userdata($post -> post_author);
                  $author_name = $author -> display_name;
                  echo $author_name
                ?>
              </li>
            </ul>
          </div>
        </div>
        <div id="post-thumbnail"><?php the_post_thumbnail() ?></div>
      </section>

      <section class="content">
        <?php the_content(); ?>
        <?php comments_template(); ?>
      </section>

      <ul class="sidemenu">
        <li>
          <p>この記事の著者</p>
          <h3><?php echo $author_name; ?></h3>
          <?php get_avatar($author, 100); ?>
        </li>
        <?php dynamic_sidebar(); ?>
      </ul>
    <?php else: ?>

      <!-- インデックス -->
      <?php if(have_posts()): ?>
        <div class="caption">
          <p>New Article</p>
          <h2>最新の記事</h2>
        </div>
        <div class="cardlayout">
          <?php while(have_posts()): the_post(); ?>
            <section class="card">
              <a class="postlink" href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                  <figure class="card-thumbnail"><?php the_post_thumbnail(array(360, 240)); ?></figure>
                <?php endif; ?>
                <div class="card-text">
                  <h2 class="card-title"><?php echo wp_trim_words(get_the_title(), 24, '...'); ?></h2>
                  <div class="user-reaction-wrap">
                    <div class="user-reaction user-reaction-comment">
                      <span class="user-reaction-icon"><i class="fas fa-comment"></i></span><?php comments_number('0', '1', '%'); ?>
                    </div>
                  </div>
                </div>
              </a>
            </section>
          <?php endwhile; ?>
        </div>
        <div class="caption">
          <p>Recommend by Editorial</p>
          <h2>編集部のおすすめ</h2>
        </div>
          <!-- カテゴリーの記事 -->
          <div class="cardlayout">
          <?php
            $args = array(
              'posts_per_page' => 3,
              'category_name' => '投稿フォーマット'
            );
            $posts = get_posts($args);
            foreach($posts as $post):
            setup_postdata($post);
          ?>
            <section class="card">
              <a class="postlink" href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                  <figure class="card-thumbnail"><?php the_post_thumbnail(array(360, 240)); ?></figure>
                <?php endif; ?>
                <div class="card-text">
                  <h2 class="card-title"><?php echo wp_trim_words(get_the_title(), 24, '...') ?></h2>
                  <div class="user-reaction-wrap">
                    <div class="user-reaction user-reaction-comment">
                      <span class="user-reaction-icon"><i class="fas fa-comment"></i></span><?php comments_number('0', '1', '%'); ?>
                    </div>
                  </div>
                </div>
              </a>
            </section>
          <?php endforeach;  ?>
        </div>
        <div class="caption">
          <p>Recommend by Editorial</p>
          <h2>編集部のおすすめ</h2>
          <!-- カテゴリーの記事 -->
        </div>
        <div class="caption">
          <p>Recommend by Editorial</p>
          <h2>編集部のおすすめ</h2>
          <!-- カテゴリーの記事 -->
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <!-- ページネーション -->
    <?php if($wp_query->max_num_pages > 1): ?>
      
    <?php endif; ?>
  </article>

<?php get_footer(); ?>
