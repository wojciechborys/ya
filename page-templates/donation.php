<?php
/**
 * Template name: Donation
 */
?>
<?php get_header();


$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
?>

    <main class="main overflow-visible">
        <?php $heroSectionImage = get_field('hero_section_background');
        if (!$heroSectionImage):
            $heroSectionImage = THEME_DIR_URI . '/assets/images/del/bg-donation.jpg';
        endif; ?>
        <div class="wrap wrap--wide ">
            <div class="content-page" data-sticky-container>
                <div class="content-page__thumbnail">
                    <div class="content-page__thumbnail-inner js__sticky">
                        <img src="<?php echo $heroSectionImage ?>" class="img-fluid anim">
                        <?php if (!empty(get_field('items_logo_blue', 'option'))): ?>
                            <img src="<?php the_field('items_logo_blue', 'option') ?>"
                                 alt="<?php _e('Young Africa', 'yafrica') ?>" class="content-page__sign anim">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="content-page__main">
                    <?php if (!empty(get_field('items_logo_blue', 'option'))): ?>
                        <img src="<?php the_field('items_logo_blue', 'option') ?>"
                             alt="<?php _e('Young Africa', 'yafrica') ?>" class="content-page__main-sign">
                    <?php endif; ?>
                    <div class="donation-widget donation-widget--full anim">
                        <div class="donation-widget__scroller">
                            <div class="donation-widget__card">
                                <div class="donation-widget__card-title"><?php _e('Donation', 'yafrica') ?></div>
                                <?php if (have_posts()) :
                                    while (have_posts()) :
                                        the_post(); ?>
