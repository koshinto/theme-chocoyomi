<?php get_header(); ?>

<main class="container container-sp container-l">
  <div class="title">
    <h2 class="section-title">「<?php the_search_query(); ?>」の検索結果</h2>
  </div>

  <?php get_template_part('partials/posts'); ?>
</main>

<?php get_footer(); ?>