<?php $postObjects = get_sub_field('posts');
if(count($postObjects)>0):?>
    <section class="where-actions where-actions--second">
        <div class="wrap">
            <div class="where-actions__inner js__act-m-slider">
                <?php foreach($postObjects as $postObject):?>
                    <div>
                        <div class="where-card anim">
                            <?php if($postImage = get_the_post_thumbnail_url($postObject,'large')):?>
                                <div class="where-card__thumbnail">
                                    <img src="<?php echo $postImage?>" alt="<?php echo $postObject->post_title?>"  class="img-fluid">
                                </div>
                            <?php endif;?>
                            <div class="where-card__content">
                                <h3 class="where-card__title">
                                    <a href="<?php the_permalink($postObject)?>"><?php echo $postObject->post_title?></a>
                                </h3>
                                <div class="where-card__excerpt">
                                    <?php echo get_the_excerpt($postObject)?>
                                </div>
                                <a href="<?php the_permalink($postObject)?>" class="brdr-link"><?php _e('Read more','yafrica')?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </section>
<?php endif;?>