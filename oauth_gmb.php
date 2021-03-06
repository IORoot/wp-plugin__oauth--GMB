<?php
/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - ACF - OAUTH for Google-My-Business
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🔌PLUGIN</strong> | <em>ANDYP > Universal Exporter</em> | oAuth for Google-My-Business
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

define( 'GMB_GOOGLE_APPLICATION_CREDENTIALS', __DIR__.'/client_secret.json');
define( 'GMB_GOOGLE_APPLICATION_SCOPE',       "https://www.googleapis.com/auth/business.manage");
define( 'GMB_GOOGLE_TRANSIENT_NAME',          "GMB_OAUTH_REFRESH_TOKEN");

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                                Initialise                               │
// └─────────────────────────────────────────────────────────────────────────┘
new AndyP\oauth\gmb\GMB;