<!--                                        --><?php //the_content(); ?>
                                        <?php echo do_shortcode(get_field('donation_form')); ?>
                                    <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">

        jQuery(document).ready(function () {
            let country = '<?php  echo $details->country;  ?>';
            let defaultDescropt = "<?php the_field('custom_price_description', 'option') ?>";

            let getPeriod = '<?php echo $_GET['donation-period']?>';
            let getPrice = '<?php echo $_GET['donation-sum']?>';
            let donationMonthlySum = '<?php echo $_GET['donation-monthly-sum']?>';
            let donationOonceSum = donationMonthlySum;
            jQuery('.donation-widget__notification__default').text(defaultDescropt).hide()


            let intervalOptions = jQuery('.pt-subscription-interval-options');
            jQuery('.pt-form-group-subscription-interval').children('label').remove();
            intervalOptions.addClass('donation-widget__period');
            intervalOptions.addClass('donation-widget__section');
            jQuery('.amount_options:not(".active")').css({opacity: "0"})
            intervalOptions.find('label').addClass('donation-radio');
            intervalOptions.find('input[type="radio"]').change(function () {
                intervalOptions.find('label').removeClass('radio-checked');
                jQuery('.amount_options').removeClass('active').animate({opacity: "0"}, 100).hide()
                jQuery(this).closest('label').addClass('radio-checked');

                if (jQuery(this).val() === '1 months') {
                    jQuery('#amount_options').addClass('active').animate({opacity: "1"}, 500).show()
                    if (jQuery('#amount_options').find('.radio-checked ').find('input').attr('value')) {

                        jQuery('.donation-widget__notification__custom').text(jQuery('#amount_options').find('.radio-checked ').find('input').attr('data-description'))
                    } else {

                        jQuery('.donation-widget__notification__default').text(defaultDescropt).show()
                        jQuery('.donation-widget__notification__custom').hide()

                    }
                    jQuery('#amount_options').find('.radio-checked ').find('input').prop("checked", true);

                    jQuery('#amount_options2 .donation-radio input ').prop("checked", false);
                    jQuery('#amount_value').appendTo('#amount_options .pt-radio-group');
                    if (jQuery('#amount_value .pt-uea-custom-amount').val()) {
                        // console.log(2)
                    }
                    // else {
                        // console.log(3)
                        // jQuery('#amount_options').find('label').first().find('input[type="radio"]').trigger('click');
                        // console.log(intervalOptions.find('label').first())
                    // }


                } else if (jQuery(this).val() === 'once') {
                    jQuery('#amount_value').appendTo('#amount_options2 .pt-radio-group');
                    jQuery('#amount_options2').addClass('active').animate({opacity: "1"}, 500).show()
                    jQuery('#amount_options .donation-radio input').prop("checked", false);

                    if (jQuery('#amount_value .pt-uea-custom-amount').val()) {
                        jQuery('#amount_options2 .donation-radio input').prop("checked", false);
                        jQuery('#amount_options2 ').prop("checked", false);
                        jQuery('.donation-widget__notification__default').text(defaultDescropt).show()
                        jQuery('.donation-widget__notification__custom').hide()
                    } else {


                        jQuery('#amount_options2 .donation-radio input').prop("checked", true);
                        jQuery('#amount_options2 .donation-radio ').addClass('radio-checked');
                        jQuery('#amount_options2 ').prop("checked", true);
                        jQuery('.donation-widget__notification__default').hide()
                        jQuery('.donation-widget__notification__custom').show()
                        jQuery('.donation-widget__notification__custom').text(jQuery('#amount_options2').find('.radio-checked ').find('input').attr('data-description'))

                    }


                }


            });
            jQuery(".amount_value input[type='text'] ").change(function () {
                jQuery('.donation-widget__notification__default').show()
                jQuery('.donation-widget__notification__custom').hide()

            }).click(function () {

                jQuery('#amount_options2 ,#amount_options').prop("checked", false);

                jQuery('#amount_options2 .donation-radio input,#amount_options .donation-radio input').prop("checked", false);
                jQuery('#amount_options2 .donation-radio,#amount_options .donation-radio ').removeClass('radio-checked');
            }).focus(function () {
                jQuery('.donation-widget__notification__default').css({opacity: "0"}).show().animate({opacity: "1"}, 500)
                jQuery('.donation-widget__notification__custom').hide()

            })
            let amountOptions = jQuery('#amount_options .pt-radio-group');


            jQuery('#amount_value').appendTo(amountOptions);
            let amountValue = jQuery('#amount_value input.pt-uea-custom-amount');


            jQuery('.pt-uea-currency-prepend').remove();

            let amountOptionWithZeroValue = amountOptions.find('label').first().find('input[type="radio"]').clone().appendTo('#amount_options');
            amountOptionWithZeroValue.val('0');
            amountOptionWithZeroValue.attr('data-pt-price', '0');
            amountOptionWithZeroValue.hide();

            jQuery('#amount_options .pt-form-group-radio').children('label').remove();
            amountOptions.addClass('donation-widget__amount');
            amountOptions.find('label').addClass('donation-radio');

            amountOptions.find('input[type="radio"]').change(function () {
                amountOptions.find('label').removeClass('radio-checked');
                jQuery(this).closest('label').addClass('radio-checked');

                jQuery('.donation-widget__notification__custom').text(jQuery(this).attr('data-description'))
                jQuery('.donation-widget__notification__default').hide()

                jQuery('.donation-widget__notification__custom').css({opacity: "0"}).show().animate({opacity: "1"}, 500)

                amountValue.val('');
            });
            amountOptions.find('input[type="radio"]').removeAttr('checked');
            //amountOptions2

            if (getPrice) {

                let priceRadioButton = amountOptions.find('input[value="' + getPrice + '"]').trigger('click');
                if (priceRadioButton.length > 0) {
                    priceRadioButton.trigger('click');
                } else {
                    // amountValue.trigger('focus').val(getPrice);
                }

            } else {
                amountOptions.find('label').first().find('input[type="radio"]').trigger('click');
                ;

            }

            let amountOptions2 = jQuery('#amount_options2 .pt-radio-group');

            let amountOptionWithZeroValue2 = amountOptions2.find('label').first().find('input[type="radio"]').clone().appendTo('#amount_options2');
            amountOptionWithZeroValue2.val('0');
            amountOptionWithZeroValue2.attr('data-pt-price', '0');
            amountOptionWithZeroValue2.hide();

            jQuery('.pt-uea-currency-prepend').remove();

            amountValue.focus(function () {

                amountOptions.find('input[type="radio"]').removeAttr('checked').prop("checked", false);
                amountOptions.find('label').removeClass('radio-checked');


                amountOptions2.find('input[type="radio"]').removeAttr('checked').prop("checked", false);

                amountOptions2.find('label').removeClass('radio-checked');
                amountOptionWithZeroValue2.trigger('click');

            })
            jQuery('#amount_options2 .pt-form-group-radio').children('label').remove();
            amountOptions2.addClass('donation-widget__amount');
            amountOptions2.find('label').addClass('donation-radio');
            amountOptions2.find('input[type="radio"]').change(function () {
                amountOptions2.find('label').removeClass('radio-checked');
                jQuery(this).closest('label').addClass('radio-checked');
                jQuery('.donation-widget__notification__custom').text(jQuery(this).attr('data-description'))
                jQuery('.donation-widget__notification__default').hide()
                jQuery('.donation-widget__notification__custom').css({opacity: "0"}).show().animate({opacity: "1"}, 500)
                amountValue.val('');
            });
            amountOptions2.find('input[type="radio"]').removeAttr('checked');
            if (getPeriod) {
                setTimeout(function () {
                    intervalOptions.find('input[value="' + getPeriod + '"]').trigger('click');

                }, 1000);
            } else {
                setTimeout(function () {
                    intervalOptions.find('label').first().find('input[type="radio"]').trigger('click');
                }, 1000);
            }
            if (getPrice) {
                setTimeout(function () {
                    let priceRadioButton2 = amountOptions2.find('input[value="' + getPrice + '"]').trigger('click');

                    if (priceRadioButton2.length > 0) {
                        jQuery('#amount_options  input[checked="checked"]').prop('checked', false)

                    }

                }, 100);
            }
            //field Options page , change Countru
            var countContry = 0;
            <?php if (have_rows('custom_price_contry', 'option')): ?>
            <?php while (have_rows('custom_price_contry', 'option')):the_row(); ?>

            if (country == '<?php the_sub_field("contry_code") ?>') {

                jQuery('#amount_options  input[data-pt-price="50"]').val('<?php the_sub_field("value_monthly_1") ?>').attr('data-pt-price', '<?php the_sub_field("value_monthly_1") ?>').parent('label').attr('title', '<?php the_sub_field("value_monthly_1") ?>').find('span').text('€ <?php the_sub_field("value_monthly_1") ?>').find('span').text('€ <?php the_sub_field("value_monthly_1") ?>')
                jQuery('#amount_options  input[data-pt-price="30"]').val('<?php the_sub_field("value_monthly_2") ?>').attr('data-pt-price', '<?php the_sub_field("value_monthly_2") ?>').parent('label').attr('title', '<?php the_sub_field("value_monthly_2") ?>').find('span').text('€ <?php the_sub_field("value_monthly_2") ?>').find('span').text('€ <?php the_sub_field("value_monthly_2") ?>')
                jQuery('#amount_options  input[data-pt-price="15"]').val('<?php the_sub_field("value_monthly_3") ?>').attr('data-pt-price', '<?php the_sub_field("value_monthly_3") ?>').parent('label').attr('title', '<?php the_sub_field("value_monthly_3") ?>').find('span').text('€ <?php the_sub_field("value_monthly_3") ?>').find('span').text('€ <?php the_sub_field("value_monthly_3") ?>')
                jQuery('#amount_options2  input[data-pt-price="185"]').val('<?php the_sub_field("price_one_time_value") ?>').attr('data-pt-price', '<?php the_sub_field("price_one_time_value") ?>').parent('label').attr('title', '€ <?php the_sub_field("price_one_time_value") ?>').find('span').text('<?php the_sub_field("price_one_time_value") ?>').find('span').text('€ <?php the_sub_field("price_one_time_value") ?>')
                countContry++

            }
            <?php endwhile; ?>
            <?php endif; ?>
            if (countContry == 0) {
                <?php      $count = 1;
                if (have_rows('donation_prices', 'option')):
                while (have_rows('donation_prices', 'option')):the_row();

                ?>

                let val<?php echo $count?>Price = "<?php the_sub_field('price_value')  ?>";
                jQuery('.pt_items\\[2\\]_<?php  echo $count?>').val('<?php the_sub_field("price_value") ?>').attr('data-pt-price', '<?php the_sub_field("price_value") ?>').parent('label').attr('title', '<?php the_sub_field("price_value") ?>').find('span').text('€ <?php the_sub_field("price_value") ?>').find('span').text('€ <?php the_sub_field("price_value") ?>')

                <?php      $count++;?>

                <?php endwhile; ?>

                jQuery('#amount_options2  input[data-pt-price="185"]').val('<?php the_field("custom_price_default_value", 'option') ?>').attr('data-pt-price', '<?php the_field("custom_price_default_value", 'option') ?>').parent('label').attr('title', '€ <?php the_field("custom_price_default_value", 'option') ?>').find('span').text('€ <?php the_field("custom_price_default_value", 'option') ?>').find('span').text('€ <?php the_field("custom_price_default_value", 'option') ?>')


                <?php endif; ?>
            }
            if (donationMonthlySum) {

                setTimeout(function () {

                    jQuery("#amount_value input[type='text'] ").val(donationMonthlySum)

                    jQuery("#amount_options input[type='radio'] ").prop('checked', false)
                    jQuery("#amount_options2 input[type='radio'] ").prop('checked', false)

                    jQuery("#amount_options .donation-radio ").removeClass('radio-checked')
                    jQuery("#amount_options2 .donation-radio ").removeClass('radio-checked')
                    amountValue.trigger('focus').val(donationMonthlySum);
                    jQuery("#amount_value input[type='text'] ").trigger('click')

                }, 1100)


            }
            //field Options page , change default field

            //get values from form price


            jQuery('.donation-widget__footer button.brdr-link').removeClass().addClass('brdr-link');
            jQuery('input[value="once"]').next('span').html('<?php _e('One time')?>');


            jQuery('.donation-widget__footer button.donate-confirm').removeClass().addClass('donate-confirm');
            jQuery('.donation-checkbox input').each(function () {
                if (jQuery(this).attr("checked") == 'checked') {
                    jQuery(this).parent('label').addClass('label-checked');
                }
            });
            jQuery('.donation-checkbox input').change(function () {
                jQuery(this).parent('label').toggleClass('label-checked');
            });

            jQuery('.donation-radio-checkbox input').each(function () {
                if (jQuery(this).attr("checked") == 'checked') {
                    jQuery(this).parent('label').addClass('label-checked');
                }
            });
            jQuery('.donation-radio-checkbox input').change(function () {
                jQuery(this).closest('.pt-radio-group').find('label').removeClass('label-checked');
                jQuery(this).parent('label').addClass('label-checked');
            });


            setTimeout(function () {
                if (!jQuery('#amount_times .donation-radio').hasClass('radio-checked')) {
                    jQuery('#amount_times .donation-radio:first-child').addClass('radio-checked')
                    jQuery('#amount_options').addClass('active').animate({opacity: "1"}, 500).show()

                    jQuery('#amount_options').find('.radio-checked ').find('input').prop("checked", true);

                    jQuery('#amount_options2 .donation-radio input ').prop("checked", false);

                    jQuery('#amount_value').appendTo('#amount_options .pt-radio-group');
                    jQuery('#amount_options2').hide()
                    jQuery('.donation-widget__notification__custom').text(jQuery('#amount_options .pt-radio-group label:first-child input').attr('data-description'))
                }
                if (jQuery('#amount_times .donation-radio.radio-checked:first-child').length) {
                    jQuery('#amount_options2 .donation-radio input ').prop("checked", false);


                }


            }, 1000)


            //field Options page , change default description
            <?php      $count = 1;
            if (have_rows('donation_prices', 'option')):
            while (have_rows('donation_prices', 'option')):the_row();

            ?>

            let val<?php echo $count?>Price = "<?php the_sub_field('price_value')  ?>";
            jQuery('.pt_items\\[2\\]_<?php  echo $count?>').attr('data-description', '<?php the_sub_field('description')  ?>');

            <?php      $count++;
            endwhile;
            endif;
            ?>

            jQuery('.pt_items\\[6\\]_1').attr('data-description', '<?php the_field('custom_price__one_time_value_description', 'option')  ?>');


        });
        if (window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD) {
            location.reload()

        }

    </script>


<?php get_footer(); ?>