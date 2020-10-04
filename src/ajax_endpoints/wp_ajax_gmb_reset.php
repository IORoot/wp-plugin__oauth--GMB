<?php

namespace AndyP\oauth\gmb\ajax;


class reset_callback
{

    
    public function __construct()
    {
        /**
         * AJAX Callback used to clear all tokens.
         */
        add_action( 'wp_ajax_gmb_reset', array($this,'gmb_reset') );
    }


    public function gmb_reset() {
        delete_transient( GMB_GOOGLE_TRANSIENT_NAME );
        wp_send_json_success( true, 200 );
        wp_die(); // this is required to return a proper response
    }

}


