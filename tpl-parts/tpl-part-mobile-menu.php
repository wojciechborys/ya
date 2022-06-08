<?php $footerMainNav = wp_nav_menu(array(
    'theme_location' => 'header-primary-menu',
    'menu_class' => 'header-main-nav',
    'menu_id' => 'header-main-menu',
    'depth' => 2,
    'echo' => false,
    'container' => false,
));
$footerSecondaryNav = wp_nav_menu(array(
    'theme_location' => 'header-secondary-menu',
    'menu_class' => 'header-secondary-nav',
    'menu_id' => 'header-secondary-menu',
    'depth' => 2,
    'echo' => false,
    'container' => false,
)); ?>
<div class="wrap wrap--wide">
    <div class="header-logo">
        <a href="/">
            <?php if (!empty(get_field('logo-white', 'option'))): ?>
                <img src="<?php echo get_field('logo-white', 'option') ?>" alt="Young Africa"
                     class="footer-logo__img">
            <?php endif; ?>
            <span class="header-logo__text"><?php the_field('text_logo', 'option'); ?></span>
        </a>
    </div>
</div>
<div class="wrap wrap--wide">

    <div class="header-nav__inner">
        <div class="header-nav__inner-col">
            <?php if ($footerMainNav) : ?>
                <?php echo $footerMainNav ?>
            <?php endif; ?>
        </div>
        <div class="header-nav__inner-col">
            <?php if ($footerSecondaryNav) : ?>
                <?php echo $footerSecondaryNav ?>
            <?php endif; ?>
        </div>
        <?php if (!empty(get_field('items_logo_white', 'option'))): ?>
            <img src="<?php the_field('items_logo_white', 'option') ?>"
                 alt="<?php _e('Young Africa', 'yafrica') ?>" class="header__menu__image anim">
        <?php endif; ?>
    </div>
</div>
<div class="wrap wrap--wide ">
    <ul class="subscribe__socials">
        <?php if ($twitterLink = get_field('footer_twitter_link', 'option')): ?>
            <li>
                <a href="<?php echo $twitterLink ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.038" height="12.221"
                         viewBox="0 0 15.038 12.221">
                        <path d="M21.538,9.247a6.156,6.156,0,0,1-1.772.485,3.094,3.094,0,0,0,1.357-1.707,6.176,6.176,0,0,1-1.959.748,3.088,3.088,0,0,0-5.258,2.814A8.758,8.758,0,0,1,7.547,8.364,3.089,3.089,0,0,0,8.5,12.484,3.063,3.063,0,0,1,7.1,12.1c0,.013,0,.026,0,.039a3.087,3.087,0,0,0,2.475,3.025,3.1,3.1,0,0,1-1.393.053,3.089,3.089,0,0,0,2.882,2.143A6.228,6.228,0,0,1,6.5,18.635a8.774,8.774,0,0,0,13.507-7.392c0-.134,0-.267-.009-.4a6.257,6.257,0,0,0,1.54-1.6Z"
                              transform="translate(-6.5 -7.8)" fill="#ffffff"/>
                    </svg>
                </a>
            </li>
        <?php endif ?>
        <?php if ($facebookLink = get_field('footer_facebook_link', 'option')): ?>
            <li>
                <a href="<?php echo $facebookLink ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7.765" height="16.843"
                         viewBox="0 0 7.765 16.843">
                        <path d="M16.152,13.413h-2.3v8.438H10.36V13.413H8.7V10.447h1.66V8.528A3.272,3.272,0,0,1,13.88,5.007l2.585.011V7.9H14.59a.71.71,0,0,0-.74.808V10.45h2.608Z"
                              transform="translate(-8.7 -5.007)" fill="#ffffff"/>
                    </svg>
                </a>
            </li>
        <?php endif ?>
        <?php if ($youtubeLink = get_field('footer_youtube_link', 'option')): ?>
            <li>
                <a href="<?php echo $youtubeLink ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.937" height="10"
                         viewBox="0 0 14.937 10">
                        <path fill-rule="evenodd" fill="#ffffff"
                              d="M231.432,5873.81a47.476,47.476,0,0,1-5.841-.3,1.841,1.841,0,0,1-1.323-1.27,19.15,19.15,0,0,1,0-6.88,1.832,1.832,0,0,1,1.323-1.26,56.983,56.983,0,0,1,11.679,0,1.828,1.828,0,0,1,1.323,1.26,19.115,19.115,0,0,1,0,6.89,1.828,1.828,0,0,1-1.323,1.26A47.453,47.453,0,0,1,231.432,5873.81Zm-1.5-7.15v4.29l3.884-2.14Z"
                              transform="translate(-223.969 -5863.81)"/>
                    </svg>
                </a>
            </li>
        <?php endif ?>
    </ul>
    <div class="subscribe__copyright"><?php the_field('copyright','option')?></div>
    <div class="flex-block ">
        <div class="subscribe-flex-block">
            <a class="header-link-privacy privacy-settings"
               href="<?php the_permalink(get_page_by_path('privacy-policy')) ?>"><?php _e('Privacy Settings', 'yafrica') ?></a>
        </div>
        <?php if (!empty(get_field('created_logo', 'option'))): ?>
            <a href="<?php the_field('created_link', 'option') ?>">
                <img src="<?php the_field('created_logo', 'option') ?>"
                     alt="<?php _e('Young Africa', 'yafrica') ?>" class="">
            </a>
        <?php endif; ?>
    </div>
</div>