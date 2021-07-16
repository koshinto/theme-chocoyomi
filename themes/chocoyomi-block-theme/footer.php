<footer id="footer">
  <div class="container">
    <section>
      <h1><?php bloginfo('name'); ?></h1>
      <p><?php bloginfo('description'); ?></p>
    </section>
    <?php wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'footer-menu',
        'theme_location' => 'footer-menu'
      ));
    ?>
    <section>
      <ul id="share-button">
        <li><a href="https://twitter.com/intent/tweet?text=<?php echo home_url(); ?> <?php echo get_site_url(); ?> <twitter account>"><i class="fab fa-twitter"></i></a></li>
        <li><a href="http://www.facebook.com/sharer.php?u=<?php echo home_url(); ?>&amp;t=<?php bloginfo('name'); ?>"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://social-plugins.line.me/lineit/share?url=<?php echo home_url(); ?>"><i class="fab fa-line"></i></a></li>
      </ul>
    </section>
    <small>&copy; <?php bloginfo('name'); ?></small>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>