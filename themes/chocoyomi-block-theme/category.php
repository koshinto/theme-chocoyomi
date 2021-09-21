<?php get_header(); ?>

<main class="container container-sp container-l">
  <div class="title">
    <h2 class="section-title">
      <?php single_cat_title(); ?>
    </h2>
  </div>

  <?php get_template_part('partials/posts'); ?>
</main>

<?php get_footer(); ?>