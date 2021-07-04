<?php get_header(); ?>

<div class="container main">
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
                echo $author->display_name;
              ?>
            </li>
          </ul>
        </div>
      </div>
      <div id="post-thumbnail"><?php the_post_thumbnail() ?></div>
    </section>
    <section class="content">
      <?php the_content(); ?>
    </section>
    <ul class="sidemenu">
      <?php dynamic_sidebar(); ?>
    </ul>
  <?php else: ?>
    <!-- インデックス -->
    <?php if(have_posts()): ?>
      <div class="cardlayout">
        <?php while(have_posts()): the_post(); ?>
          <section class="card">
            <a class="postlink" href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): ?>
                <figure class="card-thumbnail"><?php the_post_thumbnail(array(360, 240)); ?></figure>
              <?php endif; ?>
              <div class="card-text">
                <h2 class="card-title"><?php the_title(); ?></h2>
                <div class="postinfo">
                  <ul>
                    <li>
                      <span class="info-icon"><i class="far fa-calendar-alt"></i></span><?php the_time('Y年m月d日'); ?>
                    </li>
                    <li>
                      <span class="info-icon"><i class="fas fa-tag"></i></span><?php the_category(', ') ?>
                    </li>
                    <li>
                      <span class="info-icon"><i class="fas fa-user-alt"></i></span><?php the_author(); ?>
                    </li>
                  </ul>
                </div>
                <div class="user-reaction-wrap">
                  <div class="user-reaction user-reaction-comment">
                    <span class="user-reaction-icon"><i class="fas fa-comment"></i></span><?php comments_number('0', '1', '%'); ?>
                  </div>
                  <!-- 実装予定 -->
                  <!-- <div class="user-reaction user-reaction-like"> -->
                    <!-- 未実装 -->
                    <!-- <span class="user-reaction-icon"><i class="fas fa-heart"></i></span>2 -->
                  <!-- </div> -->
                </div>
              </div>
            </a>
          </section>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <!-- ページネーション -->
  <?php if($wp_query->max_num_pages > 1): ?>
    
  <?php endif; ?>
</div>
<?php get_footer(); ?>