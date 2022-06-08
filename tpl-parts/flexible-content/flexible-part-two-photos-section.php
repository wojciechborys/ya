<section class="two-photos">
    <div class="wrap">
        <div class="two-photos__inner">
            <?php if ($largePhoto = get_sub_field('large_photo')): ?>
                <div class="two-photos__large anim">
                    <img src="<?php echo wp_get_attachment_image_url($largePhoto, 'large') ?>">
                </div>
            <?php endif; ?>
            <?php if ($smallPhoto = get_sub_field('small_photo')): ?>
                <div class="two-photos__small anim">
                    <img src="<?php echo wp_get_attachment_image_url($smallPhoto, 'large') ?>">
                </div>
            <?php endif; ?>
            <div class="two-photos__excerpt anim">
                <?php the_sub_field('description') ?>
            </div>
        </div>
        <?php if (get_sub_field('content')): ?>
            <div class="two-photos-content content  anim">
                <div class="two-photos-description">
                    <?php the_sub_field('content'); ?>
                </div>
                <?php if (!empty(get_field('items_logo_blue', 'option'))): ?>
                    <img src="<?php the_field('items_logo_blue', 'option') ?>" class="content-box__sign anim">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>