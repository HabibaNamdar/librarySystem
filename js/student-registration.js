function validateForm() {
    // Reset error messages
    resetErrors();
    
    // Get form inputs
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const address = document.getElementById("address").value;
    const password = document.getElementById("Password").value;
    
    // Flag to track form validity
    var isValid = true;
    
    // Validate name
    if (name === "") {
        isValid = false;
        document.getElementById("name-error").textContent = "Please enter your name";
    }
    
    // Validate email
    if (email === "") {
        isValid = false;
        document.getElementById("email-error").textContent = "Please enter your email";
    } else if (!validateEmail(email)) {
        isValid = false;
        document.getElementById("email-error").textContent = "Please enter a valid email address";
    }
    
    // Validate phone
    if (phone === "") {
        isValid = false;
        document.getElementById("phone-error").textContent = "Please enter your phone phone";
    }
    
    // Validate address
    if (address === "") {
        isValid = false;
        document.getElementById("address-error").textContent = "Please enter your address";
    }
    
    // Validate password
    if (password === "") {
        isValid = false;
        document.getElementById("password-error").textContent = "Please enter a password";
    }
    
    // Return form validity
    return isValid;
}

function resetErrors() {
    var errorElements = document.getElementsByClassName("error");
    for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = "";
    }
}

function validateEmail(email) {
    // Simple email validation regex
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
