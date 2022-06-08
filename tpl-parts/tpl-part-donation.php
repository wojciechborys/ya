<?php
    $sectionBackground =get_field('section_background_donation','option');
?>
<section class="donation">
    <img src="<?php the_field('items_logo','option') ?>" alt="<?php _e('Young Africa','yafrica')?>" class="donation__sign anim">
    <div class="wrap wrap--wide">
        <div class="donation__inner" style="background-image: url('<?php echo $sectionBackground ?>');">
            <img src="<?php echo $sectionBackground ?>" class="donation__thumbnail">
            <div class="donation-widget anim">
                <div class="donation-widget__scroller">
                    <?php echo get_template_part('tpl-parts/tpl-part','donation-form')?>
                </div>
            </div>
        </div>
    </div>
</section>