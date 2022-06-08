<?php $postObjects = get_sub_field('posts');
if(count($postObjects)>0):?>
    <section class="latest-actions" >
        <div class="wrap wrap--wide">
            <div class="latest-actions__inner">
                <h3 class="section-title anim"><?php the_sub_field('title')?></h3>
                <div class="latest-slider js__latest-slider anim">
                    <?php foreach($postObjects as $postObject):?>
                        <div>
                            <a href="<?php the_permalink($postObject)?>">
                                <div class="latest-card">
                                    <?php if($postObjectImage = get_the_post_thumbnail_url($postObject,'large')):?>
                                        <img src="<?php echo $postObjectImage?>" alt="<?php echo $postObject->post_title?>" class="latest-card__thumbnail">
                                    <?php endif;?>
                                    <div class="latest-card__inner">
                                        <h4 class="latest-card__title"><?php echo $postObject->post_title?></h4>
                                        <div class="latest-card__excerpt">
                                            <?php echo get_the_excerpt($postObject)?>
                                        </div>
                                        <span class="brdr-link"><?php _e('Read more','yafrica')?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>