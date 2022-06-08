<?php
/**
 * Template name: Page x3 Template
 */
get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="main overflow-visible">
            <div class="wrap wrap--wide  wrap--full-width">
                <div class="content-page" data-sticky-container>
                    <div class="content-page__thumbnail">
                        <?php if ($leftImage = get_field('left_image')): ?>
                            <div class="content-page__thumbnail-inner js__sticky">
                                <img src="<?php echo wp_get_attachment_image_url($leftImage, 'large') ?> "
                                     class="img-fluid anim">
                                <?php if (!empty(get_field('items_logo', 'option'))): ?>
                                    <img src="<?php the_field('items_logo', 'option') ?>"
                                         class="content-page__sign anim">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="content-page__main content">
                        <div class="content-page-smaller-part">
                            <?php if (have_rows('flexible_content')): ?>
                                <?php while (have_rows('flexible_content')) : the_row(); ?>
                                    <?php if (get_row_layout() == 'content_title'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'content-title'); ?>
                                    <?php elseif (get_row_layout() == 'content_text'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'content-text'); ?>
                                    <?php elseif (get_row_layout() == 'two_photos'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'two-photos'); ?>
                                    <?php elseif (get_row_layout() == 'single_image'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'single-image'); ?>
                                    <?php elseif (get_row_layout() == 'link'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'link'); ?>
                                    <?php elseif (get_row_layout() == 'testimonials'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'testimonials'); ?>
                                    <?php elseif (get_row_layout() == 'accordion'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'accordion'); ?>
                                    <?php elseif (get_row_layout() == 'how_it_works_list'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'how-it-works-list'); ?>
                                    <?php elseif (get_row_layout() == 'short_box'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'short-box'); ?>
                                    <?php elseif (get_row_layout() == 'contacts_accordion'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'contacts-accordion'); ?>
                                    <?php elseif (get_row_layout() == 'donation'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'donation'); ?>
                                    <?php elseif (get_row_layout() == 'impact_loop'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'impact-loop'); ?>
                                    <?php elseif (get_row_layout() == 'video'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'video'); ?>
                                    <?php elseif (get_row_layout() == 'line'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'line'); ?>
                                    <?php elseif (get_row_layout() == 'logo_grid'): ?>
                                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'logo-grid'); ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (have_rows('additional_content')): ?>
                <?php while (have_rows('additional_content')) : the_row(); ?>
                    <?php if (get_row_layout() == 'content_with_accordion'): ?>
                        <?php echo get_template_part('tpl-parts/flexible-additional-content/flexible-part', 'content-with-accordion'); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (is_singular('post')): ?>
                <?php echo get_template_part('tpl-parts/tpl-part', 'latest-actions') ?>
            <?php endif; ?>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>