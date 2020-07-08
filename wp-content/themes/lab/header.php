<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/assets/img/favicon/favicon.png" sizes="16x16" type="image/png">
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/assets/img/favicon/favicon.ico" sizes="16x16 32x32" type="image/vnd.microsoft.icon">
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/assets/img/favicon/favicon.svg" sizes="any" type="image/svg+xml">
    <!-- end -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css">
    <title>Logistic - transport company</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header is-home" id="header">
        <div class="navigation-wrapper is-home">
            <div class="container">
                <div class="navigation d-flex jcsb">
                    <div class="navigation__logo header-logo">
                        <a class="header-logo__link" href="/">
                            <img class="header-logo__img" src="<?php bloginfo('template_directory') ?>/assets/img/logo_header.png" alt="logo"> 
                        </a>
                    </div>
                    <nav>
                         <?php wp_nav_menu( array( 
                        'menu'            => 'Основное', 
                        'container'       => 'ul', 
                        'container_class' => '',
                        'menu_class'      => 'navigation__menu d-flex jcsb', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                        )); ?>
                    </nav>
                    <button class="navigation__button button">
                       <i class="fa fa-phone"></i> Request a call back 
                    </button>
                    <div class="navigation__burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>