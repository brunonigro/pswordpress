<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="container header-social">
                <h1 class="logo">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-physio.png" alt="Physio Studio"></a>
                </h1>
                <div class="social">
                    <p>Rua Barão de Lucena, 81 - Fundos. Botafogo - Rio de Janeiro</p>
                    <ul>
                        <li><a href="http://www.facebook.com" target="_blank" class="zocial-facebook"></a></li>
                        <li><a href="http://www.youtube.com" target="_blank" class="zocial-youtube"></a></li>
                        <li><a href="http://www.instagram.com" target="_blank" class="zocial-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container menu-principal">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
        </div>
    </header>
