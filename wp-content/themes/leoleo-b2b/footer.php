<?php
/**
 * Site footer.
 *
 * @package LeoLeo_B2B
 */
?>
<footer class="footer">
    <div>
        <strong><?php bloginfo('name'); ?></strong>
        <p><?php esc_html_e('B2B apparel manufacturing, OEM, ODM, and private label production.', 'leoleo-b2b'); ?></p>
    </div>
    <nav class="footer-links" aria-label="<?php esc_attr_e('Footer navigation', 'leoleo-b2b'); ?>">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container'      => false,
            'fallback_cb'    => 'leoleo_b2b_fallback_menu',
            'depth'          => 1,
        ));
        ?>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>
