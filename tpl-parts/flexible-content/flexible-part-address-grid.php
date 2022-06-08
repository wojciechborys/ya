<div class="contacts-box__grid anim box-padding-bottom">
    <?php while(has_sub_field('items')):?>
        <div class="contacts-box__col">
            <h5 class="contacts-box__col-title"><?php the_sub_field('title')?></h5>
            <?php the_sub_field('content')?>
        </div>
    <?php endwhile;?>
</div>