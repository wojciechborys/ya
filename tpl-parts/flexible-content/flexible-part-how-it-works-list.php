<?php if(get_sub_field('items')):?>
    <section class="how-it-works">
        <?php while(has_sub_field('items')):?>
            <div class="franchise-process__list-item anim">
                <div class="working-process__list-img">
                    <?php echo get_row_index(); ?>.
                    <img src="<?php the_sub_field('icon')?>">
                </div>
                <div class="working-process__list-content">
                    <span class="working-process__list-title"><?php the_sub_field('title')?></span>
                    <span class="working-process__list-text"><?php the_sub_field('description')?></span>
                </div>
            </div>
        <?php endwhile;?>
        <?php if($mainImg = get_sub_field('main_image')):?>
            <div class="working-process__main-img">
                <img src="<?php echo $mainImg?>">
            </div>
        <?php endif;?>
    </section>
    <br>
<?php endif;?>