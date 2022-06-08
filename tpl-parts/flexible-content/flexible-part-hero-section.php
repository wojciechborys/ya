<?php $heroSectionBackground = get_sub_field('background');
if(!$heroSectionBackground):
    $heroSectionBackground = THEME_DIR_URI.'/assets/images/del/bg-who-we-are.jpg';
endif;?>
<section class="hero" style="background-image: url(<?php echo $heroSectionBackground ?>);">
    <img src="<?php echo $heroSectionBackground ?>" class="hero__img-m">
    <div class="wrap">
        <div class="hero__inner">
            <div class="hero__content anim">
                <h1 class="hero__title"><?php the_sub_field('title')?></h1>
                <div class="hero__excerpt">
                    <?php the_sub_field('description')?>
                </div>
            </div>
        </div>
    </div>
    <?php if( !empty(get_field('items_logo', 'option')) ):?>
        <img src="<?php the_field('items_logo','option') ?>" alt="<?php _e('Young Africa','yafrica')?>" class="hero__sign anim">
    <?php endif;?>
</section>
<section class="first-content">
    <div class="wrap">
        <div class="first-content__inner content anim">
            <?php the_sub_field('first_content') ?>
        </div>
    </div>
</section>
<br>