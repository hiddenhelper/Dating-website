// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      user_name: "required",
      user_mobile: "required",
      age: "required",
      user_email: {
      required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
      user_email: true
      },
      user_pass: {
      required: true,
      minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      user_name:   "Please enter your firstname",
      user_mobile: "Please enter your lastname",
      age:         "Please enter your lastname",
      user_pass: {
      required:    "Please provide a password",
      minlength:   "Your password must be at least 5 characters long"
      },
      user_email:  "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});