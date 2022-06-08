<?php
/**
 * Template name: Page x5 Template
 */
?>
<?php get_header(); ?>
    <main class="main template-x5">
        <div class="wrap content">
            <div class="content-page__title">
                <h3><?php the_field('main_title') ?></h3>
            </div>
            <?php if (have_rows('flexible_content')): ?>
                <?php while (have_rows('flexible_content')) : the_row(); ?>
                    <?php if (get_row_layout() == 'content_row'): ?>
                        <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'content-row'); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>