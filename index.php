<?php

get_header(); ?>

<?php if ( have_posts() ) : ?>

    <?php ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php
            get_template_part('content','page');
        ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>