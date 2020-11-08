<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Happiness Begins</title>
</head>

<body>

    <header>
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
    </header>