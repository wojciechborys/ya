<?php /** * Template name: Page x2 Template */ ?><?php get_header(); ?>
<main class="main">
    <?php if (have_rows('flexible_content')): ?>

        <?php while (have_rows('flexible_content')) : the_row(); ?>

            <?php if (get_row_layout() == 'hero_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'hero-section'); ?>

            <?php elseif (get_row_layout() == 'hero_section_donation_form'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'hero-section-donation-form'); ?>

            <?php elseif (get_row_layout() == 'content_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'content-section'); ?>

            <?php elseif (get_row_layout() == 'two_photos_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'two-photos-section'); ?>

            <?php elseif (get_row_layout() == 'testimonials_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'testimonials-section'); ?>

            <?php elseif (get_row_layout() == 'image_with_content'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'image-with-content'); ?>

            <?php elseif (get_row_layout() == 'video'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'video'); ?>

            <?php elseif (get_row_layout() == 'numbers_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'numbers-section'); ?>

            <?php elseif (get_row_layout() == 'gallery_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'gallery-section'); ?>

            <?php elseif (get_row_layout() == 'posts_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'posts-section'); ?>

            <?php elseif (get_row_layout() == 'posts_slider'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'posts-slider'); ?>

            <?php elseif (get_row_layout() == 'our_mission'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'our-mission'); ?>

            <?php elseif (get_row_layout() == 'how_it_works'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'how-it-works'); ?>

            <?php elseif (get_row_layout() == 'reports_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'reports-section'); ?>

            <?php elseif (get_row_layout() == 'impact_loop_section'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'impact-loop-section'); ?>

            <?php elseif (get_row_layout() == 'footer_content'): ?>

                <?php echo get_template_part('tpl-parts/flexible-content/flexible-part', 'footer-content'); ?>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>
</main>
<?php get_footer(); ?>

