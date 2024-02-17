function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var emailError = document.getElementById("e_error");
    var passwordError = document.getElementById("p_error");
    var submitButton = document.getElementById("submitBtn");
    
    var isValid = true;

    // Check if email is empty
    if (email === "") {
      emailError.style.display = "block";
      isValid = false;
    } else {
      emailError.style.display = "none";
    }

    // Check if password is empty
    if (password === "") {
      passwordError.style.display = "block";
      isValid = false;
    } else {
      passwordError.style.display = "none";
    }

    // Check if submit button is clicked
    if (!submitButton.clicked) {
      isValid = false;
    }

    // Check if both email, password, and submit button are valid
    if (isValid) {
      // Additional checks can be added here if needed
      // For now, we'll just return true if everything is valid
      return true;
    } else {
      return false;
    }
  }