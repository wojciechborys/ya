<?php $acts = get_field('acts');
if(count($acts)>0):?>
<section class="where-act">
    <div class="wrap wrap--wide">
        <h3 class="section-title anim"><?php _e('Where we work','yafrica')?></h3>
        <div class="where-act__grid js__act-m-slider">
            <?php foreach($acts as $act):?>
                <div class="latest-card anim">
                    <a href="<?php the_permalink($act)?>">
                    <?php if($actImage = get_the_post_thumbnail_url($act,'large')):?>
                        <img src="<?php echo $actImage?>" alt="<?php echo $act->post_title?>" class="latest-card__thumbnail">
                    <?php endif;?>
                    <div class="latest-card__inner">
                        <h4 class="latest-card__title"><?php echo $act->post_title?></h4>
                        <div class="latest-card__excerpt">
                            <?php echo get_the_excerpt($act)?>
                        </div>
                        <span class="brdr-link"><?php _e('Read more','yafrica')?></span>
                    </div>
                    </a>
                </div>
            <?php endforeach;?>
            <?php $impactPage = get_page_by_path('make-impact');?>
            <a href="<?php echo get_page_link(26)?>" class="where-act__link anim"><span><?php _e('Create impact','yafrica')?></span></a>
        </div>
    </div>
</section>
<?php endif;?>