    <section class="working-process">

        <div class="wrap wrap--wide">
            <div class="working-process__inner">
                <?php if($link_top = get_sub_field('link_top')):?>
                    <a href="<?php echo $link_top['url']?>" class="brdr-link top-link"><?php echo $link_top['title']?></a>
                <?php endif;?>
                <h3 class="section-title anim"><?php the_sub_field('main_title')?></h3>
                <div class="working-process__grid">
                    <div class="working-process__list">
                        <?php while(has_sub_field('items')):?>
                            <div class="working-process__list-item anim">
                                <div class="working-process__list-img">
                                    <?php echo get_row_index(); ?>.
                                    <?php if($icon = get_sub_field('icon')):?>
                                        <img src="<?php echo wp_get_attachment_image_url($icon) ?>"/>
                                    <?php endif;?>
                                </div>
                                <div class="working-process__list-content">
                                    <span class="working-process__list-title"><?php the_sub_field('title')?></span>
                                    <span class="working-process__list-text"><?php the_sub_field('description')?></span>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                    <div class="working-process__main anim">
                        <?php if($mainIcon = get_sub_field('main_icon')):?>
                            <div class="working-process__main-img">
                                <img src="<?php echo wp_get_attachment_image_url($mainIcon) ?>">
                            </div>
                        <?php endif;?>
                        <!--<div class="working-process__main-content">
                            <span class="working-process__main-title"><?php the_sub_field('main_title')?></span>
                            <span class="working-process__main-text"><?php the_sub_field('main_description')?></span>
                        </div>-->
                    </div>
                </div>
                <?php if($link = get_sub_field('link')):?>
                    <a href="<?php echo $link['url']?>" class="brdr-link"><?php echo $link['title']?></a>
                <?php endif;?>
            </div>
        </div>
    </section>