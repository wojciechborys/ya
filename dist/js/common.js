(function ($) {

    let africaTheme = {

        init: function () {

            africaTheme.initToggleNav();
            africaTheme.initGoToLinks();
            africaTheme.initHeroVideo();
            africaTheme.initLatestSlider();
            africaTheme.initVideo();
            africaTheme.initTestimonialsSlider();
            africaTheme.initFaqSpoilers();
            africaTheme.initActMobSlider();
            africaTheme.initDropdown();
            africaTheme.initContactBox();
            africaTheme.initDonationSelect();
            africaTheme.initDonationPhone();
            africaTheme.initImpactSlider();
            africaTheme.initSticky();
            africaTheme.initLoadmore();

            setTimeout(function () {
                africaTheme.initPreloader();
                africaTheme.initScrollAnimations();
            }, 300);

        },

        initPreloader: function () {
            //$('.js__preloader').fadeOut();
            $('.js__preloader').animate({
                width: 0
            }, 350, function () {
                $('.js__preloader').hide();
            });
        },

        initToggleNav: function () {
            $('#header-main-menu .menu-item-628 ').hover(
                function () {
                    $('.desktop-nav').css('background-color', '#6fa935');
                    $('.desktop-nav .subscribe__socials svg path').css('fill', '#6fa935');

                }, function () {
                    $('.desktop-nav').css('background-color', '#1d81b7');
                    $('.desktop-nav .subscribe__socials svg path').css('fill', '#1d81b7');

                },
            ).click(
                function () {
                    $('.desktop-nav').css('background-color', '#6fa935');
                    $('.desktop-nav .subscribe__socials svg path').css('fill', '#6fa935');

                },
            );
            $('.js__toggle-nav').click(function (e) {
                e.preventDefault();
                $(this).toggleClass('is-pressed');
                $('.js__header-nav-desktop').toggleClass('is-opened');


            });
            $('.js__toggle-menu').click(function (e) {
                e.preventDefault();
                $(this).toggleClass('is-pressed');
                $('.js__header-nav').toggleClass('is-opened');
            });
        },

        initScrollAnimations: function () {
            $('.anim').each(function () {
                let offset = $(this).offset().top;
                if ($(window).scrollTop() + $(window).height() > offset) {
                    $(this).addClass('animated');
                } else {
                    $(this).removeClass('animated');
                }
            });
            $(window).on('scroll load', function () {
                $('.anim').each(function () {
                    let offset = $(this).offset().top;
                    if ($(window).scrollTop() + $(window).height() > offset) {
                        $(this).addClass('animated');
                    } else {
                        $(this).removeClass('animated');
                    }
                });
            });
        },

        initGoToLinks: function () {
            $('.js__go-to').click(function (e) {
                e.preventDefault();
                let targetSection = $($(this).attr('href')).offset().top;
                $('html, body').animate({
                    scrollTop: targetSection
                }, 500);
            });
        },

        initHeroVideo: function () {
            let heroVideoClicks = true;
            $(document).on('click', '.js__toggle-hero-video', function (e) {
                e.preventDefault();
                let videoWrapper = $(this).closest('.hero__video');
                let videoContainer = videoWrapper.find('.hero__video-container');
                let videoHeight = videoContainer.find('.js__video').outerHeight();
                let video = videoContainer.find('video');
                let playBtn = videoContainer.find('.js__video-play');
                let pauseBtn = videoContainer.find('.js__video-pause');
                let expandBtn = videoContainer.find('.js__video-expand');
                if (heroVideoClicks) {
                    videoContainer.animate({
                        height: videoHeight
                    }, 300);
                    video.attr('poster', video.attr('poster'));
                    heroVideoClicks = false;
                    $('.js__hero-video-overlay').fadeIn(450);
                } else {
                    videoContainer.animate({
                        height: 0
                    }, 300);
                    video.attr('poster', video.attr('poster'));
                    heroVideoClicks = true;
                    $('.js__hero-video-overlay').fadeOut(450);
                    video[0].load();
                    playBtn.show();
                    pauseBtn.hide()
                    expandBtn.hide()
                    videoContainer.css('cursor', 'none');
                }
                $(this).toggleClass('is-pressed');
            });
            $(document).on('click', '.js__hero-video-overlay', function () {
                $('.js__toggle-hero-video').trigger('click');
            });
            $('.js__video-modal').on('click', function (e) {
                if (e.target.classList.contains('video-modal__inner')) {
                    $('.js__video-expand')[0].click();
                }
            });

        },

        initLatestSlider: function () {
            $('.js__latest-slider').slick({
                slidesToShow: 2,
                prevArrow: false,
                nextArrow: '<button type="button" class="slick-arrow slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="22.123" height="25.308" viewBox="0 0 22.123 25.308"><path d="M4.1,14.748l4.1-7.375,4.339,7.363h0L8.194,7.375,12.291,0,16.63,7.363l4.339,7.362h0l4.339,7.363-8.436.012-4.339-7.362h0l-4.1,7.374L0,22.123ZM4.1,14.748Zm8.437-.012,8.435-.011h0l-8.435.011Z" transform="translate(22.123) rotate(90)" fill="#fe9905"/></svg></button>',
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            nextArrow: false
                        }
                    }]
            });
        },

        initVideo: function () {
            let clicks = true;
            $(document).on('click', '.js__video', function (e) {
                e.preventDefault();
                e.stopPropagation();
                let videoContainer = $(this);
                let video = videoContainer.find('video');
                let playBtn = videoContainer.find('.js__video-play');
                let pauseBtn = videoContainer.find('.js__video-pause');
                let expandBtn = videoContainer.find('.js__video-expand');
                video.attr('controls','');
                video[0].play();
                pauseBtn.show();
                expandBtn.show();
                playBtn.hide()
                videoContainer.css('cursor', 'auto');
                videoContainer.addClass('is-playing');
            });
            $(document).on('click', '.js__video-pause', function (e) {
                e.preventDefault();
                e.stopPropagation();
                let videoContainer = $(this).closest('.js__video');
                let video = videoContainer.find('video');
                let playBtn = videoContainer.find('.js__video-play');
                let pauseBtn = videoContainer.find('.js__video-pause');
                let expandBtn = videoContainer.find('.js__video-expand');
                video[0].pause();
                playBtn.show();
                pauseBtn.hide()
                expandBtn.hide()
                videoContainer.css('cursor', 'none');
                videoContainer.removeClass('is-playing');
            });
            $(document).on('click', '.js__video-expand', function (e) {
                e.preventDefault();
                e.stopPropagation();
                let videoContainer = $(this).closest('.js__video');
                let video = videoContainer.find('video');
                let playBtn = videoContainer.find('.js__video-play');
                let pauseBtn = videoContainer.find('.js__video-pause');
                let expandBtn = videoContainer.find('.js__video-expand');
                if (clicks) {
                    $('.js__video-modal').fadeIn();
                    $('.js__insert-video').append(videoContainer);
                    clicks = false;
                } else {
                    $('.js__video-modal').fadeOut();
                    $('.js__insert-video').html('');
                    $('.hero__video-container').append(videoContainer);
                    clicks = true;
                }
            });
            $(document).on('mousemove', '.js__video', function (e) {
                let videoContainer = $(this);
                let playBtn = videoContainer.find('.js__video-play');
                if ($(window).width() >= 992) {
                    playBtn.css({
                        left: e.pageX - videoContainer.offset().left,
                        top: e.pageY - videoContainer.offset().top
                    });
                }
            });
            $(document).on('mouseout', '.js__video', function () {
                let videoContainer = $(this);
                let playBtn = videoContainer.find('.js__video-play');
                if ($(window).width() >= 992) {
                    playBtn.css({
                        left: '50%',
                        top: '50%'
                    });
                }
            });
        },

        initTestimonialsSlider: function () {
            $('.js__testimonials-slider').slick({
                arrows: false,
                dots: true,
                autoplay: true
            });
        },

        initFaqSpoilers: function () {
            const images = $('.tab-image-wrp');
            $('.js__faq-spoiler').each(function (i) {
                let spoilerTitle = $(this).find('.faq-spoiler__title');
                let spoilerBody = $(this).find('.faq-spoiler__content');
                let spoiler = $(this);
                spoiler.on('click', function () {
                    images.css({zIndex: 3});
                    $(images[i]).stop(true, true);
                    $(images[i]).css({marginTop: '400px', display: 'block', zIndex: 7});
                    $(images[i]).animate({marginTop: "0", display: 'block'}, 400, function () {
                        $.map(images, function (img, j) {
                            if (i != j) {
                                $(img).fadeOut(1000);
                            }
                        })
                    });
                    $('.faq-spoiler__title').not(spoilerTitle).removeClass('is-hovered');
                    $('.faq-spoiler__content').not(spoilerBody).slideUp();
                    spoilerTitle.addClass('is-hovered');
                    spoilerBody.stop(true, true).slideDown();
                });
                $('.js__faq-spoiler')[0] ? $('.js__faq-spoiler')[0].click() : 0;

                var get_height = function () {
                    var height = 0;
                    $.map(images, function (img) {
                        img.clientHeight > 0 ? height = img.clientHeight : 0;
                    });
                    if (height == 0) {
                        height = window.innerHeight;
                    }
                    return height;
                };
                if (images[0]) {
                    $('.js__sticky .relative').height(get_height());
                    $(window).on('resize', function () {
                        $('.js__sticky .relative').height(get_height());
                    });
                }

                setTimeout(function () {
                    console.log(get_height())
                }), 2000;
            });
        },

        initActMobSlider: function () {
            $(window).on('load resize', function () {
                if ($(this).width() < 768) {
                    $('.js__act-m-slider').slick({
                        arrows: false
                    });
                } else {
                    $('.js__act-m-slider.slick-initialized').slick('unslick');
                }
            });
        },

        initDropdown: function () {
            $('.js__dropdown').each(function () {
                let dropdown = $(this);
                let dropdownCurrent = dropdown.find('.js__dropdown-current');
                let dropdownList = dropdown.find('.js__dropdown-list');
                let dropdownItems = dropdownList.find('a');
                dropdownCurrent.click(function (e) {
                    e.preventDefault();
                    dropdownList.slideToggle(150);
                    dropdown.toggleClass('is-opened');
                });
                dropdownItems.click(function (e) {
                    e.preventDefault();
                    dropdownList.slideUp(150);
                    dropdown.removeClass('is-opened');
                    dropdownCurrent.text($(this).text());
                });
            });
        },

        initContactBox: function () {
            $('.js__contacts-box').each(function () {
                let box = $(this);
                let boxTitle = box.find('.js__contacts-box-title');
                let boxBody = box.find('.js__contacts-box-body');
                boxTitle.click(function (e) {
                    $('.js__contacts-box-body').not(boxBody).slideUp();
                    $('.js__contacts-box').not(box).removeClass('is-opened');
                    boxBody.slideToggle();
                    box.toggleClass('is-opened');
                    setTimeout(function () {
                        $('.js__contacts-box').removeClass('is-active');
                    }, 325);
                });
            });
        },

        initDonationSelect: function () {
            $('.js__donation-select').each(function () {
                let select = $(this);
                let selectTarget = select.find('.donation-select__top');
                let currentInput = select.find('.donation-field__input');
                let selectList = select.find('.donation-select__list');
                let selectItems = selectList.find('li');
                selectTarget.click(function (e) {
                    e.preventDefault();
                    $('.donation-select__top').not(selectTarget).removeClass('is-opened');
                    $('.donation-select__list').not(selectList).slideUp(150);
                    selectTarget.toggleClass('is-opened');
                    selectList.slideToggle(150);
                });
                selectItems.click(function (e) {
                    e.preventDefault();
                    selectList.slideUp(150);
                    currentInput.val($(this).text());
                });
            });
        },

        initDonationPhone: function () {
            $('.js__international-phone').intlTelInput();
        },

        initImpactSlider: function () {
            $(window).on('load resize', function () {
                if ($(this).width() < 992) {
                    $('.js__impact-slider').slick({
                        arrows: false,
                        adaptiveHeight: true,
                        slidesToShow: 1
                    });
                } else {
                    $('.js__act-m-slider.slick-initialized').slick('unslick');
                }
            });
        },

        initSticky: function () {
            if (!$(document).find('.js__sticky').length) return false;
            // if ($(window).width() > 767) {
            //     var sticky = new Sticky('.js__sticky');
            //     console.log(sticky)
            //     $('.content-page__thumbnail').css({
            //         minHeight: $('.content-page__thumbnail-inner').outerHeight()
            //     });
            // }
        },
        initLoadmore: function () {
            let loadmore = $('.loadmore-link');
            var data = {
                'action': 'loadmore',
                'query': loadmore.data('posts'),
                'current_page': 1,
            };
            loadmore.click(function (e) {
                e.preventDefault();
                data.current_page++;
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    data: data,
                    type: 'POST',
                    success: function (data) {
                        if (data) {
                            $('#postsContainer').append(data);
                        } else {
                            loadmore.remove();
                        }
                    }
                });
            });

        }

    }

    $(document).ready(function () {
        africaTheme.init();
        jQuery('.subscribe__form').submit(function () {
            jQuery(this).find('.subscribe__form-btn').hide();
            jQuery(this).find('.subscribed').show();
            //return false;
        });
        jQuery('.privacy-settings').click(function () {
            jQuery('.js__cookie').fadeIn();
            return false;
        });
        $('.latest-card').each(function () {
            if ($(document).width() < 768) {
                let offset = $(this).offset().top + 200;
                if ($(window).scrollTop() + $(window).height() > offset) {
                    $('.latest-card').removeClass('scrolled');
                    $(this).addClass('scrolled');
                } else {
                    $(this).removeClass('scrolled');
                }
            }
        });
        $(window).on('scroll load', function () {
            if ($(document).width() < 768) {
                $('.latest-card').each(function () {
                    let offset = $(this).offset().top + 200;
                    if ($(window).scrollTop() + $(window).height() > offset) {
                        $('.latest-card').removeClass('scrolled');
                        $(this).addClass('scrolled');
                    } else {
                        $(this).removeClass('scrolled');
                    }
                });
            }
        });

    });
    // Cookie
    $(function () {
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        $('#cookie__controls__more').click(function (e) {
            e.preventDefault();
            var heightBottom = document.getElementById('cookie_container').offsetHeight;
            if ($('.cookie_fun').hasClass('active')) {
                $('.cookie_fun').css('bottom', '-600px').removeClass('active');
                $('.cookie_fun').fadeOut();
            } else {
                $('.cookie_fun').css('bottom', heightBottom).addClass('active');
                $('.cookie_fun').css('--heightCookie', heightBottom).addClass('active');
                $('.cookie_fun').fadeIn();
            }
        })
        $('.js__set-cookie').click(function (e) {
            e.preventDefault();
            setCookie('everon_privacy', '1', 360);
            $('.cookie_fun').css('bottom', '-600px')
            setCookie('necessery', document.getElementById("necessery").checked, 360);
            setCookie('performance', document.getElementById("performance").checked, 360);
            setCookie('marketing', document.getElementById("marketing").checked, 360);
            $('.js__cookie').fadeOut();
        });
        var x = getCookie('everon_privacy');
        if (x == "1") {
            $('.js__cookie').fadeOut();
        } else {
            $('.js__cookie').fadeIn();
        }
    });

})(jQuery);

