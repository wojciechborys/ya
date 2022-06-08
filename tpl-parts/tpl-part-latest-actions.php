<?php $blogPosts = get_posts(array(
    'post_type' => 'post',
));
if(count($blogPosts)>0):?>
<section class="latest-actions" id="latest-actions">
    <div class="wrap wrap--wide">
        <div class="latest-actions__inner">
            <h3 class="section-title anim"><?php _e('Our latest actions','yafrica')?></h3>
            <div class="latest-slider js__latest-slider anim">
                <?php foreach($blogPosts as $blogPost):?>
                    <div>
                        <a href="<?php the_permalink($blogPost)?>">
                        <div class="latest-card">
                            <?php if($blogPostImage = get_the_post_thumbnail_url($blogPost,'large')):?>
                                <img src="<?php echo $blogPostImage?>" alt="<?php echo $blogPost->post_title?>" class="latest-card__thumbnail">
                            <?php endif;?>
                            <div class="latest-card__inner">
                                <h4 class="latest-card__title"><?php echo $blogPost->post_title?></h4>
                                <div class="latest-card__excerpt">
                                    <?php echo get_the_excerpt($blogPost)?>
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