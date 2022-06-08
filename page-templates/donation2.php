<?php
/**
 * Template name: Donation2
 */
?>
<?php get_header(); ?>
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
                                        <?php the_content(); ?>
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
            jQuery()
            let getPeriod = '<?php echo $_GET['donation-period']?>';
            let getPrice = '<?php echo $_GET['donation-sum']?>';
            let getCustomPrice = '<?php echo $_GET['donation-custom-sum']?>';

            if (getCustomPrice) {
                getPrice = getCustomPrice;
            }
            if(jQuery('.donation-checkbox label input').attr("checked") == 'checked'){
                jQuery('.donation-checkbox label').addClass('label-checked');
            }
            jQuery('.donation-checkbox label input').change(function(){
                jQuery('.donation-checkbox label').toggleClass('label-checked');
            });

            jQuery('.donation-radio-checkbox label input').each(function(){
                if(jQuery(this).attr("checked") == 'checked'){
                    jQuery(this).parent('label').addClass('label-checked');
                }
            })
            jQuery('.donation-radio-checkbox label input').change(function(){
                jQuery(this).closest('.pt-radio-group').find('label').removeClass('label-checked');
                jQuery(this).parent('label').addClass('label-checked');
            });

            let intervalOptions = jQuery('.pt-subscription-interval-options');
            jQuery('.pt-form-group-subscription-interval').children('label').remove();
            intervalOptions.addClass('donation-widget__period');
            intervalOptions.addClass('donation-widget__section');
            intervalOptions.find('label').addClass('donation-radio');
            intervalOptions.find('input[type="radio"]').change(function () {
                intervalOptions.find('label').removeClass('radio-checked');
                jQuery(this).closest('label').addClass('radio-checked');
            });
            if (getPeriod) {
                setTimeout(function () {
                    intervalOptions.find('input[value="' + getPeriod + '"]').trigger('click');
                    intervalOptions2.find('input[value="' + getPeriod + '"]').trigger('click');
                }, 1000);
            } else {
                setTimeout(function () {
                    intervalOptions.find('label').first().find('input[type="radio"]').trigger('click');
                }, 1000);
            }
            let amountOptions = jQuery('#amount_options .pt-radio-group');
            let amountPrice = jQuery(' ');
            jQuery('#amount_price_input').appendTo(amountOptions);
            jQuery('#amount_value').appendTo(amountOptions);
            let amountValue = jQuery('#amount_value input.pt-uea-custom-amount');
            jQuery('.pt-uea-currency-prepend').remove();
            let amountOptionWithZeroValue = amountOptions.find('label').first().find('input[type="radio"]').clone().appendTo('#amount_options');
            amountOptionWithZeroValue.val('0');
            amountOptionWithZeroValue.attr('data-pt-price', '0');
            amountOptionWithZeroValue.hide();
            amountValue.focus(function () {
                amountOptions.find('input[type="radio"]').prop('checked', false);
                amountOptions.find('label').removeClass('radio-checked');
                amountOptionWithZeroValue.trigger('click');
            });
            jQuery('#amount_options .pt-form-group-radio').children('label').remove();
            amountOptions.addClass('donation-widget__amount');
            amountOptions.find('label').addClass('donation-radio');
            amountOptions.find('input[type="radio"]').change(function () {
                amountOptions.find('label').removeClass('radio-checked');
                jQuery(this).closest('label').addClass('radio-checked');
                jQuery('#price_change').text( jQuery(this).attr('data-pt-price'))
                amountValue.val('');
                console.log(jQuery(this))
            });
            amountOptions.find('input[type="radio"]').removeAttr('checked');
            if (getPrice) {
                let priceRadioButton = amountOptions.find('input[value="' + getPrice + '"]');
                if (priceRadioButton.length > 0) {
                    priceRadioButton.trigger('click');
                } else {
                    amountValue.trigger('focus').val(getPrice);
                }
            } else {
                amountOptions.find('label').first().find('input[type="radio"]').trigger('click');
            }
            jQuery('.donation-widget__footer button.donate-confirm').removeClass().addClass('donate-confirm');
            jQuery('.donation-checkbox>label').hide();
            jQuery('input[value="once"]').next('span').html('<?php _e('One time')?>');
            jQuery("#amount_value").addClass('showRadio');
            jQuery("#amount_value").on('click', function () {
                jQuery('.pt-field.pt-uea-custom-amount').attr('type', 'number')
                jQuery('.donation-widget__amount').css('grid-template-columns', '1fr  71px')


                // if (jQuery(this).hasClass('showRadio')) {
                jQuery(this).addClass('showInput')
                jQuery(this).removeClass('showRadio')
                jQuery(' #amount_price_input').animate({opacity: "show"}, 500).show()
                jQuery('#amount_options .donation-radio').animate({opacity: "0"}, 500).hide()
                jQuery('#amount_options input[name="pt_items[2][value]"],#amount_options input[name="pt_items[2][amount]"]').removeAttr('value')

                jQuery('#amount_price_input input,.pt_amount').attr('value', jQuery('#amount_price_input input.pt-field.pt-uea-custom-amount').attr('placeholder').replace(/[^0-9]/g, ''))
                jQuery('#price_change').text( jQuery('#amount_price_input input.pt-field.pt-uea-custom-amount').attr('value'))

            })
            jQuery('#amount_price_input input.pt-field.pt-uea-custom-amount').change(function () {
                jQuery('#amount_options input[name="pt_items[2][value]"],#amount_options input[name="pt_items[2][amount]"]').removeAttr('value')
                jQuery("#amount_options").addClass('active')

                jQuery('#amount_price_input input,.pt_amount').attr('value', jQuery('#amount_price_input input.pt-field.pt-uea-custom-amount').val())
                jQuery('#price_change').text( jQuery(this).attr('value'))
            })

            jQuery(document).click(function (event) {
                if (!jQuery("#amount_options").hasClass('active')) {

                    if (!jQuery(event.target).is(".donation-widget__card *")) {
                        jQuery('.donation-widget__amount').css('grid-template-columns', '1fr 1fr 1fr  71px')
                        jQuery('#price_change').text( jQuery('#amount_options .donation-radio.radio-checked ').attr('title'))

                        jQuery('#amount_price_input input').removeAttr('value')
                        jQuery("#amount_value").addClass('showRadio')
                        jQuery("#amount_value").removeClass('showInput')
                        jQuery(' #amount_price_input').hide()
                        jQuery('#amount_options .donation-radio').show().animate({opacity: "1"}, 500)
                        jQuery('#amount_price_input input,.pt_amount').attr('value', jQuery('#amount_options .donation-radio.radio-checked').attr('title'))

                    }
                }
            });
            if (getCustomPrice) {

                jQuery("#amount_value").click();
                jQuery('#amount_price_input input,.pt_amount').attr('value', "<?php echo $_GET['donation-custom-sum']?>")
            }

        });
    </script>
    [paytium name="Donation" description="Donation"]
    <div class="donation-widget__card">
        <div id="amount_times">[paytium_subscription interval="1 months" interval_label="" interval_options="1 months, once" times="" /]</div>
        <div id="amount_options" class="amount_options">[paytium_field type="radio" label="Options" options="50/30/15" options_are_amounts="true"/]</div>
        <div id="amount_value" class="amount_value">[paytium_field type="open" placeholder="Enter Value" validation="digits" / ]</div>
        <div id="amount_options2" class="amount_options">[paytium_field type="radio" options="185" options_are_amounts="true"/]</div>
        <div class="donation-widget__notification">
            <div class="donation-widget__notification__custom">With € <span id="price_change">50</span> a month, you’re helping building formation centers and help creating projects.</div>
            <div class="donation-widget__notification__default"></div>
        </div>
    </div>
    <div class="donation-widget__card-title">Your Info</div>
    <div id="sex_options">[paytium_field type="radio" label="Your sex" options="Woman/Man" class="donation-radio-checkbox"/]</div>
    <div class="donation-widget__info donation-widget__section">[paytium_field type="name" label="First name" required="true" class="donation-field" /]
        [paytium_field type="text" label="Last name" required="true" class="donation-field" /]
        [paytium_field type="email" label="Email address" required="true" class="donation-field" /]
        [paytium_field type="checkbox" label="" options="Yes, I want Young Africa to keep me informed on projects and progress." class="donation-checkbox" /]</div>
    <div class="donation-widget__address donation-widget__section">
        <div class="donation-widget__address-grid">[paytium_field type="text" label="Postal Code" required="true" class="donation-field" placeholder="1234 AB" /]
            [paytium_field type="text" label="House Number" required="true" class="donation-field" placeholder="00" /]
            [paytium_field type="text" label="Addition" class="donation-field" placeholder="Bis"/]</div>
        [paytium_field type="text" label="City" required="true" class="donation-field" /]

    </div>
    <div class="donation-widget__footer">[paytium_button label="Confirm" class="donate-confirm"/]</div>
    [/paytium]
<?php get_footer(); ?>