<?php

namespace AndyP\oauth\gmb\acf;

/**
 * Include ACF into plugin.
 * 
 */

class oauth_admin_page {

    public function __construct()
    {
        $this->create_parent_menu();
        $this->create_child_menu();
    }


    private function create_parent_menu()
    {
        // Create Parent Menu
        if( function_exists('acf_add_options_page') ) {
            
            $argsparent = array(
                'page_title' => 'ANDYP',
                'menu_title' => 'ANDYP',
                'menu_slug' => 'andyp',
                'capability' => 'manage_options',
                'position' => '1',
                'parent_slug' => '',
                'icon_url' => 'dashicons-screenoptions',
                'redirect' => true,
                'post_id' => 'options',
                'autoload' => false,
                'update_button'		=> __('Update', 'acf'),
                'updated_message'	=> __("Options Updated", 'acf'),
            );
            acf_add_options_page($argsparent);
            acf_add_options_sub_page(array(
                'menu_title'	=> 'AndyP Plugins',
                'parent_slug'	=> 'andyp',
                )
            );
        }
    }

    private function create_child_menu()
    {
        // Create New Menu
        if( function_exists('acf_add_options_page') ) {
            
            $args = array(

                'page_title' => 'oAuth gmb',
                'menu_title' => '🔑 oAuth gmb',
                'menu_slug' => 'oauthgmb',
                'capability' => 'manage_options',
                'position' => '1',
                'parent_slug' => 'andyp',
                'icon_url' => 'dashicons-screenoptions',
                'redirect' => true,
                'post_id' => 'options',
                'autoload' => false,
                'update_button'		=> __('Update', 'acf'),
                'updated_message'	=> __("Options Updated", 'acf'),
            );

            /**
             * Create a new options page.
             */
            acf_add_options_sub_page($args);
            
        }
    }
}