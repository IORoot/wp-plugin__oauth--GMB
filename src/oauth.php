<?php

namespace AndyP\oauth\gmb;


class GMB
{



    public function __construct()
    {



        /**
         * Initialise the custom ACF field type
         * oAuth Button for GMB.
         */
        new \AndyP\oauth\gmb\acf\acf_gmb_oauth_button();



        /**
         * Google sends back a 'state' field with
         * the ajax eendpoint in it. We need to 
         * intercept this before it hits the endpoint,
         * parse it for an 'action' field and add
         * as a parameter.
         */
        new \AndyP\oauth\gmb\ajax\intercept_state();



        /**
         * Create the AJAX endpoints for Google to call
         * and the Javascript to access.
         */
        new \AndyP\oauth\gmb\ajax\oauth_callback();
        new \AndyP\oauth\gmb\ajax\reset_callback();
        new \AndyP\oauth\gmb\ajax\status_callback();


    }



}