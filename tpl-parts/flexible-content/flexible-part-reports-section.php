<section class="where-actions where-actions--second">
    <div class="wrap">
        <div class="where-actions__inner js__act-m-slider">
            <?php while(has_sub_field('items')):?>
                <div>
                    <div class="where-card anim">
                        <?php if($projectImage = get_sub_field('image')):?>
                            <div class="where-card__thumbnail">
                                <img src="<?php echo wp_get_attachment_image_url( $projectImage, 'large' )?>" alt="<?php the_sub_field('title')?>"  class="img-fluid">
                            </div>
                        <?php endif;?>
                        <div class="where-card__content">
                            <h3 class="where-card__title">
                                <?php the_sub_field('title')?>
                            </h3>
                            <div class="where-card__excerpt">
                                <?php the_sub_field('description')?>
                            </div>
                            <?php if($file = get_sub_field('file')):?>
                                <a href="<?php echo $file?>" class="brdr-link" target="_blank"><?php _e('Download','yafrica')?></a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
</section>