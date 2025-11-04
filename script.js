$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault(); // prevent normal form submit
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $(this).serialize(),
            success: function(response) {
                $('#response').html(response);
                $('#registrationForm')[0].reset();
            },
            error: function() {
                $('#response').html('<p style="color:red;">Error submitting form.</p>');
            }
        });
    });
});
