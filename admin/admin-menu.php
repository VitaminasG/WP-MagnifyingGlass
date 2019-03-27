<?php // Magnifying Glass - Admin Menu

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// enqueue script for admin AJAX
function ajax_admin_enqueue_scripts($hook) {

	// check if our page
	if ( 'toplevel_page_magnifyingGlass' !== $hook ){
		return;
	}

	// define script url
	$script_url = plugins_url( '/js/admin-ajax-form.js', __FILE__ );

	// enqueue script
	wp_enqueue_script( 'admin-ajax-script', $script_url, array( 'jquery' ) );

	// create nonce
	$nonce = wp_create_nonce( 'ajax_admin' );

	// define script
	$script = array( 'nonce' => $nonce );

	// localize script
	wp_localize_script( 'admin-ajax-script', 'ajax_admin', $script );
}

add_action( 'admin_enqueue_scripts', 'ajax_admin_enqueue_scripts' );

// add top-level administrative menu
function magnifyingGlass_add_toplevel_menu() {

	/*
		add_menu_page(
			string   $page_title,
			string   $menu_title,
			string   $capability,
			string   $menu_slug,
			callable $function = '',
			string   $icon_url = '',
			int      $position = null
		)
	*/

	add_menu_page(
		'List Of Users',
		'Magnifying Glass',
		'administrator',
		'magnifyingGlass',
		'magnifyingGlass_display_settings_page',
		'dashicons-search',
		null
	);

}
add_action( 'admin_menu', 'magnifyingGlass_add_toplevel_menu' );