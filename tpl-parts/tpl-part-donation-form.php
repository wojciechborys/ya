<?php $donationPage = get_page_by_path('donation');
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json")); ?>
<form name="donation_step_first" action="<?php the_permalink(pll_get_post($donationPage->ID)) ?>" class="donation-widget__card">
    <div class="donation-widget__card-title"><?php _e('Donation', 'yafrica') ?></div>
    <?php if (have_rows('donation_periods', 'option')): ?>
        <div class="donation-widget__period donation-widget__section">
            <?php while (have_rows('donation_periods', 'option')): the_row(); ?>
                <div class="donation-radio">
                    <input type="radio" name="donation-period" value="<?php the_sub_field('period_value') ?>"
                           id="donation-period--<?php echo get_row_index() ?>"
                           <?php if (get_row_index() == 1): ?>checked<?php endif; ?>>
                    <label for="donation-period--<?php echo get_row_index() ?>"><?php the_sub_field('period_title') ?></label>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <?php $notification = get_field('custom_price_description', 'option'); ?>
    <?php if (have_rows('donation_prices', 'option')): ?>
        <div id="amount_options" class=" amount_options active donation-widget__sum">
            <?php while (have_rows('donation_prices', 'option')):the_row(); ?>
                <?php if (get_row_index() == 1): ?>
                    <?php $notification = get_sub_field('description'); ?>
                <?php endif; ?>
                <div class="donation-radio   <?php if (get_row_index() == 1): ?>radio-checked<?php endif; ?>">
                    <input type="radio" name="donation-sum" value="<?php the_sub_field('price_value') ?>"
                           data-description="<?php the_sub_field('description') ?>"
                           id="donation-sum--<?php echo get_row_index() ?>"
                           <?php if (get_row_index() == 1): ?>checked<?php endif; ?>>

                    <label for="donation-sum--<?php echo get_row_index() ?>"><?php the_sub_field('price_title') ?></label>
                </div>
            <?php endwhile; ?>
            <div id="amount_value">
                <input id="" class="pt-uea-custom-amount" name="donation-monthly-sum" type="number"
                       placeholder="<?php _e('Enter value', 'yafrica') ?>"
                       data-value="<?php the_field('custom_price_description', 'option') ?>"
                       data-description="<?php the_field('custom_price_description', 'option') ?>">
            </div>

        </div>
        <div id="amount_options2" class=" amount_options grid amount_options donation-widget__sum">

            <div class="donation-radio">
                <input type="radio" name="donation-sum"
                       value="<?php the_field('custom_price_default_value', 'option') ?>"
                       data-description="<?php the_field('custom_price__one_time_value_description', 'option') ?>"
                       id="donation-sum--<?php the_field('custom_price_default_value', 'option') ?>"
                >
                <label for="donation-sum--<?php the_field('custom_price_default_value', 'option') ?>">
                    € <?php the_field('custom_price_default_value', 'option') ?></label>
            </div>


        </div>
    <?php endif; ?>
    <div class="donation-widget__notification">
        <?php echo $notification ?>
    </div>
    <div class="donation-widget__footer">
        <button type="submit" class="brdr-link"><?php _e('Donate', 'yafrica') ?></button>
        <div class="donation-widget__steps"><span>1</span>/2</div>
    </div>
