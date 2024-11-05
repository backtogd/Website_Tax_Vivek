// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Get the form element
    const form = document.querySelector('form');

    // Handle form submission
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const mobile = document.getElementById('mobile').value;
        const message = document.getElementById('message').value;

        // Validate form values
        if (name === '' || email === '' || mobile === '' || message === '') {
            alert('Please fill in all fields.');
            return;
        }

        // Display a success message
        alert('Thank you for your message, ' + name + '! We will get back to you soon.');

        // Clear the form
        form.reset();
    });
});
