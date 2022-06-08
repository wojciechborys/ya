<?php if(get_sub_field('items')):?>
<div class="contacts-box__wrap">
    <?php while(has_sub_field('items')):?>
        <div class="contacts-box js__contacts-box <?php if(get_row_index()==1):?> is-opened<?php endif;?>">
            <h4 class="contacts-box__title js__contacts-box-title anim"><?php the_sub_field('title')?></h4>
            <div class="contacts-box__body js__contacts-box-body" <?php if(get_row_index()==1):?> style="display: block;"<?php endif;?>>
                <div class="contacts-box__excerpt anim">
                    <?php the_sub_field('description')?>
                </div>
                <div class="contacts-box__grid anim box-padding-bottom">
                    <?php while(has_sub_field('grid_items')):?>
                        <div class="contacts-box__col">
                            <h5 class="contacts-box__col-title"><?php the_sub_field('title')?></h5>
                            <?php the_sub_field('content')?>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    <?php endwhile;?>
</div>
<?php endif;?>
