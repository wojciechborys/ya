<?php

    $testimonies = get_field('testimonials');

if(count($testimonies)>0):?>
    <section class="testimonials anim">
        <div class="wrap wrap--wide">
            <div class="testimonials__inner">
<!--                <h3 class="section-title">--><?php //_e('Testimonies','yafrica')?><!--</h3>-->
                <div class="testimonials-slider js__testimonials-slider">
                    <?php foreach($testimonies as $testimonial):?>
                        <div>
                            <div class="testimonials-slider__card">
                                <div class="testimonials-slider__card-content">
                                    <div class="testimonials-slider__card-inner">
                                        <blockquote class="testimonials-slider__card-quote"><?php echo $testimonial->post_content?></blockquote>
                                        <span class="testimonials-slider__card-status"><?php the_field('organization_name',$testimonial->ID)?></span>
                                        <span class="testimonials-slider__card-name"><?php the_field('author_name',$testimonial->ID)?></span>
                                    </div>
                                </div>
                                <div class="testimonials-slider__card-thumbnail">
                                    <?php if($testionialImage = get_the_post_thumbnail_url($testimonial)):?>
                                        <img src="<?php echo $testionialImage?>" alt="<?php the_field('author_name',$testimonial->ID)?>">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>