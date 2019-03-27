/*

	Ajax Example - JavaScript for Admin Area

*/
(function($) {

    $(document).ready(function() {

        // when user submits the form
        $('#UserList').on( 'submit', function(event) {

            // prevent form submission
            event.preventDefault();

            // add loading message
            $('#mg_import').html('Loading...');

            var userList = $('#userList').val();

            // submit the data
            $.post(ajaxurl, {

                nonce:  ajax_admin.nonce,
                action: 'admin_hook',
                userList: userList

            }, function(data) {

                // console.log(data);

                var agree = '';

                if( data.dogAgree.length === 0){
                    agree = 'No';
                } else {
                    agree = data.dogAgree ;
                }

                // export table with json.data
                var table = '<table class="table table-dark">\n' +
                    '            <thead>\n' +
                    '            <tr>\n' +
                    '                <th scope="col">Field Name</th>\n' +
                    '                <th scope="col">Field Details</th>\n' +
                    '            </tr>\n' +
                    '            </thead>\n' +
                    '            <tbody>\n' +
                    '            <!-- User Information -->\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Username:</th>\n' +
                    '                <td>'+ data.username +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">User First Name:</th>\n' +
                    '                <td>'+ data.firstname +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">User Last Name:</th>\n' +
                    '                <td>'+ data.lastname +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Address:</th>\n' +
                    '                <td>'+ data.address +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Phone Number:</th>\n' +
                    '                <td>'+ data.phoneNumber +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Dog(s) Name:</th>\n' +
                    '                <td>'+ data.dogName +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Dog(s) Age:</th>\n' +
                    '                <td>'+ data.dogAge +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Breed:</th>\n' +
                    '                <td>'+ data.dogBreed +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Features:</th>\n' +
                    '                <td>'+ data.dogFeatures +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Health Problems:</th>\n' +
                    '                <td>'+ data.dogHealth +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Medication:</th>\n' +
                    '                <td>'+ data.dogMedication +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Feeding:</th>\n' +
                    '                <td>'+ data.dogFeeding +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Trained?</th>\n' +
                    '                <td>'+ data.dogTrained +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Spayed/neutered?</th>\n' +
                    '                <td>'+ data.dogSpayed +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Microchip Nr.</th>\n' +
                    '                <td>'+ data.dogMicrochip +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Emergency Contacts:</th>\n' +
                    '                <td>'+ data.dogEmergency +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Likes?</th>\n' +
                    '                <td>'+ data.dogLike +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Dislikes?</th>\n' +
                    '                <td>'+ data.dogDislikes +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Can be left alone?</th>\n' +
                    '                <td>'+ data.dogLeft +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Can travel in a car?</th>\n' +
                    '                <td>'+ data.dogTravel +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Recall?</th>\n' +
                    '                <td>'+ data.dogRecall +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Behaviour:</th>\n' +
                    '                <td>'+ data.dogBehaviour +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Walked off lead?</th>\n' +
                    '                <td>'+ data.dogLead +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Allowed to enter water?</th>\n' +
                    '                <td>'+ data.dogWater +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Permission for dog(s)\'s images:</th>\n' +
                    '                <td>'+ data.dogSocialMedia +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Vet Name:</th>\n' +
                    '                <td>'+ data.dogVet +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Vet address:</th>\n' +
                    '                <td>'+ data.dogVetAdd +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Vet phone:</th>\n' +
                    '                <td>'+ data.dogVetPhone +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Name of usual Vet:</th>\n' +
                    '                <td>'+ data.dogVetUsual +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Pet Insured?</th>\n' +
                    '                <td>'+ data.dogInsurance +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Policy number:</th>\n' +
                    '                <td>'+ data.dogPolicyNr +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Details of insurer:</th>\n' +
                    '                <td>'+ data.dogInsurer +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">To be seen by another vet?</th>\n' +
                    '                <td>'+ data.dogAnotherVet +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Event of an accident or medical emergency?</th>\n' +
                    '                <td>'+ data.dogOptionOne +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Any Other requirements?</th>\n' +
                    '                <td>'+ data.dogOptionTwo +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Agreed with Our T&C?</th>\n' +
                    '                <td>'+ agree +'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '                <th scope="row">Feedback:</th>\n' +
                    '                <td>'+ data.dogFeedback +'</td>\n' +
                    '            </tr>\n' +
                    '            </tbody>\n' +
                    '        </table>';

                $('#mg_import').html(table);

            });

        });

    });

})( jQuery );
