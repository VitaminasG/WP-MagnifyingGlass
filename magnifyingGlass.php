<?php
/*
Plugin Name:  Magnifying Glass
Plugin URI:   https://developer.wordpress.org/plugins/magnifyingGlass/
Description:  Additional User profile information and Reading with Admin privileges.
Version:      0.5
Author:       Gediminas Palsys
Author URI:   http://gediminaspalsys.uk/
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  magnifyingGlass
Domain Path:  /languages
License:      GPL2

Magnifying Glass is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Magnifying Glass is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Magnifying Glass. If not, see {License URI}.
*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// if admin area
if ( is_admin() ) {

	// include plugin dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'public/subscriber-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'public/subscriber-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'public/subscriber-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'public/subscriber-extend-profile.php';

	// include plugin dependencies: admin and public
	require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';

}