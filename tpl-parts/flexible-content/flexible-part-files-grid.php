<?php if(get_sub_field('items')):?>
    <div class="partners-grid files-grid">
        <?php while (has_sub_field('items')): ?>
            <?php if($file = get_sub_field('file')):?>
                <div class="partners-grid__card anim">
                    <a href="<?php echo $file['url'] ?>" target="_blank">
                        <h4><?php the_sub_field('title') ?></h4>
                    </a>
                </div>
            <?php endif?>
        <?php endwhile; ?>
    </div>
<?php endif;?>