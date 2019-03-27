/*

	Ajax Example - JavaScript for Subscriber Area

*/
(function($) {

    $(document).ready(function() {

        // when user submits the form
        $('#question').on('submit', function(event) {

            // prevent form submission
            event.preventDefault();

            var dogName = $('#dogName').val();
            var dogAge = $('#dogAge').val();
            var dogBreed = $('#dogBreed').val();
            var dogFeatures = $('#dogFeatures').val();
            var dogHealth = $('#dogHealth').val();
            var dogMedication = $('#dogMedication').val();
            var dogFeeding = $('#dogFeeding').val();
            var dogTrained = $('#dogTrained').val();
            var dogSpayed = $('#dogSpayed').val();
            var dogMicrochip = $('#dogMicrochip').val();
            var dogEmergency = $('#dogEmergency').val();
            var dogLike = $('#dogLike').val();
            var dogDislikes = $('#dogDislikes').val();
            var dogLeft = $('#dogLeft').val();
            var dogTravel = $('#dogTravel').val();
            var dogRecall = $('#dogRecall').val();
            var dogBehaviour = $('#dogBehaviour').val();
            var dogLead = $('#dogLead').val();
            var dogWater = $('#dogWater').val();
            var dogSocialMedia = $('#dogSocialMedia').val();
            var dogVet = $('#dogVet').val();
            var dogVetAdd = $('#dogVetAdd').val();
            var dogVetPhone = $('#dogVetPhone').val();
            var dogVetUsual = $('#dogVetUsual').val();
            var dogInsurance = $('#dogInsurance').val();
            var dogPolicyNr = $('#dogPolicyNr').val();
            var dogInsurer = $('#dogInsurer').val();
            var dogAnotherVet = $('#dogAnotherVet').val();
            var dogOptionOne = $('#dogOptionOne').val();
            var dogOptionTwo = $('#dogOptionTwo').val();
            var dogAgree = $('#dogAgree').val();
            var dogFeedback = $('#dogFeedback').val();

            // submit the data
            $.post(ajaxurl, {

                nonce:  ajax_subscriber.nonce,
                action: 'subscriber_hook',
                type: 'post',
                dogName : dogName,
                dogAge : dogAge,
                dogBreed : dogBreed,
                dogFeatures : dogFeatures,
                dogHealth : dogHealth,
                dogMedication : dogMedication,
                dogFeeding : dogFeeding,
                dogTrained : dogTrained,
                dogSpayed : dogSpayed,
                dogMicrochip : dogMicrochip,
                dogEmergency : dogEmergency,
                dogLike : dogLike,
                dogDislikes : dogDislikes,
                dogLeft : dogLeft,
                dogRecall : dogRecall,
                dogTravel : dogTravel,
                dogBehaviour : dogBehaviour,
                dogLead : dogLead,
                dogWater : dogWater,
                dogSocialMedia : dogSocialMedia,
                dogVet : dogVet,
                dogVetAdd : dogVetAdd,
                dogVetPhone : dogVetPhone,
                dogVetUsual : dogVetUsual,
                dogInsurance : dogInsurance,
                dogPolicyNr : dogPolicyNr,
                dogInsurer : dogInsurer,
                dogAnotherVet : dogAnotherVet,
                dogOptionOne : dogOptionOne,
                dogOptionTwo : dogOptionTwo,
                dogAgree : dogAgree,
                dogFeedback : dogFeedback
            }, function(response) {

                $('#dogname').val(response.dogName);
                $('#dogAge').val(response.dogAge);
                $('#dogBreed').val(response.dogBreed);
                $('#dogFeatures').val(response.dogFeatures);
                $('#dogHealth').val(response.dogHealth);
                $('#dogMedication').val(response.dogMedication);
                $('#dogFeeding').val(response.dogFeeding);
                $('#dogTrained').val(response.dogTrained);
                $('#dogSpayed').val(response.dogSpayed);
                $('#dogMicrochip').val(response.dogMicrochip);
                $('#dogEmergency').val(response.dogEmergency);
                $('#dogLike').val(response.dogDislikes);
                $('#dogDislikes').val(response.dogDislikes);
                $('#dogLeft').val(response.dogLeft);
                $('#dogTravel').val(response.dogTravel);
                $('#dogRecall').val(response.dogRecall);
                $('#dogBehaviour').val(response.dogBehaviour);
                $('#dogLead').val(response.dogLead);
                $('#dogWater').val(response.dogWater);
                $('#dogSocialMedia').val(response.dogSocialMedia);
                $('#dogVet').val(response.dogVet);
                $('#dogVetAdd').val(response.dogVetAdd);
                $('#dogVetPhone').val(response.dogVetPhone);
                $('#dogVetUsual').val(response.dogVetUsual);
                $('#dogInsurance').val(response.dogInsurance);
                $('#dogPolicyNr').val(response.dogPolicyNr);
                $('#dogInsurer').val(response.dogInsurer);
                $('#dogAnotherVet').val(response.dogAnotherVet);
                $('#dogOptionOne').val(response.dogOptionOne);
                $('#dogOptionTwo').val(response.dogOptionTwo);
                if($('#dogAgree').is(':checked')){ $('#dogAgree').prop('checked', true);}
                $('#dogFeedback').val(response.dogFeedback);

                // console.log(response);

            });

        });

    });

})( jQuery );
