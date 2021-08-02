<?php get_header(); ?>

<main>
  <div class="container">
    <!-- 固定ページ -->
    <article class="pages">
      <h1 id="page-title"><?php the_title(); ?></h1>
      <div class="page">
        <?php the_content(); ?>
      </div>
    </article>
  </div> 
</main>

<?php get_footer(); ?>
