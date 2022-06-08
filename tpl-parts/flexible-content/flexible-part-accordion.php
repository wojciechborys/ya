<?php if(get_sub_field('items')):?>
    <h4><?php the_sub_field('title')?></h4>
    <div class="faq-wrap">
        <?php while(has_sub_field('items')):?>
            <div class="faq-spoiler js__faq-spoiler anim">
                <div class="faq-spoiler__title"><?php the_sub_field('title')?></div>
                <div class="faq-spoiler__content">
                    <?php the_sub_field('description')?>
                </div>
            </div>
        <?php endwhile;?>
    </div>
    <br>
<?php endif;?>