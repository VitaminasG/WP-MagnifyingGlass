<?php // Magnifying Glass - Subscriber Page

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// display subscriber page
function magnifyingGlass_profile_page() {

	$user = wp_get_current_user();

	// check if user is allowed access
	if ( ! current_user_can( 'subscriber' ) ) {
		return;
	} ?>

    <div class="container-fluid w-100 was-validated">
        <div class="row mx-auto w-50 d-block">
            <h2 class="text-center d-block my-5"><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <p class="text-center d-block my-5">
                Hello, <?php echo $user->user_login; ?>. Could you fill the form to
                record all <span class="font-weight-bold">important information</span> about your pet. Thank you!
            </p>
        </div>
        <div class="row mx-auto">

            <form id="question" method="post" class="mx-auto w-75 h-100">

                <div class="form-group w-75 mx-auto">
                    <label class="text-center" for="dogName">Name of Dog(s):</label>
                    <input type="text" class="form-control" id="dogName" name="dogName" placeholder="Enter dog(s) Name" value="<?php echo get_meta_value('dogName');?>" required>
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogAge">Age(s):</label>
                    <input type="text" class="form-control" id="dogAge" name="dogAge" placeholder="Enter dog(s) Age" value="<?php echo get_meta_value('dogAge');?>" required>
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogBreed">Breed:</label>
                    <input type="text" class="form-control" id="dogBreed" name="dogBreed" placeholder="Breed" value="<?php echo get_meta_value('dogBreed');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogFeatures">Distinguishing Features:</label>
                    <input type="text" class="form-control" id="dogFeatures" name="dogFeatures" placeholder="Features" value="<?php echo get_meta_value('dogFeatures');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogHealth">Health Problems / Allergies:</label>
                    <input type="text" class="form-control" id="dogHealth" name="dogHealth" placeholder="Health Problems" value="<?php echo get_meta_value('dogHealth');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogMedication">Regular Medication and Dose:</label>
                    <input type="text" class="form-control" id="dogMedication" name="dogMedication" placeholder="Medication" value="<?php echo get_meta_value('dogMedication');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogFeeding">Feeding regime i.e. time, amounts and frequency:</label>
                    <input type="text" class="form-control" id="dogFeeding" name="dogFeeding" placeholder="Feeding" value="<?php echo get_meta_value('dogFeeding');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogTrained">Is your dog(s) house trained?:</label>
                    <input type="text" class="form-control" id="dogTrained" name="dogTrained" placeholder="Trained?" value="<?php echo get_meta_value('dogTrained');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogSpayed">Has your dog(s) been spayed/neutered?:</label>
                    <input type="text" class="form-control" id="dogSpayed" name="dogSpayed" placeholder="spayed/neutered?" value="<?php echo get_meta_value('dogSpayed');?>">
                    <small id="neuteredHelp" class="form-text text-muted">
                        *We DO NOT provide services for dogs over 6 months that have not been neutered.
                    </small>
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogMicrochip">Microchip number(s):</label>
                    <input type="text" class="form-control" id="dogMicrochip" name="dogMicrochip" placeholder="Microchip Nr." value="<?php echo get_meta_value('dogMicrochip');?>">
                </div>

                <h4 class="text-center "><ins>Emergency Contact Person - Name:</ins></h4>

                <div class="form-group w-75 mx-auto">
                    <label for="dogEmergency">Emergency Contact phone number and address:</label>
                    <textarea class="form-control" id="dogEmergency" name="dogEmergency" rows="3"><?php echo get_meta_value('dogEmergency'); ?></textarea>
                </div>

                <h4 class="text-center"><ins>Behaviour:</ins></h4>

                <div class="form-group w-75 mx-auto">
                    <label for="dogLike">Likes:</label>
                    <input type="text" class="form-control" id="dogLike" name="dogLike" placeholder="Likes?" value="<?php echo get_meta_value('dogLike');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogDislikes">Dislikes:</label>
                    <input type="text" class="form-control" id="dogDislikes" name="dogDislikes" placeholder="Dislikes?" value="<?php echo get_meta_value('dogDislikes');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogLeft">The maximum time your dog(s) can be left alone:</label>
                    <input type="text" class="form-control" id="dogLeft" name="dogLeft" placeholder="Can be left alone?" value="<?php echo get_meta_value('dogLeft');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogTravel">Can your dog(s) travel in a car?:</label>
                    <input type="text" class="form-control" id="dogTravel" name="dogTravel" placeholder="Can travel in a car?" value="<?php echo get_meta_value('dogTravel');?>">
                    <small id="neuteredHelp" class="form-text text-muted">
                        *All dogs are restrained while in transit as is legally required.
                    </small>
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogRecall">Recall:</label>
                    <input type="text" class="form-control" id="dogRecall" name="dogRecall" placeholder="Recall" value="<?php echo get_meta_value('dogRecall');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogBehaviour">Behaviour towards other dogs, people, children and livestock:</label>
                    <input type="text" class="form-control" id="dogBehaviour" name="dogBehaviour" placeholder="Behaviour" value="<?php echo get_meta_value('dogBehaviour');?>">
                </div>

                <small id="neuteredHelp" class="form-text text-center text-warning">
                    * Please note where a dog shows aggression to people or
                    other dogs / animals we reserve the right to use a muzzle
                    in order to prevent injury or harm.
                </small>
                <small id="neuteredHelp" class="form-text text-center text-warning">
                    ** Your dog(s) will be walked off lead, only with your agreement,
                    subject to the restrictions above.
                </small>

                <div class="form-group w-75 mx-auto">
                    <label for="dogLead"><span class="font-weight-bold">Do you agree to your dog(s) being walked off lead?</span></label>
                    <input type="text" class="form-control" id="dogLead" name="dogLead" placeholder="Walked off lead?" value="<?php echo get_meta_value('dogLead');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogWater"><span class="font-weight-bold">Is your dog(s) allowed to enter water while out on walks?</span></label>
                    <input type="text" class="form-control" id="dogWater" name="dogWater" placeholder="Allowed to enter water?" value="<?php echo get_meta_value('dogWater');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogSocialMedia">
                        <span class="font-weight-bold">
                            Do you give permission for your dog(s)'s image to be used by
                            Jen's Happy Hounds on social media? (i.e. Facebook)
                        </span>
                    </label>
                    <input type="text" class="form-control" id="dogSocialMedia" name="dogSocialMedia" placeholder="Permission for your dog(s)'s images" value="<?php echo get_meta_value('dogSocialMedia');?>">
                </div>

                <h4 class="text-center"><ins>Veterinary Treatment</ins></h4>
                <h5 class="text-center font-italic">
                    In the event that your dog(s) need to receive veterinary
                    treatment while in our care please provide details of:
                </h5>

                <div class="form-group w-75 mx-auto">
                    <label for="dogVet">Name of Vets:</label>
                    <input type="text" class="form-control" id="dogVet" name="dogVet" placeholder="Vet Name" value="<?php echo get_meta_value('dogVet');?>">
                </div>
                <div class="form-group w-75 mx-auto">
                    <label for="dogVetAdd">Address:</label>
                    <input type="text" class="form-control" id="dogVetAdd" name="dogVetAdd" placeholder="Vet address" value="<?php echo get_meta_value('dogVetAdd');?>">
                </div>
                <div class="form-group w-75 mx-auto">
                    <label for="dogVetPhone">Phone number:</label>
                    <input type="text" class="form-control" id="dogVetPhone" name="dogVetPhone" placeholder="Vet phone" value="<?php echo get_meta_value('dogVetPhone');?>">
                </div>
                <div class="form-group w-75 mx-auto">
                    <label for="dogVetUsual">Name of usual Vet:</label>
                    <input type="text" class="form-control" id="dogVetUsual" name="dogVetUsual" placeholder="Usual Vet" value="<?php echo get_meta_value('dogVetUsual');?>">
                </div>
                <div class="form-group w-75 mx-auto">
                    <label for="dogInsurance">Is Your Pet Insured?</label>
                    <input type="text" class="form-control" id="dogInsurance" name="dogInsurance" placeholder="Yes/No?" value="<?php echo get_meta_value('dogInsurance');?>">
                </div>
                <div class="form-group w-75 mx-auto">
                    <label for="dogPolicyNr">Policy number:</label>
                    <input type="text" class="form-control" id="dogPolicyNr" name="dogPolicyNr" placeholder="Policy number" value="<?php echo get_meta_value('dogPolicyNr');?>">
                </div>
                <div class="form-group w-75 mx-auto">
                    <label for="dogInsurer">Name and contact details of insurer:</label>
                    <input type="text" class="form-control" id="dogInsurer" name="dogInsurer" placeholder="Details of insurer" value="<?php echo get_meta_value('dogInsurer');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogAnotherVet">* <strong>In the event of an emergency</strong> if your own vet is not contactable, or available to
                        provide immediate attention, do you give consent for your dog(s) to be seen by another vet?</label>
                    <input type="text" class="form-control" id="dogAnotherVet" name="dogAnotherVet" placeholder="Yes/No?" value="<?php echo get_meta_value('dogAnotherVet');?>">
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogOptionOne">**<strong>
                            Please write below what action you want us to
                            take in the event of an accident or medical emergency?
                        </strong>(please include any action you do not want us to take).
                        Unless stated otherwise we will follow the Vets advice.
                    </label>
                    <textarea class="form-control" id="dogOptionOne" name="dogOptionOne" rows="4"><?php echo get_meta_value('dogOptionOne'); ?></textarea>
                    <small>*** please see T&Cs in respect of payment of vet fees.</small>
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogOptionTwo"><ins>Any Other Requirements particular to your dog(s)/pet(s)?</ins></label>
                    <textarea class="form-control" id="dogOptionTwo" name="dogOptionTwo" rows="4"><?php echo get_meta_value('dogOptionTwo'); ?></textarea>
                </div>

                <div class="custom-control custom-checkbox mb-3 w-75 mx-auto">
                    <input type="checkbox" class="custom-control-input" id="dogAgree" name="dogAgree" required value="yes" <?php echo $result = get_meta_value('dogAgree') === 'yes' ? 'checked' : ''; ?>>
                    <label class="custom-control-label" for="dogAgree">By ticking this agreement you are agreeing to the terms and conditions <a href="<?php bloginfo("url");?>/TermsAndConditions/">listed on our website</a></label>
                    <div class="invalid-feedback">Please tick if you agree with Our T&C</div>
                </div>

                <div class="container my-5">
                    <h4 class="text-center">Method of payment shall be by Bank Transfer or Cash</h4>
                    <ul class="list-group list-group-flush w-75 mx-auto">
                        <li class="list-group-item">Payable to: <strong>Your Company Name</strong></li>
                        <li class="list-group-item">Account number: <strong>XXXXXXXX</strong></li>
                        <li class="list-group-item">Sort Code: <strong>XX-XX-XX</strong></li>
                    </ul>
                </div>

                <div class="form-group w-75 mx-auto">
                    <label for="dogFeedback">Please tell us where you heard about Our Company</label>
                    <input type="text" class="form-control" id="dogFeedback" name="dogFeedback" placeholder="Feedback" value="<?php echo get_meta_value('dogFeedback');?>">
                </div>

                <input type="submit" class="btn btn-primary mx-auto d-block my-5" value="Update">

            </form>

        </div>
    </div>

	<?php
}
