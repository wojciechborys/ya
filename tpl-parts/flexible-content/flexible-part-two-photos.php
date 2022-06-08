<section class="two-photos two-photos--shortcode">
    <div class="two-photos__inner">
        <?php if ($largePhoto = get_sub_field('large_photo')): ?>
            <div class="two-photos__large anim">
                <img src="<?php echo wp_get_attachment_image_url($largePhoto, 'large') ?>">
            </div>
        <?php endif; ?>
        <?php if ($smallPhoto = get_sub_field('small_photo')): ?>
            <div class="two-photos__small anim">
                <img src="<?php echo wp_get_attachment_image_url($smallPhoto, 'medium') ?>">
            </div>
        <?php endif; ?>
        <div class="two-photos__excerpt anim">
            <?php the_sub_field('description') ?>
        </div>
    </div>
</section>