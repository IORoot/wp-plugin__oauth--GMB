<?php

namespace AndyP\oauth\gmb\acf;

if( ! defined( 'ABSPATH' ) ) exit;  								// exit if accessed directly
if( class_exists('acf_gmb_oauth_button') ) return; 				// check if class already exists


class acf_gmb_oauth_button {
	

	/**
	 * auth_url
	 * 
	 * This holds the google URL to 
	 * make the request for an auth token.
	 *
	 * @var string
	 */
	private $auth_url;


	/**
	 * settings
	 *
	 * @var array
	 */
	private $settings;



	public function __construct() {

		$client = new \AndyP\oauth\gmb\client\google_client();
		$client->set_ajax_callback_endpoint('gmb_oauth');
		$client->create_authentication_url();
		$this->auth_url = $client->get_auth_url();

		// settings
		// - these will be passed into the field class.
		$status = '';
		if (get_transient(GMB_GOOGLE_TRANSIENT_NAME) == true)
        {
			$status = 'enabled';
        }

		$this->settings = array(
			'version'	=> '1.0.0',
			'url'		=> plugin_dir_url( __FILE__ ),
			'path'		=> plugin_dir_path( __FILE__ ),
			'status'    => $status,
			'auth_url'	=> $this->auth_url,
		);

		add_action('acf/include_field_types', 	array($this, 'include_field'));

	}


	/**
	 * Action to run when
	 * including new fields.
	 *
	 * @param boolean $version
	 * @return void
	 */
	public function include_field( $version = false ) {

		new acf_field_gmb_oauth_button( $this->settings );

	}

	
}

