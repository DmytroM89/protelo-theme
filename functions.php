<?php

include 'includes/function-build-wordpress.php';
include 'includes/function-woocommerce.php';

// Add widget
function my_widgets_init()
{
    register_sidebar(array(
        'name' => 'Lang',
        'id' => 'lang',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}

add_action('widgets_init', 'my_widgets_init');


// Thumbnail
add_theme_support('post-thumbnails');
add_image_size('thumb', 500, 500, true);


// Style
function my_theme_enqueue_style()
{
    wp_enqueue_style('slick', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style('fas', get_template_directory_uri() . '/bower_components/components-font-awesome/css/all.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_style');

// Scripts
function my_theme_add_scripts()
{

    if (is_front_page()) {
        //wp_enqueue_script('map', get_template_directory_uri() . '/assets/js/google-map.js?key=AIzaSyC7nl04gTQl-ZBg0gjus9KGEEOKiczTW7o&callback=initMap', '', '', true);
        wp_enqueue_script('map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC7nl04gTQl-ZBg0gjus9KGEEOKiczTW7o', array( 'scripts' ), '', true);
    }
    wp_enqueue_script('slick', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.min.js', '', '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.bundle.min.js', '', '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('mask-input', get_template_directory_uri() . '/bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js', '', '', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', '', '', true);

    wp_localize_script('scripts', 'scripts_object',
        array(
            'url' => get_template_directory_uri(),
            'home' => get_home_url(),
            'root'  => esc_url_raw( rest_url() ),
            'nonce' => wp_create_nonce( 'wp_rest' ),
        )
    );

    /*wp_localize_script('scripts', 'scripts_object',
        array(
            'url' => get_template_directory_uri(),
            'home' => get_home_url()
        )
    );*/

}

add_action('wp_enqueue_scripts', 'my_theme_add_scripts');

function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyBHgisLm4KhjpcPN6JYIrRTFocFf6kPNaA';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
