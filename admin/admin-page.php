<?php // Magnifying Glass - Admin Page

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// display page in admin panel
function magnifyingGlass_display_settings_page() {

	// check if user is allowed access
	if ( ! current_user_can( 'administrator' ) ) return;

	?>

	<div class="container-fluid w-100">
		<div class="row mx-auto d-block">
			<h2 class="text-center d-block my-5"><?php echo esc_html('Magnifying Glass for Reviewing Users Information'); ?></h2>
		</div>

        <div class="container w-100 mx-auto">
            <div class="row">
                <div class="col-12 d-block mx-auto my-5">

                    <form id="UserList" method="post" class="form d-block" >
                        <label class="d-block text-center" for="userList">User List</label>
                        <select class="custom-select w-25 d-block text-center mx-auto" name="userList" id="userList">
                            <option selected>Choose...</option>
	                        <?php
	                        $blogusers = get_users( 'blog_id=1&orderby=nicename&role=subscriber' );
	                        // Array of WP_User.
	                        foreach ( $blogusers as $user ) {
		                        echo '<option value="'.esc_html($user->ID).'">' . esc_html( $user->user_firstname.' '.$user->user_lastname ) . '</option>';
	                        }
	                        ?>
                        </select>

                        <input type="submit" class="btn btn-primary mx-auto d-block mt-5" value="Submit">
                    </form>
                </div>
            </div>

        </div>

        <div id="mg_import">

        </div>

	</div>

	<?php

}