<?php // Magnifying Glass - Core Functionality

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// Main Css and JS files
function callback_for_setting_up_scripts() {
//	Bootstrap CSS
	wp_enqueue_style( 'MGlass_Bootstrap_Css', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/bootstrap.min.css', array(), null);
	wp_enqueue_style( 'MGlass_Bootstrap_Css_map', plugin_dir_url( dirname( __FILE__ ) ) . 'public/css/bootstrap.min.css.map', array('MGlass_Bootstrap_Css'), null);
//	BootStrap JS
	wp_enqueue_script('MGlass_Bootstrap_Proper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery'), '1.14.0', false);
	wp_enqueue_script('MGlass_Bootstrap_Js', plugin_dir_url( dirname( __FILE__ ) ) . 'public/js/bootstrap.min.js', array('jquery'), '4.1.0', true);
}

add_action('admin_enqueue_scripts', 'callback_for_setting_up_scripts');