<?php

namespace AndyP\oauth\gmb\ajax;


class status_callback
{

    
    public function __construct()
    {
        /**
         * AJAX Callback used to clear all tokens.
         */
        add_action( 'wp_ajax_gmb_status', array($this,'gmb_status') );
    }


    public function gmb_status() {
    
        if (get_transient(GMB_GOOGLE_TRANSIENT_NAME) == false)
        {
            wp_send_json_success( false, 200 );
            wp_die();
        }
    
        wp_send_json_success( true, 200 );
        wp_die();
    }

}




