<?php

/*Enable scripts and styles*/
add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
function theme_add_scripts() {

    /*Stylesheets*/
    wp_enqueue_style( 'bootstrap-styles', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" );
    //wp_enqueue_style( 'font-awesome-styles', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" );
    wp_enqueue_style( 'slick-styles', get_template_directory_uri()."/slick/slick.css" );
    wp_enqueue_style( 'slick-theme-styles', get_template_directory_uri()."/slick/slick-theme.css" );
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );

    /*Scripts*/
    wp_deregister_script('jquery'); /*disable standart jquery package*/
    wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jQuery.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery', 'popper-js'), '1.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() .'/js/jquery.waypoints.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'counter-up', get_template_directory_uri() .'/js/jquery.counterup.min.js', array('jquery', 'waypoints'), '1.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() .'/slick/slick.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'fontawesome-kit', "https://kit.fontawesome.com/d7d4bcc290.js", array(), '1.0', false );
    wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js', array('jquery', 'popper-js', 'bootstrap-js', 'waypoints', 'counter-up', 'slick'), '1.0', true );
}

/*Allow to upload svg images*/
require get_template_directory()."/inc/svg_maintain.php";

/*Remove post content default tag wrapping*/
remove_filter( 'the_content', 'wpautop' );

/*Logo from customizer*/
add_action( 'after_setup_theme', 'set_custom_logo' );
function set_custom_logo() {
    add_theme_support( 'custom-logo', array(
        'width' => 105,
        'height' => 55,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => array('site-title', 'site-description')
    ));
}

/*Enable post thumbnails*/
add_theme_support( 'post-thumbnails' );

/*Register nav menu*/
register_nav_menus(array(
    'main'    => 'Main menu',
));

/*Adding custom classes to menu links*/
function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->menu == 'main' ) {
        // add the desired attributes:
        $atts['class'] = 'link nav__link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

/*Adding sidebars*/
require get_template_directory()."/inc/sidebars.php";

/*Adding widgets*/
require get_template_directory()."/widgets/footer_social.php";
require get_template_directory()."/widgets/counters_widget.php";
require get_template_directory()."/widgets/widgets_init.php";



