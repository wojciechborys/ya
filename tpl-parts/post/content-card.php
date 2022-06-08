<div class="latest-card ">
    <?php if($blogPostImage = get_the_post_thumbnail_url($post)):?>
        <img src="<?php echo $blogPostImage?>" alt="<?php echo $post->post_title?>" class="latest-card__thumbnail">
    <?php endif;?>
    <div class="latest-card__inner">
        <h4 class="latest-card__title"><?php echo $post->post_title?></h4>
        <div class="latest-card__excerpt">
            <?php echo get_the_excerpt($post)?>
        </div>
        <a href="<?php the_permalink($post)?>" class="brdr-link"><?php _e('Read more','yafrica')?></a>
    </div>
</div>