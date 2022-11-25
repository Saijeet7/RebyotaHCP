<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="site">
    <header class="header js-header">
        <div class="container">
            <div class="header__grid">
                <div class="logo__container">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
                        <div class="logo__wrap">
                            <img src="<?php echo get_template_directory_uri() ?>/uploads/logo.svg"
                                 alt="Logo of Website"/>
                        </div>
                        <meta itemprop="name" content="<?php bloginfo('name'); ?>">
                    </a>
                </div>


                <nav class="header__nav">
                    <div class="header__top">
                        <div class="header__info">
                            <p>This site is intended for U.S. healthcare professionals.</p>
                        </div>
                    </div>
                    <div class="header__nav-secondary">
                        <?php
                        $menuArgs = array(
                            'container' => false,
                            'menu' => 'Secondary Navigation',
                            'menu_class' => 'secondaryNav',
                        );
                        wp_nav_menu($menuArgs);
                        ?>
                    </div>
                    <div class="header__nav-primary">
                        <?php
                        $menuArgs = array(
                            'container' => false,
                            'menu' => 'Primary Navigation',
                            'menu_class' => 'primaryNav',
                        );
                        wp_nav_menu($menuArgs);
                        ?>
                        <a href="#" class="header__button">Request a Rep</a>
                    </div>
                    <a href="#" class="mobileNav__toggle js-nav-toggle">
                        <span class="accessible-text">Click to toggle navigation menu.</span>
                        <div class="menuBar__container">
                            <span class="menuBar"></span>
                            <span class="menuBar"></span>
                            <span class="menuBar"></span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
    </header>