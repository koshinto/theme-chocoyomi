<footer id="footer">
    <section id="footer-blog-name">
      <h1 id="footer-blog-title"><?php bloginfo('name'); ?></h1>
      <p id="footer-blog-description"><?php bloginfo('description'); ?></p>
    </section>
    <?php wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'footer-menu',
        'theme_location' => 'footer-menu'
      ));
    ?>
    <section id="footer-share-button">
      <ul class="share-button">
        <li><a href="https://twitter.com/intent/tweet?text=<?php echo home_url(); ?> <?php echo get_site_url(); ?> <twitter account>"><i class="fab fa-twitter"></i></a></li>
        <li><a href="http://www.facebook.com/sharer.php?u=<?php echo home_url(); ?>&amp;t=<?php bloginfo('name'); ?>"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://social-plugins.line.me/lineit/share?url=<?php echo home_url(); ?>"><i class="fab fa-line"></i></a></li>
      </ul>
    </section>
    <small id="copyright">&copy; <?php bloginfo('name'); ?></small>
</footer>
<script src="<?php echo get_template_directory_uri() ?>/dist/js/index.bundle.js"></script>
<?php wp_footer(); ?>
</body>
</html>