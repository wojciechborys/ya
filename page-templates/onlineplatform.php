<?php
/**
 * Template name: Online Platform
 */
?>
<?php get_header('home'); ?>

<main class="main">
    <?php $heroSectionBackground = get_field('hero_Online_Platform_background');
    if(!$heroSectionBackground):
        $heroSectionBackground = THEME_DIR_URI.'/assets/images/del/bg-front.jpg';
    endif;?>
    <section class="hero hero--front" style="background-image: url(<?php echo $heroSectionBackground?>);">
        <img src="<?php echo $heroSectionBackground?>" alt="<?php the_field('hero_section_title')?>" class="hero__img-m">
        <div class="wrap">
            <div class="hero__inner">
                <div class="hero__content anim">
                    <h1 class="hero__title"><?php the_field('hero_Online_Platform_title')?></h1>
                    <div class="hero__excerpt">
                        <?php the_field('hero_online_platform_description')?>
                    </div>
					
                </div>
                
            </div>
        </div>
        <img src="<?php echo THEME_DIR_URI ?>/assets/images/svg/letters.svg"  class="hero__sign anim">
        <span class="hero__text"><?php the_field('hero_section_side_text')?></span>
        <div class="hero__video-overlay js__hero-video-overlay"></div>
        <div class="video-modal js__video-modal">
            <div class="video-modal__inner">
                <div class="video-modal__window">
                    <div class="video-modal__insert js__insert-video"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="img-with-text anim">
        <div class="wrap wrap--wide">
            <div class="img-with-text__inner">
                <?php if(!empty(get_field('our_mission_side_image'))):?>
                    <div class="img-with-text__thumbnail">
                        <img src="<?php the_field('our_mission_side_image') ?>" alt="" class="img-fluid">
                    </div>
                <?php endif;?>
                <div class="img-with-text__content">
                    <h3 class="img-with-text__title"><?php the_field('our_mission_title') ?></h3>
                    <div class="img-with-text__excerpt">
                        <?php the_field('our_mission_description')?>
                    </div>
                    <?php if($ourMissionLink = get_field('our_mission_link')):?>
                        <a href="<?php echo $ourMissionLink['url']?>" class="brdr-link" target="<?php echo $ourMissionLink['target']?>"><?php echo $ourMissionLink['title']?></a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php

get_footer(); ?>
