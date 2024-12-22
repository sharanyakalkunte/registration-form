$(document).ready(function() {
    $('#registrationForm').submit(function(e) {
        e.preventDefault(); // Prevent default form submission
        
        let formData = $(this).serialize(); // Get form data
        
        // Show success message with form data
        $('#result').fadeIn();
        $('#resultContent').html(`
            <strong>Full Name:</strong> ${$('#name').val()}<br>
            <strong>Email:</strong> ${$('#email').val()}<br>
            <strong>Phone Number:</strong> ${$('#phone').val()}<br>
            <strong>Gender:</strong> ${$('#gender').val()}<br>
            <strong>Address:</strong> ${$('#address').val()}
        `);
        
        // Clear the form
        $('#registrationForm')[0].reset();
    });
});
