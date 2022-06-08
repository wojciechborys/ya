<?php
/**
 * Setup theme
 */
if (!function_exists('yafrica_setup')) :

    function yafrica_setup() {

        register_nav_menus(array(
            'top-menu' => __('Top Menu', 'Top primary menu'),
            'mobile-menu' => __('Mobile Menu', 'Mobile menu'),
            'hero-menu' => __('Home Page - Hero - Menu','Home page hero menu'),
            'header-primary-menu' => __('Header primary Menu','Header primary Menu'),
            'header-secondary-menu' => __('Header secondary Menu', 'Header secondary menu'),
        ));

        /**
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support('post-thumbnails');

    }

    add_action('after_setup_theme', 'yafrica_setup');

endif;