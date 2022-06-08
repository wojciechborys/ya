

<?php $video = get_sub_field('video');
$videoPoster = get_sub_field('video_poster')['url'];
if (!$video) {
    $video = THEME_DIR_URI . "/assets/video/video.mp4";
}
if (!$videoPoster) {
    $videoPoster = THEME_DIR_URI . "/assets/images/del/video-poster-2.png";
}

?>
<section class="page-video anim nth-section-<?php echo $classSectionCount?>">
<div class="<?php if(get_sub_field('show_in_container')):?>wrap wrap--wide<?php endif;?>" >
    <div class="video js__video">
        <video src="<?php echo $video ?>" poster="<?php echo $videoPoster ?>"
               ></video>
        <a href="#" class="video__btn-play js__video-play">
            <svg xmlns="http://www.w3.org/2000/svg" width="22.123"
                 height="25.308" viewBox="0 0 22.123 25.308">
                <path d="M4.1,14.748l4.1-7.375,4.339,7.363h0L8.194,7.375,12.291,0,16.63,7.363l4.339,7.362h0l4.339,7.363-8.436.012-4.339-7.362h0l-4.1,7.374L0,22.123ZM4.1,14.748Zm8.437-.012,8.435-.011h0l-8.435.011Z"
                      transform="translate(22.123) rotate(90)" fill="#fff"/>
            </svg>
            <?php _e('Play video', 'yafrica') ?>
        </a>
        <!--<a href="#" class="video__btn-pause js__video-pause">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="24"
                 viewBox="0 0 11 24">
                <path d="M1,1V23" fill="none" stroke="#fff"
                      stroke-linecap="round" stroke-miterlimit="10"
                      stroke-width="2"/>
                <path d="M1,1V23" transform="translate(9)" fill="none"
                      stroke="#fff" stroke-linecap="round"
                      stroke-miterlimit="10" stroke-width="2"/>
            </svg>
        </a>
        <a href="#" class="video__btn-expand js__video-expand">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="a"><path d="M0,0H11V11H0Z" fill="none"/></clipPath><clipPath id="b"><path d="M0,0H11V11H0Z" transform="translate(0 0)" fill="none"/></clipPath></defs><path d="M1,10A1,1,0,0,1,0,9V1A1,1,0,0,1,1,0H9A1,1,0,0,1,9,2H2V9a1,1,0,0,1-1,1" fill="#fff"/><path d="M0,0H11V11H0Z" fill="none"/><g clip-path="url(#a)"><path d="M10,11a1,1,0,0,1-.707-.293l-9-9A1,1,0,0,1,1.707.293l9,9A1,1,0,0,1,10,11" transform="translate(0 0)" fill="#fff"/></g><path d="M9,10H1A1,1,0,0,1,1,8H8V1a1,1,0,0,1,2,0V9a1,1,0,0,1-1,1" transform="translate(14 14)" fill="#fff"/><g transform="translate(13 13)"><path d="M0,0H11V11H0Z" transform="translate(0 0)" fill="none"/><g clip-path="url(#b)"><path d="M10,11a1,1,0,0,1-.707-.293l-9-9A1,1,0,0,1,1.707.293l9,9A1,1,0,0,1,10,11" transform="translate(0 0)" fill="#fff"/></g></g></svg>
        </a>-->
    </div>
</div>
</section>