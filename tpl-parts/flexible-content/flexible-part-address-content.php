    <div class="contacts-box js__contacts-box is-opened is-active">
        <div class="contacts-box__body js__contacts-box-body">
            <div class="contacts-box__grid anim">
                <?php if($contactAddress = get_sub_field('address')):?>
                    <div class="contacts-box__col">
                        <h5 class="contacts-box__col-title"><?php _e('Address','yafrica')?></h5>
                        <p><?php echo $contactAddress?></p>
                    </div>
                <?php endif;?>
                <?php if(!empty(get_sub_field('opening_days')) && !empty(get_sub_field('opening_time'))):?>
                    <div class="contacts-box__col">
                        <h5 class="contacts-box__col-title"><?php _e('Opening','yafrica')?></h5>
                        <ul>
                            <li><?php the_sub_field('opening_days')?></li>
                            <li><?php the_sub_field('opening_time')?></li>
                        </ul>
                    </div>
                <?php endif;?>
                <?php if($contactPhone = get_sub_field('phone')):?>
                    <div class="contacts-box__col">
                        <h5 class="contacts-box__col-title"><?php _e('Phone number','yafrica')?></h5>
                        <ul>
                            <li><?php echo $contactPhone?></li>
                        </ul>
                    </div>
                <?php endif;?>
                <?php if($contactEmail = get_sub_field('email')):?>
                    <div class="contacts-box__col">
                        <h5 class="contacts-box__col-title"><?php _e('Email Address','yafrica')?></h5>
                        <ul>
                            <li><?php echo $contactEmail?></li>
                        </ul>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>