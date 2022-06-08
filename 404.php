<?php get_header(); ?>
    <main class="main">
        <div class="wrap ">
            <div class="content-page content-page-404">
                <div class="content-page__thumbnail content-page-404__thumbnail">
                    <div class="title-404"><?php _e('We couldn\'t find the page you\'re looking for','yafrica')?></div>
                    <div class="description-404"><?php _e('Here are some helpful links instead','yafrica')?></div>
                </div>
                <div class="content-page__main">
                    <div class="nav-404">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'top-menu',
                            'menu_class'     => 'main-nav',
                            'menu_id'        => 'main-menu',
                            'depth'          => 2,
                            'container'      => false,
                        ));?>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php get_footer(); ?>