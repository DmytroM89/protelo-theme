jQuery(document).ready(function($) {
    // Slider
    $('#mSlider').slick({
        arrows: false,
        infinite: true,
        dots: true,
        adaptiveHeight: true,
        swipe: false
    });

    $('#sReviews').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    /**
     * Маска для номера телефона
     */
    $('.phone-mask').mask('+38(999) 999-99-99');

    initMap();

    /**
     * Скрыть/показать текст SEO`шный
     */
    $('.seo-btn').on('click', function (event) {
        var seoText = $(event.target).siblings('.seo-text');

        if (!$('.seo-container').hasClass('open')) {
            $(seoText).animate({
                height: $(seoText).get(0).scrollHeight
            }, 1000, function(){
                $(this).height('auto');
                $('.seo-container').toggleClass('open');
            });
        } else {
            $(seoText).animate({
                height: '96px'
            }, 1000, function() {
                $('.seo-container').toggleClass('open');
            });
        }
    })

    /**
     * Scroll event
     */
    $(window).scroll(function(){
        let header = $('.header'),
            scroll = $(this).scrollTop();

        if (scroll >= 350) {
            header.addClass('-sticky');
        } else if (scroll == 0) {
            header.removeClass('-sticky');
        }

        if(scroll != 0) {
            $('.scroll-up').addClass('-show');
        } else {
            $('.scroll-up').removeClass('-show');
        }
    });

    /**
     * Scroll to top
     */
    $('.scroll-up').click(function() {
        $('body,html').animate({scrollTop: 0}, 400);
    });

    //open the lateral panel
    $('.menu-btn').on('click', function (event) {
        event.preventDefault();
        $('.cd-panel--menu').addClass('d-block');
        $('body').addClass('modal-open');
        setTimeout(function () {
            $('.cd-panel--menu').addClass('is-visible');
        }, 200);

    });
    //close the lateral panel
    $('.cd-panel').on('click', function (event) {
        if ($(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close')) {
            $('.cd-panel').removeClass('is-visible');
            $('body').removeClass('modal-open');
            setTimeout(function () {
                $('.cd-panel').removeClass('d-block');
            }, 500)
            event.preventDefault();
        }
    });
    /*$('.cd-panel-nav .menu-item-has-children').on('click', function () {
        $('.cd-panel').removeClass('is-visible');
    });*/

    // Open cd-panel-menu
    $('.cd-panel-nav .menu-item-has-children').on('click', function (event) {
        // Проверяем открыты ли другие подменю
        if ($(this).siblings().hasClass('open-menu')) {
            $(this).siblings().removeClass('open-menu');
        }

        $(this).toggleClass('open-menu');
    });

})

function initMap() {
    let map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 19,
        center: {lat: +lat, lng: +lng},
        mapTypeControl: false,
        scaleControl: true,
        streetViewControl: true,
        rotateControl: false,
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        scrollwheel: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    });
    let image = '/wp-content/themes/protelo/assets/images/marker.png';
    let marker = new google.maps.Marker({
        position: {lat: +lat, lng: +lng},
        map: map,
        icon: image
    });
}