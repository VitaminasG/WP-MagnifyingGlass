<?php // Magnifying Glass - Admin Settings Callbacks

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ajax_admin_handler(){

	// check nonce
	check_ajax_referer( 'ajax_admin', 'nonce' );

	// check user
	if ( ! current_user_can( 'administrator' ) ) return;


//	Array with empty metaKey Values
	$arrayOfFields = array( 'address' => '', 'phoneNumber' => '', 'dogName' => '', 'dogAge' => '', 'dogBreed' => '',
	                        'dogFeatures' => '', 'dogHealth' => '', 'dogMedication' => '', 'dogFeeding' => '',
	                        'dogTrained' => '', 'dogSpayed' => '', 'dogMicrochip' => '', 'dogEmergency' => '',
	                        'dogLike' => '', 'dogDislikes' => '', 'dogLeft' => '', 'dogRecall' => '', 'dogTravel' => '',
	                        'dogBehaviour' => '', 'dogLead' => '', 'dogWater' => '', 'dogSocialMedia' => '',
	                        'dogVet' => '', 'dogVetAdd' => '', 'dogVetPhone' => '', 'dogVetUsual' => '',
	                        'dogInsurance' => '', 'dogPolicyNr' => '', 'dogInsurer' => '', 'dogAnotherVet' => '',
	                        'dogOptionOne' => '', 'dogOptionTwo' => '', 'dogAgree' => '', 'dogFeedback' => '' );

//  Empty array for storing results
	$updatedArray = array();

	$userList = $_POST['userList'];

	foreach ($arrayOfFields as $metaKey => $value){
		$updatedArray[$metaKey]= get_meta_value_of_users($userList, $metaKey);
	}

	wp_send_json(add_user_data_nonMeta($userList, $updatedArray));

}

// ajax hook for logged-in users: wp_ajax_{action}
add_action( 'wp_ajax_admin_hook', 'ajax_admin_handler' );

//My ShortCode functions
function get_meta_value_of_users ( $user_id, $metaKey ){
	return get_user_meta($user_id, $metaKey, true);
}

function add_user_data_nonMeta($user_id, $array){
	$user_info = get_userdata($user_id);
	$username = $user_info->user_login;
	$firstname = $user_info->first_name;
	$lastname = $user_info->last_name;
	$array = array('username'=>$username, 'firstname'=>$firstname, 'lastname'=>$lastname) + $array;
	return $array;
}