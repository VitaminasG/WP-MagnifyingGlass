<?php // Magnifying Glass - Subscriber Settings Callbacks

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// process ajax request
function ajax_subscriber_handler() {

	// check nonce
	check_ajax_referer( 'ajax_subscriber', 'nonce' );

	// check user
	if ( ! current_user_can( 'subscriber' ) ) return;

	// Create 2 arrays for storing data
	$dogMetaDataArray = array();
	$ajaxArray = array();

	$dogName = sanitizeTextField( 'dogName' );
	$dogMetaDataArray['dogName'] = $dogName;
	$dogAge = sanitizeTextField( 'dogAge' );;
	$dogMetaDataArray['dogAge'] = $dogAge;
	$dogBreed = sanitizeTextField('dogBreed');
	$dogMetaDataArray['dogBreed'] = $dogBreed;
	$dogFeatures = sanitizeTextField('dogFeatures');
	$dogMetaDataArray['dogFeatures'] = $dogFeatures;
	$dogHealth = sanitizeTextField( 'dogHealth' );
	$dogMetaDataArray['dogHealth'] = $dogHealth;
	$dogMedication = sanitizeTextField( 'dogMedication' );
	$dogMetaDataArray['dogMedication'] = $dogMedication;
	$dogFeeding = sanitizeTextField( 'dogFeeding' );
	$dogMetaDataArray['dogFeeding'] = $dogFeeding;
	$dogTrained = sanitizeTextField( 'dogTrained' );
	$dogMetaDataArray['dogTrained'] = $dogTrained;
	$dogSpayed = sanitizeTextField( 'dogSpayed' );
	$dogMetaDataArray['dogSpayed'] = $dogSpayed;
	$dogMicrochip = sanitizeTextField( 'dogMicrochip' );
	$dogMetaDataArray['dogMicrochip'] = $dogMicrochip;

	$dogEmergency = sanitizeTextArea( 'dogEmergency' );
	$dogMetaDataArray['dogEmergency'] = $dogEmergency;

	$dogLike = sanitizeTextField( 'dogLike' );
	$dogMetaDataArray['dogLike'] = $dogLike;
	$dogDislikes = sanitizeTextField( 'dogDislikes' );
	$dogMetaDataArray['dogDislikes'] = $dogDislikes;
	$dogLeft = sanitizeTextField( 'dogLeft' );
	$dogMetaDataArray['dogLeft'] = $dogLeft;
	$dogTravel = sanitizeTextField( 'dogTravel' );
	$dogMetaDataArray['dogTravel'] = $dogTravel;
	$dogRecall = sanitizeTextField( 'dogRecall' );
	$dogMetaDataArray['dogRecall'] = $dogRecall;
	$dogBehaviour = sanitizeTextField( 'dogBehaviour' );
	$dogMetaDataArray['dogBehaviour'] = $dogBehaviour;
	$dogLead = sanitizeTextField( 'dogLead' );
	$dogMetaDataArray['dogLead'] = $dogLead;
	$dogWater = sanitizeTextField( 'dogWater' );
	$dogMetaDataArray['dogWater'] = $dogWater;
	$dogSocialMedia = sanitizeTextField( 'dogSocialMedia' );
	$dogMetaDataArray['dogSocialMedia'] = $dogSocialMedia;
	$dogVet = sanitizeTextField( 'dogVet' );
	$dogMetaDataArray['dogVet'] = $dogVet;

	$dogVetAdd = sanitizeTextField( 'dogVetAdd' );
	$dogMetaDataArray['dogVetAdd'] = $dogVetAdd;

	$dogVetPhone = sanitizeTextField( 'dogVetPhone' );
	$dogMetaDataArray['dogVetPhone'] = $dogVetPhone;
	$dogVetUsual = sanitizeTextField( 'dogVetUsual' );
	$dogMetaDataArray['dogVetUsual'] = $dogVetUsual;

	$dogInsurance = sanitizeTextField( 'dogInsurance' );
	$dogMetaDataArray['dogInsurance'] = $dogInsurance;

	$dogPolicyNr = sanitizeTextField( 'dogPolicyNr' );
	$dogMetaDataArray['dogPolicyNr'] = $dogPolicyNr;
	$dogInsurer = sanitizeTextField( 'dogInsurer' );
	$dogMetaDataArray['dogInsurer'] = $dogInsurer;
	$dogAnotherVet = sanitizeTextField( 'dogAnotherVet' );
	$dogMetaDataArray['dogAnotherVet'] = $dogAnotherVet;

	$dogOptionOne = sanitizeTextArea( 'dogOptionOne' );
	$dogMetaDataArray['dogOptionOne'] = $dogOptionOne;
	$dogOptionTwo = sanitizeTextArea( 'dogOptionTwo' );
	$dogMetaDataArray['dogOptionTwo'] = $dogOptionTwo;

	$dogAgree = isset($_POST['dogAgree']) && $_POST['dogAgree']=='yes' ? sanitize_text_field( $_POST['dogAgree']='yes' ) : 'no';
	$dogMetaDataArray['dogAgree'] = $dogAgree;
	$dogFeedback = sanitizeTextField( 'dogFeedback' );
	$dogMetaDataArray['dogFeedback'] = $dogFeedback;

	// Foreach loop to add user field information
	foreach ($dogMetaDataArray as $key => $value){
		add_information( $key, $value );
	}

	// Foreach loop to get user information	and add to array
	foreach ($dogMetaDataArray as $metaKey => $value){
		$ajaxArray[$metaKey] =  get_meta_value($metaKey);
	}

	// send data to Ajax as Json list and display
	wp_send_json($ajaxArray);

}
// ajax hook for logged-in users: wp_ajax_{action}
add_action( 'wp_ajax_subscriber_hook', 'ajax_subscriber_handler' );


//My ShortCode functions
function add_information($metaKey, $metaValue){
	$user    = wp_get_current_user();
	$user_id = $user->ID;
	return update_user_meta($user_id, $metaKey, $metaValue, '');
}

function get_meta_value ($metaKey){
	$user    = wp_get_current_user();
	$user_id = $user->ID;
	return get_user_meta($user_id, $metaKey, true);
}

function sanitizeTextField($fieldName){
	return sanitize_text_field($_POST[$fieldName]);
}

function sanitizeTextArea($fieldName){
	return sanitize_textarea_field($_POST[$fieldName]);
}