<section class="our-mission">
    <div class="wrap wrap--wide">
        <div class="our-mission__inner">
            <h3 class="our-mission__title anim"><?php the_sub_field('title') ?></h3>
            <ul class="our-mission__list">
                <?php while (has_sub_field('items')):; ?>
                    <li class="our-mission__list-item anim">
                        <?php if ($icon = get_sub_field('icon')): ?>
                            <span class="our-mission__list-img">
                              <img src="<?php echo wp_get_attachment_image_url($icon) ?>"/>
                            </span>
                        <?php endif; ?>
                        <span class="our-mission__list-content">
                              <span class="our-mission__list-title"><?php the_sub_field('title') ?></span>
                              <span class="our-mission__list-text"><?php the_sub_field('description') ?></span>
                            </span>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <?php if (!empty(get_field('items_logo_blue', 'option'))): ?>
        <img src="<?php the_field('items_logo_blue', 'option') ?>" class="our-mission__sign anim">
    <?php endif; ?>
</section>