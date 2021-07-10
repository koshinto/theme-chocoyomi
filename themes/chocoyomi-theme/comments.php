<section id="comment-form">
  <?php if(have_comments()): ?>
    <div class="caption">
      <p>Comments</p>
      <h2>この記事のコメント</h2>
    </div>
    <ul id="comment-list">
      <?php wp_list_comments('max_depth=1&format=html5'); ?>
    </ul>
  <?php endif; ?>
  <?php comment_form('format=html5'); ?>
</section>