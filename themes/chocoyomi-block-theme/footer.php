<footer id="footer">
  <div class="container">
    <section>
      <h1>Chocoyomi WebMagazine</h1>
      <p>兵庫県の東部を中心とした情報メディア</p>
    </section>
    <nav>
      <ul>
        <li><a href="<?php echo home_url('/abouts'); ?>">Chocoyomi Webmagazineについて</a></li>
        <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <section>
      <ul id="share-button">
        <li><a href="https://twitter.com/intent/tweet?text=<?php bloginfo('name'); ?> <?php echo get_site_url(); ?> <twitter account>"><i class="fab fa-twitter"></i></a></li>
        <li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_site_url(); ?>&amp;t=<?php bloginfo('name'); ?>"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://social-plugins.line.me/lineit/share?url=https://www.yns-sanda.jp/"><i class="fab fa-line"></i></a></li>
        <!-- <li><a href="https://social-plugins.line.me/lineit/share?url={encodeURIComponent(URL)}"><i class="fab fa-line"></i></a></li> -->
      </ul>
    </section>
    <small>&copy; <?php bloginfo('name'); ?></small>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>