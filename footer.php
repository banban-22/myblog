<footer class="site-footer">
    <div class="footer-left">
        <a href="<?php echo site_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>
    </div>
    <div class="footer-middle">
        <ul class="footer-list">
            <li><a href="">Profile</a></li>
            <li><a href="">Main Articles</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
        </ul>
    </div>
    <div class="footer-right">
        <ul class="footer-list">
            <li><a href="">Test</a></li>
            <li><a href="">Test1</a></li>
            <li><a href="">Test2</a></li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>