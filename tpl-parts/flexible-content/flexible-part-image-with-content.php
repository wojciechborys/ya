<section class="img-with-content ">
    <div class="wrap">
        <div class="img-with-content__inner content anim">
            <div class="img-with-content__img">
                <?php if ($smallImage = get_sub_field('small_image')): ?>
                    <img src="<?php echo wp_get_attachment_image_url($smallImage, 'large') ?>">
                <?php endif; ?>
                <p><?php the_sub_field('image_description') ?></p>
            </div>
            <?php the_sub_field('content') ?>
        </div>
    </div>
</section>