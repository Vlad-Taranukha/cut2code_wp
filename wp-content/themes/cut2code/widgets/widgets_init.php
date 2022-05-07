<?php

function wpb_load_widget() {
    register_widget( 'footer_social' );
    register_widget( 'counters_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
