<?php

/*Sidebars registration*/
function true_register_wp_sidebars() {

    /* Counters sidebar */
    register_sidebar(
        array(
            'id' => 'counter_sidebar',
            'name' => 'Counter sidebar',
            'description' => 'Add widgets for counters',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    /*Footer social links sidebar*/
    register_sidebar(
        array(
            'id' => 'footer_social_sidebar',
            'name' => 'Sidebar for social icons in footer',
            'description' => 'Add a link and fontawesome icon',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    /*Footer copyright information*/
    register_sidebar(
        array(
            'id' => 'footer_copy',
            'name' => 'Sidebar for copyright information in footer',
            'description' => 'Add a paragraph with copyright information here',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

}
add_action( 'widgets_init', 'true_register_wp_sidebars' );

