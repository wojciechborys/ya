<?php if (!is_404()): ?>    <footer class="footer">        <div class="subscribe">            <div class="subscribe__pattern"></div>            <div class="wrap wrap--wide">                <div class="subscribe__inner anim">                    <div class="subscribe__copyright"><?php the_field('copyright', 'option') ?></div>                    <ul class="subscribe__socials">                        <?php if ($twitterLink = get_field('footer_twitter_link', 'option')): ?>                            <li>                                <a href="<?php echo $twitterLink ?>" target="_blank">                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.038" height="12.221"                                         viewBox="0 0 15.038 12.221">                                        <path d="M21.538,9.247a6.156,6.156,0,0,1-1.772.485,3.094,3.094,0,0,0,1.357-1.707,6.176,6.176,0,0,1-1.959.748,3.088,3.088,0,0,0-5.258,2.814A8.758,8.758,0,0,1,7.547,8.364,3.089,3.089,0,0,0,8.5,12.484,3.063,3.063,0,0,1,7.1,12.1c0,.013,0,.026,0,.039a3.087,3.087,0,0,0,2.475,3.025,3.1,3.1,0,0,1-1.393.053,3.089,3.089,0,0,0,2.882,2.143A6.228,6.228,0,0,1,6.5,18.635a8.774,8.774,0,0,0,13.507-7.392c0-.134,0-.267-.009-.4a6.257,6.257,0,0,0,1.54-1.6Z"                                              transform="translate(-6.5 -7.8)" fill="#ffffff"/>                                    </svg>                                </a>                            </li>                        <?php endif ?>                        <?php if ($facebookLink = get_field('footer_facebook_link', 'option')): ?>                            <li>                                <a href="<?php echo $facebookLink ?>" target="_blank">                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.765" height="16.843"                                         viewBox="0 0 7.765 16.843">                                        <path  d="M16.152,13.413h-2.3v8.438H10.36V13.413H8.7V10.447h1.66V8.528A3.272,3.272,0,0,1,13.88,5.007l2.585.011V7.9H14.59a.71.71,0,0,0-.74.808V10.45h2.608Z"                                              transform="translate(-8.7 -5.007)" fill="#ffffff"/>                                    </svg>                                </a>                            </li>                        <?php endif ?>                        <?php if ($youtubeLink = get_field('footer_youtube_link', 'option')): ?>                             <li>                                <a href="<?php echo $youtubeLink ?>" target="_blank">                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.937" height="10"                                         viewBox="0 0 14.937 10">                                        <path fill-rule="evenodd" fill="#ffffff"                                              d="M231.432,5873.81a47.476,47.476,0,0,1-5.841-.3,1.841,1.841,0,0,1-1.323-1.27,19.15,19.15,0,0,1,0-6.88,1.832,1.832,0,0,1,1.323-1.26,56.983,56.983,0,0,1,11.679,0,1.828,1.828,0,0,1,1.323,1.26,19.115,19.115,0,0,1,0,6.89,1.828,1.828,0,0,1-1.323,1.26A47.453,47.453,0,0,1,231.432,5873.81Zm-1.5-7.15v4.29l3.884-2.14Z"                                              transform="translate(-223.969 -5863.81)"/>                                    </svg>                                </a>                            </li>                        <?php endif ?>                    </ul>                    <div id="subscribe__notification">                        <?php _e('Subscribe to our newsletter and receive the latest updates of Young Africa and it\'s affiliates.', 'yafrica') ?>                    </div>                    <div class="subscribe__form js__validate-form">                        <?php echo do_shortcode('[mc4wp_form id="1500"]')?>                    </div>                   <!--<form class="subscribe__form js__validate-form">                        <input type="email" class="subscribe__form-input" required                               placeholder="<?php _e('Subscribe to our newsletterpo', 'yafrica') ?>">                        <button type="submit" class="subscribe__form-btn js__validate-form-submit">                            <img src="<?php echo THEME_DIR_URI ?>/assets/images/icons/arrow-btn-subscribe.svg"                                 alt="<?php _e('Subscribe', 'yafrica') ?>">                        </button>                        <button type="submit" class="subscribe__form-btn js__validate-form-submit subscribed">                            <img src="<?php echo THEME_DIR_URI ?>/assets/images/icons/check-mark.svg"                                 alt="<?php _e('Subscribe', 'yafrica') ?>">                        </button>                    </form>-->                </div>            </div>        </div>        <div class="wrap wrap--wide ">            <div class="footer__inner">                <div class="footer__inner-col">                    <div class="footer-logo">                        <a href="/" class="footer-logo-site">                            <?php if (!empty(get_field('logo-white', 'option'))): ?>                                <img src="<?php echo get_field('logo-white', 'option') ?>" class="footer-logo__img">                            <?php endif; ?>                            <span class="footer-logo__text"><?php the_field('text_logo', 'option'); ?></span>                        </a>                        <div class="partners__logo">                            <a href="<?php the_field('cbf_link', 'option') ?>" target="_blank">                                <?php if (!empty(get_field('logo_cbf', 'option'))): ?>                                    <img src="<?php echo get_field('logo_cbf', 'option')['url'] ?>"                                         class="footer-logo__img">                                <?php endif; ?>                            </a>                            <a href="<?php the_field('anbi_link', 'option') ?>">                                <?php if (!empty(get_field('logo_anbii', 'option'))): ?>                                    <img src="<?php echo get_field('logo_anbii', 'option')['url'] ?>"                                         class="footer-logo__img">                                <?php endif; ?>                            </a>                        </div>                        <div class="subscribe__copyright"><?php the_field('copyright', 'option') ?></div>                    </div>                </div>                <div class="footer__inner-col">                    <address class="footer-address">                        <?php (!empty(get_field('address_1', 'option'))) ? the_field('address_1', 'option') : ''; ?>                    </address>                    <?php $contactsPage = get_page_by_path('contacts'); ?>                    <div class="footer-page-link">                        <a href="#" class="privacy-settings"><?php _e('Privacy Settings', 'yafrica') ?></a>                        <a href="<?php the_permalink(pll_get_post($contactsPage->ID)) ?>"><?php _e('Contact', 'yafrica') ?></a>                    </div>                </div>                <div class="footer__inner-col">                    <address class="footer-address">                        <?php (!empty(get_field('address_2', 'option'))) ? the_field('address_2', 'option') : ''; ?>                    </address>                    <div class="footer-page-link">                        <a href="<?php the_field('created_link', 'option') ?>" target="_blank" class="keplar" style="background-image: url(<?php echo THEME_DIR_URI ?>/assets/images/kep_quality.png);"></a>                        <?php if (!empty(get_field('created_logo', 'option'))): ?>                            <!--<a href="<?php the_field('created_link', 'option') ?>">                                <img src="<?php the_field('created_logo', 'option') ?>"                                     alt="<?php _e('Young Africa', 'yafrica') ?>" class="">                            </a>-->                        <?php endif; ?>                    </div>                </div>            </div>        </div>        </div>    </footer><?php endif ?><?php if (isset($_COOKIE['performance']) && $_COOKIE['performance'] !== null): ?>    <!-- Script -->    <script></script><?php endif; ?><?php if (isset($_COOKIE['necessery']) && $_COOKIE['necessery'] !== null): ?>    <!-- Start of HubSpot Embed Code -->    <!-- End of HubSpot Embed Code --><?php endif; ?><div class="preloader js__preloader"></div><div class="cookie_fun">    <form action="#" id="cookie_fun__form" method="post">        <div class="container py-5 ">            <div class="row">                <div class="col-md-4">                    <input id="necessery" type="checkbox" name="necessery" checked>                    <label for=""><?php _e('Necessery', 'yafrica') ?></label>                    <div class="cookie_fun_description">                        <?php _e('These cookies are essential for you to browse the website and use its features, such as                        accessing secure areas of the site.', 'yafrica') ?>                    </div>                </div>                <div class="col-md-4">                    <input id="performance" type="checkbox" name="performance" checked>                    <label for=""><?php _e('Performance', 'yafrica') ?></label>                    <div class="cookie_fun_description ">                        <?php _e("These cookies collect information about how you use our website, like which pages you                        visited and which links you clicked on. None of this information can be used to identify                        you. It is all aggregated and, therefore, anonymized. Their sole purpose is to improve this                        website's functions.", 'yafrica') ?>                    </div>                </div>                <div class="col-md-4">                    <input id="marketing" type="checkbox" name="marketing" checked>                    <label for=""><?php _e('Marketing', 'yafrica') ?></label>                    <div class="cookie_fun_description  ">                        <?php _e('These cookies track your online activity to help us deliver more relevant advertising or to                        limit how many times you see an ad. These cookies can share that information with other                        organizations or advertisers. These are persistent cookies and almost always of third-party                        provenance.', 'yafrica') ?>                    </div>                </div>            </div>        </div>    </form></div><div class="cookie js__cookie" id="cookie_container">    <div class="container">        <div class="cookie__inner">            <div class="cookie__text">                <?php _e('This website stores cookies on your computer. These cookies are used to improve your website experience                and provide more personalized services to you, both on this website and through other media.', 'yafrica') ?>                <a style="text-decoration: underline; color: #101D5A"                   href="<?php the_permalink(get_page_by_path('privacy-policy')) ?>"><?php _e('Please refer to our cookie policy for more detailed information', 'yafrica') ?></a>            </div>            <ul class="cookie__controls">                <li><a href="#" class="btn js__set-cookie"><?php _e('Got it!', 'yafrica') ?></a></li>                <li><a href="#" class="btn btn_bordered btn_bordered-grey"                       id="cookie__controls__more"><?php _e('Learn more', 'yafrica') ?></a></li>            </ul>        </div>    </div></div><?php wp_footer(); ?></body></html> 