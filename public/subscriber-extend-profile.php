<?php // Extending Main profile Page Fields

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
	<h3><?php _e("Extra profile information", "blank"); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="address"><?php _e("Address"); ?></label></th>
			<td>
				<input type="text" name="address" id="address" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e("Please enter your address."); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="city"><?php _e("Phone Number"); ?></label></th>
			<td>
				<input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo esc_attr( get_the_author_meta( 'phoneNumber', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e("Please enter your phone number."); ?></span>
			</td>
		</tr>
	</table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

	update_user_meta( $user_id, 'address', $_POST['address'] );
	update_user_meta( $user_id, 'phoneNumber', $_POST['phoneNumber'] );
}

?>