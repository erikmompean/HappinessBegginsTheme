<footer class="footer-container">
<div class="center-container">
            <div>
                <?php
                $logo = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($logo, 'full');
                $image_url = $image[0];
                ?>
                <img class="site-logo" src="<?php echo $image_url ?>" alt="site_logo">
            </div>
        </div>
        <div class="center-container nav-menu">
            <?php
            $args = array(
                'theme-location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal'
            );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="center-container">
            <p class="white copyright">Copyright  2020 Happiness Begins</p>
        </div>
        <ul class="social-list">
            <li></li>
        </ul>
</footer>
    <?php wp_footer(); ?>
</body>
</html>