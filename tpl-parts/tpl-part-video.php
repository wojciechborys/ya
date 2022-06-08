<?php $video = get_field('video');
$videoPoster = get_field('video_poster');
if(!$video){
   $video = THEME_DIR_URI."/assets/video/video.mp4";
}
if(!$videoPoster){
    $videoPoster = THEME_DIR_URI."/assets/images/del/video-poster-2.png";
}else{
    $videoPoster =wp_get_attachment_image_url($videoPoster, 'large');
}
?>
<section class="<?php if(is_front_page()):?>front-video<?php else:?>page-video<?php endif;?> anim">
    <div class="wrap wrap--wide">
        <div class="video js__video">
            <video src="<?php echo $video ?>" poster="<?php echo $videoPoster ?>"  ></video>
            <a href="#" class="video__btn-play js__video-play">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.123" height="25.308" viewBox="0 0 22.123 25.308"><path d="M4.1,14.748l4.1-7.375,4.339,7.363h0L8.194,7.375,12.291,0,16.63,7.363l4.339,7.362h0l4.339,7.363-8.436.012-4.339-7.362h0l-4.1,7.374L0,22.123ZM4.1,14.748Zm8.437-.012,8.435-.011h0l-8.435.011Z" transform="translate(22.123) rotate(90)" fill="#fff"/></svg>
                <?php _e('Play video','yafrica')?>
            </a>
            <!--<a href="#" class="video__btn-pause js__video-pause">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="24" viewBox="0 0 11 24"><path d="M1,1V23" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M1,1V23" transform="translate(9)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
            </a>-->
        </div>
    </div>
</section>