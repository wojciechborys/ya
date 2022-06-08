<?php if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();?>
        <section class="first-content">
            <div class="wrap">
                <div class="first-content__inner content  anim">
                    <?php the_content();?>
                </div>
            </div>
        </section>
    <?php endwhile;
endif;?>