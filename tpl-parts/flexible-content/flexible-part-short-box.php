<div class="short-box anim">
    <div class="short-box__title"><?php the_sub_field('title') ?></div>
    <div class="short-box__excerpt">
        <?php the_sub_field('description')?>
    </div>
    <?php $link = get_sub_field('link'); ?>
    <a href="<?php echo $link['url'] ?>" class="brdr-link anim" target="<?php echo $link['target'] ?>">
        <?php echo $link['title']?>
    </a>
    <?php if(!empty(get_field('items_logo_blue','option'))):?>
        <img src="<?php the_field('items_logo_blue','option') ?>"  class="short-box__sign">
    <?php endif;?>
</div>