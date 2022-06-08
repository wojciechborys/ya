<?php if(get_sub_field('items')):?>
    <section class="impact impact--shortcode">
        <div class="impact__loop js__impact-slider anim">
            <?php while(has_sub_field('items')):?>
                <div>
                    <a href="<?php the_sub_field('link')?>">
                        <div class="impact-card">
                            <svg xmlns="http://www.w3.org/2000/svg" width="236.25" height="206.75" viewBox="0 0 236.25 206.75"><path fill="#1d81b7" fill-rule="evenodd" d="M572.41,329.549l-40.557-68.815-38.3,68.923L453,260.843l38.3-68.923L529.591,123l40.558,68.815L610.7,260.628l40.556,68.813ZM415,329.766v-0.534l38-68.389,40.55,68.816Zm1.966-68.956L415,264.345V123.217l78.555-.105-38.3,68.848Z" transform="translate(-415 -123)"/></svg>
                            <div class="impact-card__inner">
                                <h4 class="impact-card__title">
                                    <?php the_sub_field('title')?>
                                </h4>
                                <div class="impact-card__excerpt">
                                    <p><?php the_sub_field('description')?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile;?>
        </div>
    </section>
    <br>
<?php endif;?>