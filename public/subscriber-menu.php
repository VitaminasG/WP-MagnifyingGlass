<?php // Magnifying Glass - Subscriber Menu

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// Adding cap for role
$subscriber = get_role('subscriber');
$subscriber->add_cap('edit_users');

// Hiding profile fields from user
function remove_website_row_css() {
	echo '<style>tr.user-url-wrap{ display: none; }</style>';
	echo '<style>tr.user-admin-color-wrap{ display: none; }</style>';
	echo '<style>tr.user-description-wrap{ display: none; }</style>';
}

add_action( 'admin_head-user-edit.php', 'remove_website_row_css' );
add_action( 'admin_head-profile.php',   'remove_website_row_css' );

// enqueue script for subscriber AJAX
function ajax_subscriber_enqueue_scripts($hook) {

	// check if our page
	if ( 'toplevel_page_magnifyingGlass_Subscriber' !== $hook ){
		return;
    }

	// define script url
	$script_url = plugins_url( '/js/subscriber-ajax-form.js', __FILE__ );

	// enqueue script
	wp_enqueue_script( 'ajax-script', $script_url, array( 'jquery' ) );

	// create nonce
	$nonce = wp_create_nonce( 'ajax_subscriber' );

	// define script
	$script = array( 'nonce' => $nonce );

	// localize script
	wp_localize_script( 'ajax-script', 'ajax_subscriber', $script );
}

add_action( 'admin_enqueue_scripts', 'ajax_subscriber_enqueue_scripts' );

// add top-level administrative menu
function magnifyingGlass_add_toplevel_menu_subscriber() {

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
		'Pet profile and Agreement',
		'Pet profile and Agreement',
		'subscriber',
		'magnifyingGlass_Subscriber',
		'magnifyingGlass_profile_page',
		'dashicons-welcome-write-blog',
		null
	);

}
add_action( 'admin_menu', 'magnifyingGlass_add_toplevel_menu_subscriber' );