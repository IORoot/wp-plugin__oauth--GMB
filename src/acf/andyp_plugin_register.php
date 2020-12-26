<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'ACF oAuth G.M.B. Button',
        'icon'      => 'google-my-business',
        'color'     => '#3D5AFE',
        'path'      => __FILE__,
    ]);
} );