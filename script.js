
$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();

        let email = $('input[name="email"]').val().trim();
        let phone = $('input[name="phone"]').val().trim();
        let fullname = $('input[name="fullname"]').val().trim();
        let gender = $('select[name="gender"]').val();
        let address = $('textarea[name="address"]').val().trim();

        // Email regex validation
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/;
        if (!emailPattern.test(email)) {
            $('#response').html('<p style="color:white;">Please enter a valid email address.</p>');
            return;
        }

        // Phone validation (10 digits only)
        let phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phone)) {
            $('#response').html('<p style="color:white;">Phone number must be 10 digits.</p>');
            return;
        }

        // Ensure other required fields aren’t empty
        if (!fullname || !gender || !address) {
            $('#response').html('<p style="color:white;">All fields are required.</p>');
            return;
        }

        // If all validations pass, send data to backend
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $(this).serialize(),
            success: function(response) {
                $('#response').html(response);
                $('#registrationForm')[0].reset();
            },
            error: function() {
                $('#response').html('<p style="color:white;">Error submitting form.</p>');
            }
        });
    });
});


// $(document).ready(function() {
//     $('#registrationForm').on('submit', function(e) {
//         e.preventDefault(); // prevent normal form submit
//         $.ajax({
//             type: 'POST',
//             url: 'submit.php',
//             data: $(this).serialize(),
//             success: function(response) {
//                 $('#response').html(response);
//                 $('#registrationForm')[0].reset();
//             },
//             error: function() {
//                 $('#response').html('<p style="color:red;">Error submitting form.</p>');
//             }
//         });
//     });
// });