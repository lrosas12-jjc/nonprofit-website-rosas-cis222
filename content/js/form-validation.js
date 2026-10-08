$(document).ready(function () {
  $("#contactForm").submit(function (event) {
    let isValid = true;

    // Clear previous error messages
    $(".error").text("");

    // Name validation
    const name = $("#name").val().trim();
    if (name === "") {
      $("#nameError").text("Name is required.");
      isValid = false;
    }

    // Email validation
    const email = $("#email").val().trim();
    const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
    if (email === "") {
      $("#emailError").text("Email is required.");
      isValid = false;
    } else if (!emailPattern.test(email)) {
      $("#emailError").text("Enter a valid email address.");
      isValid = false;
    }

    // Message validation
    const message = $("#message").val().trim();
    if (message === "") {
      $("#messageError").text("Message is required.");
      isValid = false;
    }

    // Prevent form submission if invalid
    if (!isValid) {
      event.preventDefault();
    }

  });
});