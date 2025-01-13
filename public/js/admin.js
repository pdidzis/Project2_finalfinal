"use strict";

function setupDeleteForms() {
    // Select all forms with the class 'deletion-form'
    let deleteForms = document.querySelectorAll('form.deletion-form');

    // Attach a 'submit' event listener to each form
    for (let form of deleteForms) {
        form.addEventListener('submit', function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Display a confirmation dialog
            if (window.confirm('Are you sure you want to delete this object?')) {
                // If confirmed, submit the form
                form.submit();
            } else {
                // If canceled, stop the submission
                return false;
            }
        });
    }
}

// Run the setupDeleteForms function after the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    setupDeleteForms();
});
