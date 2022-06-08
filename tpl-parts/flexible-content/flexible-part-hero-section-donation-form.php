<?php $heroSectionBackground = get_sub_field('background');
if(!$heroSectionBackground):
    $heroSectionBackground = THEME_DIR_URI.'/assets/images/del/bg-donation.jpg';
endif;?>
<section class="hero" style="background-image: url(<?php echo $heroSectionBackground ?>);">
    <img src="<?php echo $heroSectionBackground ?>"  class="hero__img-m">
    <div class="wrap">
        <div class="hero__inner">
            <div class="hero__content anim">
                <h1 class="hero__title"><?php the_sub_field('title')?></h1>
                <div class="hero__excerpt">
                    <?php the_sub_field('description')?>
                </div>
            </div>
            <div class="donation-widget anim">
                <div class="donation-widget__scroller">
                    <?php echo get_template_part('tpl-parts/tpl-part','donation-form')?>
                </div>
            </div>
        </div>
    </div>
</section>