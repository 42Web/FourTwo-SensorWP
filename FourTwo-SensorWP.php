<?php
/*
Plugin Name: SensorWP
Plugin URI:  http://www.fourtwoweb.com
Description: A WordPress plugin to help manage WordPress websites and connect to the SensorWP service.
Version:     0.0.1
Author:      Christopher Spires
Author URI:  http://cspir.es
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Domain Path: /languages
Text Domain: fourtwo
*/

/*
 * Plugin activation and deactivation
 */
 
// Activation hooks
register_activation_hook(__FILE__, 'fourtwo_sensor_activation');
register_deactivation_hook(__FILE__, 'fourtwo_sensor_deactivation');

// Activation functions
function fourtwo_sensor_activate() {
	
}

function fourtwo_sensor_deactivation() {
	
}

