<?php if(get_sub_field('items')):?>
<div class="wrap wrap--wide wrap--full-width left-image">
    <div class="content-page" data-sticky-container>
            <div class="content-page__thumbnail">
                <div class="content-page__thumbnail-inner js__sticky">
                    <div class="relative">
                        <?php while (has_sub_field('items')):?>
                            <div class="tab-image-wrp <?php if (get_row_index() > 1): ?> d-none absolute<?php endif; ?>">
                                <img src="<?php the_sub_field('image') ?>"
                                     class="img-fluid anim device-height">
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <div class="content-page__main">
            <div class="left-image__content content anim">
                    <h4><?php the_sub_field('title')?></h4>
                    <div class="faq-wrap">
                        <?php while(has_sub_field('items')):;?>
                            <div class="faq-spoiler js__faq-spoiler anim">
                                <div class="faq-spoiler__title"><?php the_sub_field('title')?></div>
                                <div class="faq-spoiler__content">
                                    <?php the_sub_field('description')?>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                    <?php if ( get_sub_field( 'content' ) ): ?>
                        <?php while ( has_sub_field( 'content' ) ) :?>
                            <?php if ( get_row_layout() == 'content_title' ): ?>
                                <?php echo get_template_part( 'tpl-parts/flexible-content/flexible-part', 'content-title' ); ?>
                            <?php elseif ( get_row_layout() == 'address_content' ): ?>
                                <?php echo get_template_part( 'tpl-parts/flexible-content/flexible-part', 'address-content' ); ?>
                            <?php elseif ( get_row_layout() == 'short_box' ): ?>
                                <?php echo get_template_part( 'tpl-parts/flexible-content/flexible-part', 'short-box' ); ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
            </div>

        </div>
    </div>
</div>
<?php endif;?>