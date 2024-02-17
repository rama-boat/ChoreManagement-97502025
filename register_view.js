document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // to prevent form submission

    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var dob = new Date(document.getElementById('dob').value);
    var now = new Date();

   
    var isValid = true;

    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        isValid = false;
    }

    if (dob >= now) {
        alert('Date of Birth cannot be in the future!');
        isValid = false;
    }

   
    if (isValid) {
        this.submit();
    }
});