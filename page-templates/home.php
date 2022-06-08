<?php
/**
 * Template name: Home page
 */
?>
<?php get_header('home'); ?>

<main class="main">
    <?php $heroSectionBackground = get_field('hero_section_background');
    if(!$heroSectionBackground):
        $heroSectionBackground = THEME_DIR_URI.'/assets/images/del/bg-front.jpg';
    endif;?>
    <section class="hero hero--front" style="background-image: url(<?php echo $heroSectionBackground?>);">
        <img src="<?php echo $heroSectionBackground?>" alt="<?php the_field('hero_section_title')?>" class="hero__img-m">
        <div class="wrap">
            <div class="hero__inner">
                <div class="hero__content anim">
                    <h1 class="hero__title"><?php the_field('hero_section_title')?></h1>
                    <div class="hero__excerpt">
                        <?php the_field('hero_section_description')?>
                    </div>
                    <ul class="hero__links">
                        <?php $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['hero-menu'];
                        $heroMenuItems = wp_get_nav_menu_items($menuID);
                        foreach($heroMenuItems as $heroMenuItem):?>
                            <li><a href="<?php echo $heroMenuItem->url?>"><?php echo $heroMenuItem->title?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <a href="#latest-actions" class="hero__arrow js__go-to"><?php _e('Read More','yafrica')?></a>
                <div class="hero__video">
                    <a href="#" class="hero__video-toggle js__toggle-hero-video">
                        <img src="<?php echo THEME_DIR_URI ?>/assets/images/icons/arrow-hero-video.svg" alt="Open Video">
                    </a>
                    <?php $heroVideo = get_field('hero_video');
                    $heroVideoPoster = get_field('hero_video_poster');
                    if(!$heroVideo){
                        $heroVideo = THEME_DIR_URI."/assets/video/video.mp4";
                    }
                    if(!$heroVideoPoster){
                        $heroVideoPoster = THEME_DIR_URI."/assets/images/del/video-poster.png";
                    }else{
                        $heroVideoPoster =wp_get_attachment_image_url($heroVideoPoster, 'large');
                    }
                    ?>
                    <div class="hero__video-container">
                        <div class="video js__video">
                            <video src="<?php echo $heroVideo ?>" poster="<?php echo $heroVideoPoster ?>" ></video>
                            <a href="#" class="video__btn-play js__video-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.123" height="25.308" viewBox="0 0 22.123 25.308"><path d="M4.1,14.748l4.1-7.375,4.339,7.363h0L8.194,7.375,12.291,0,16.63,7.363l4.339,7.362h0l4.339,7.363-8.436.012-4.339-7.362h0l-4.1,7.374L0,22.123ZM4.1,14.748Zm8.437-.012,8.435-.011h0l-8.435.011Z" transform="translate(22.123) rotate(90)" fill="#fff"/></svg>
                                <?php _e('Play video','yafrica')?>
                            </a>
                            <!--<a href="#" class="video__btn-pause js__video-pause">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="24" viewBox="0 0 11 24"><path d="M1,1V23" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M1,1V23" transform="translate(9)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                            </a>
                            <a href="#" class="video__btn-expand js__video-expand">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="a"><path d="M0,0H11V11H0Z" fill="none"/></clipPath><clipPath id="b"><path d="M0,0H11V11H0Z" transform="translate(0 0)" fill="none"/></clipPath></defs><path d="M1,10A1,1,0,0,1,0,9V1A1,1,0,0,1,1,0H9A1,1,0,0,1,9,2H2V9a1,1,0,0,1-1,1" fill="#fff"/><path d="M0,0H11V11H0Z" fill="none"/><g clip-path="url(#a)"><path d="M10,11a1,1,0,0,1-.707-.293l-9-9A1,1,0,0,1,1.707.293l9,9A1,1,0,0,1,10,11" transform="translate(0 0)" fill="#fff"/></g><path d="M9,10H1A1,1,0,0,1,1,8H8V1a1,1,0,0,1,2,0V9a1,1,0,0,1-1,1" transform="translate(14 14)" fill="#fff"/><g transform="translate(13 13)"><path d="M0,0H11V11H0Z" transform="translate(0 0)" fill="none"/><g clip-path="url(#b)"><path d="M10,11a1,1,0,0,1-.707-.293l-9-9A1,1,0,0,1,1.707.293l9,9A1,1,0,0,1,10,11" transform="translate(0 0)" fill="#fff"/></g></g></svg>
                            </a>-->
                        </div>
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
	<?php echo get_template_part('tpl-parts/tpl-part','donation')?>
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
	<?php echo get_template_part('tpl-parts/tpl-part','some-numbers')?>
    <?php echo get_template_part('tpl-parts/tpl-part','video');?>
	<?php echo get_template_part('tpl-parts/tpl-part','latest-actions')?>
    <?php echo get_template_part('tpl-parts/tpl-part','make-impact')?>
    <?php echo get_template_part('tpl-parts/tpl-part','acts')?>
   
    <?php echo get_template_part('tpl-parts/tpl-part','testimonies')?>

</main>

<?php

get_footer(); ?>
