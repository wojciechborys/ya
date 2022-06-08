<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#6FA935">
    <title><?php _e('Young Africa', 'yafrica') ?></title>    <!-- Favicon -->
    <link rel="shortcut icon"
          href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png"/>
    <link rel="shortcut icon"
          href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png"/>
    <link rel="shortcut icon"
          href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png"/> <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><?php do_action('before'); ?><?php $nav = wp_nav_menu(array('theme_location' => 'top-menu', 'menu_class' => 'main-nav', 'menu_id' => 'main-menu', 'depth' => 2, 'echo' => false, 'container' => false,)); ?>
<header class="header sticky__header">
    <div class="wrap">
        <div class="header__inner">
            <div class="header-logo"><a
                        href="/">                    <?php if (!empty(get_field('logo-color', 'option'))): ?>
                        <img src="<?php echo get_field('logo-color', 'option') ?>" alt="Young Africa"
                             class="footer-logo__img">                    <?php endif; ?> <span
                            class="header-logo__text"><?php the_field('text_logo', 'option'); ?></span> </a></div>
            <nav class="header-nav">                <?php if ($nav) : ?><?php echo $nav ?><?php endif; ?>            </nav> <?php echo get_template_part('tpl-parts/tpl-part', 'header-lang') ?>
            <nav class="js__header-nav mobile-nav">                <?php echo get_template_part('tpl-parts/tpl-part', 'mobile-menu') ?>            </nav>
            <nav class=" js__header-nav-desktop desktop-nav">                <?php echo get_template_part('tpl-parts/tpl-part', 'burger-menu') ?>            </nav>
            <?php if(get_field('button-donation-nav', 'option')): ?>
                <a href="<?php echo get_field('button-donation-nav', 'option') ?>" class="button__donate"><?php _e('Donate') ?></a>
            <?php endif ?>
            <a href="#" class="toggle-nav js__toggle-nav"> <span class="toggle-nav__line"></span> <span
                        class="toggle-nav__line"></span> </a> <a href="#" class="toggle-menu js__toggle-menu"> <span
                        class="toggle-menu__line"></span> <span class="toggle-menu__line"></span> </a></div>
    </div>
</header>
<style></style>