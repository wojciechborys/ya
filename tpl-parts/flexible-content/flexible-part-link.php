<?php if($link = get_sub_field('link')):?>
    <a href="<?php echo $link['url']?>" class="brdr-link" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
    <br><br>
<?php endif;?>