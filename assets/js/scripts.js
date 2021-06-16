jQuery(document).ready(function($) {
    // Loader
    $('#page-preloader').fadeOut('slow');
    $('#page-preloader .fa-spinner').fadeOut('slow');

    // Slider
    $('.slider').slick({
        arrows: true,
        dots: true,
        infinite: true,
        fade: true,
        speed: 500,
        autoplay: false,
        autoplaySpeed: 7000,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    arrows: false,
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
    $('.seo-btn').on('click', function () {
        $('.seo-container').toggleClass('open');
    })

    /**
     * Scroll event
     */
    $(window).scroll(function(){
        let header = $('.header'),
            scroll = $(this).scrollTop();

        if (scroll >= 150) {
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

    $('.scroll-up').click(function() {
        $('body,html').animate({scrollTop:0},400);
    });
})

function initMap() {
    let map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 18,
        center: {lat: 48.46411357137196, lng: 35.038633719349434},
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
        position: {lat: 48.46411357137196, lng: 35.038633719349434},
        map: map,
        icon: image
    });
}