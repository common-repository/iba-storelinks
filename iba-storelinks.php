<?php
/*
Plugin Name: IBA Store Links
Description: This plugin adds shortcodes to quickly embed links to popular mobile app stores. Supports iPhone, iPad, Universal Apps, Mac Apps, Amazon, Nook, Win8 and Droid.
Version: 1.3
Author: Jonathan Mulcahy
Author URI: http://www.icebergapps.com
Plugin URI: http://icebergapps.com/wordpress-plugins/
*/
/**
 * Define some useful constants
 **/
define('JM_STORELINKS_VERSION', '1.0');
define('JM_STORELINKS_DIR', plugin_dir_path(__FILE__));
define('JM_STORELINKS_URL', plugin_dir_url(__FILE__));

/**
 * Load files 
 **/
function jm_storelinks_load(){
		
    //if(is_admin()) //load admin files only in admin
    //    require_once(MSP_HELLOWORLD_DIR.'includes/admin.php');
        
    require_once(JM_STORELINKS_DIR.'includes/core.php');
}
jm_storelinks_load();

?>