</form>
<script type="text/javascript">
    jQuery(document).ready(function () {
        let country = '<?php  echo $details->country;  ?>';
        let intervalOptions = jQuery('form.donation-widget__card .donation-widget__section')
        jQuery('.amount_options:not(".active")').css({opacity: "0"}).hide()
        intervalOptions.find('input[type="radio"]').change(function () {

            intervalOptions.find('label').removeClass('radio-checked');
            jQuery('.amount_options').removeClass('active').animate({opacity: "0"}, 100).hide()
            jQuery(this).closest('label').addClass('radio-checked');
            console.log(jQuery(this).val())
            if (jQuery(this).val() === '1 months') {
                jQuery('#amount_options').addClass('active').animate({opacity: "1"}, 500).show()

                jQuery('#amount_options').find('.radio-checked ').find('input').prop("checked", true);

                jQuery('#amount_options2 .donation-radio input ').prop("checked", false);
                jQuery('#amount_options2 #amount_value input ').val('');
                jQuery('#amount_value').appendTo('#amount_options');
                if (jQuery('#amount_value .pt-uea-custom-amount').val()>0) {
                    console.log(2)
                    jQuery('#amount_options').find('.radio-checked ').find('input').prop("checked", false);
                    jQuery('#amount_options').find('.radio-checked ').removeClass('radio-checked');
                }
                if (jQuery('#amount_options').find('.radio-checked ').find('input').attr('value')) {

                    jQuery('.donation-widget__notification').text(jQuery('#amount_options').find('.radio-checked ').find('input').attr('data-description'))
                } else {


                }


            } else if (jQuery(this).val() === 'once') {
                jQuery('#amount_value').appendTo('#amount_options2 ');
                jQuery('#amount_options2').addClass('active').animate({opacity: "1"}, 500).show()
                jQuery('#amount_options .donation-radio input').prop("checked", false);

                if (jQuery('#amount_value .pt-uea-custom-amount').val()>0) {
                    jQuery('#amount_options2 .donation-radio input').prop("checked", false);
                    jQuery('#amount_options2 ').prop("checked", false);
                    jQuery('.donation-widget__notification').text(defaultDescropt).show()
                    console.log(2)

                } else {
                    console.log(2)

                    jQuery('#amount_options2 .donation-radio input').prop("checked", true);
                    jQuery('#amount_options2 .donation-radio ').addClass('radio-checked');
                    jQuery('#amount_options2 ').prop("checked", true);

                    jQuery('.donation-widget__notification').text(jQuery('#amount_options2').find('.radio-checked ').find('input').attr('data-description'))

                }


            }

        });
        amountOptions = jQuery('form.donation-widget__card #amount_options')
        amountOptions2 = jQuery('form.donation-widget__card #amount_options2')
        amountOptions2.find('input[type="radio"]').change(function () {
            jQuery('.donation-widget__notification').css({opacity: "0"}).html(jQuery(this).data('description')).animate({opacity: "1"}, 500);
            ;
        });
        amountOptions.find('input[type="radio"]').change(function () {
            jQuery('#amount_value .pt-uea-custom-amount').val('');
            amountOptions.find('.donation-radio   ').removeClass('radio-checked');
            jQuery(this).closest('.donation-radio   ').addClass('radio-checked');
            jQuery('.donation-widget__notification').css({opacity: "0"}).html(jQuery(this).data('description')).animate({opacity: "1"}, 500);
            ;


        });
        jQuery('#amount_value .pt-uea-custom-amount').on('click', function () {
            amountOptions.find('input[type="radio"]').prop("checked", false)
            amountOptions2.find('input[type="radio"]').prop("checked", false)
            amountOptions2.find('input[type="radio"]').prop("checked", false)
            jQuery('.donation-widget__notification').css({opacity: "0"}).html(jQuery(this).data('description')).animate({opacity: "1"}, 500);

        })
        <?php if (have_rows('custom_price_contry', 'option')): ?>

        <?php while (have_rows('custom_price_contry', 'option')):the_row(); ?>

        if (country == '<?php the_sub_field("contry_code") ?>') {
            jQuery('#amount_options  input[value="50"]').val('  <?php the_sub_field("value_monthly_1") ?>').attr('data-pt-price', '<?php the_sub_field("value_monthly_1") ?>').parent('.donation-radio').attr('title', '<?php the_sub_field("value_monthly_1") ?>').find('label').text('€ <?php the_sub_field("value_monthly_1") ?>')
            jQuery('#amount_options  input[value="30"]').val('<?php the_sub_field("value_monthly_2") ?>').attr('data-pt-price', '<?php the_sub_field("value_monthly_2") ?>').parent('.donation-radio').attr('title', '<?php the_sub_field("value_monthly_2") ?>').find('label').text('€ <?php the_sub_field("value_monthly_2") ?>')
            jQuery('#amount_options  input[value="15"]').val('  <?php the_sub_field("value_monthly_3") ?>').attr('data-pt-price', '<?php the_sub_field("value_monthly_3") ?>').parent('.donation-radio').attr('title', '<?php the_sub_field("value_monthly_3") ?>').find('label').text('€ <?php the_sub_field("value_monthly_3") ?>')
            jQuery('#amount_options2  input[value="185"]').val('  <?php the_sub_field("price_one_time_value") ?>').attr('data-pt-price', '<?php the_sub_field("price_one_time_value") ?>').parent('.donation-radio').attr('title', '<?php the_sub_field("price_one_time_value") ?>').find('label').text('€ <?php the_sub_field("price_one_time_value") ?>')


        }
        <?php endwhile; ?>

        <?php endif; ?>
        // jQuery('#amount_value').click(function () {
        //     jQuery('.donation-widget__notification').html(jQuery(this).data('description'));
        //     jQuery('.donation-widget__sum input[type="radio"]').prop('checked', false);
        //     jQuery('.pt-field.pt-uea-custom-amount').attr('type', 'number');
        //     jQuery('.donation-widget__amount').css('grid-template-columns', '1fr  71px');
        //     jQuery(this).addClass('showInput');
        //     jQuery(this).removeClass('showRadio');
        //     jQuery(' #amount_price_input').animate({opacity: "show"}, 500).show();
        //     jQuery('#amount_options .donation-radio').animate({opacity: "0"}, 500).hide();
        //     jQuery('#amount_options input[name="pt_items[2][value]"],#amount_options input[name="pt_items[2][amount]"]').removeAttr('value');
        //
        //     jQuery('#donation-custom-value').val(jQuery('#donation-custom-value').data('value'));
        //     jQuery('#price_change').text(jQuery('#amount_price_input input.pt-field.pt-uea-custom-amount').attr('value'));
        // });
        // jQuery('.donation-widget__sum').find('input[type="radio"]').change(function () {
        //     jQuery('#donation-custom-value').val('');`
        //     jQuery('.donation-widget__notification').html(jQuery(this).data('description'));
        // });
        // if (jQuery('#donation-custom-value').val() > 0) {
        //     jQuery('#donation-custom-value').trigger('click');
        // }
        // jQuery(document).click(function (event) {
        //     if (!jQuery("#amount_options").hasClass('active')) {
        //
        //         if (!jQuery(event.target).is(".donation-widget__card *")) {
        //             jQuery('.donation-widget__amount').css('grid-template-columns', '1fr 1fr 1fr  71px')
        //             jQuery('#price_change').text(jQuery('#amount_options .donation-radio.radio-checked ').attr('title'))
        //
        //             jQuery('#amount_price_input input').removeAttr('value')
        //             jQuery("#amount_value").addClass('showRadio')
        //             jQuery("#amount_value").removeClass('showInput')
        //             jQuery(' #amount_price_input').hide()
        //             jQuery('#amount_options .donation-radio').show().animate({opacity: "1"}, 500)
        //             jQuery('#amount_price_input input,.pt_amount').attr('value', jQuery('#amount_options .donation-radio.radio-checked').attr('title'))
        //
        //         }
        //     }
        // });
        if (window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD) {
            // jQuery('.preloader.js__preloader').removeClass('js__preloader')

            setTimeout(function () {
                resetForms();
                }, 200);
            // location.reload()
            // element.classList.remove("js__preloader");
            function resetForms() {
                document.forms['donation_step_first'].reset();
            }
        }
    });
</script>