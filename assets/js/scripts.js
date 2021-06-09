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
        adaptiveHeight: true
    });

    initMap();
})

function initMap() {
    var map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 18,
        center: {lat: 48.463118, lng: 35.041338},
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
    var image = '/wp-content/themes/protelo/assets/images/marker.png';
    var marker = new google.maps.Marker({
        position: {lat: 48.463118, lng: 35.041338},
        map: map,
        icon: image
    });
}