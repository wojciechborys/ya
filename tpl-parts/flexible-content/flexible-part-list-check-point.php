<?php if(get_sub_field('lines')):?>

    <ul class="listcheck-wrap">
        <?php while(has_sub_field('lines')):?>
            <li class="anim">

                    <?php the_sub_field('line')?>

            </li>
        <?php endwhile;?>
    </ul>

<?php endif;?>