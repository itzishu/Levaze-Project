function validateform() {
var names = document.getElementById("names");
var phone = document.getElementById("phone");
var email = document.getElementById("email");
var password = document.getElementById("password");
var confirmPassword = document.getElementById("confirmPassword");
// var date = document.getElementById("date");
// var male = document.getElementById("male");
// var female = document.getElementById("female");
// var submit = document.getElementById("submit");
// var gen = document.getElementsByClassName("gen")

var flag = true;

    flag = true;

    // Name
    if (names.value == "") {
        document.getElementById("nameError").innerHTML = "Please enter your name!";
        flag = false;
    } else if (names.value.length < 3) {
        document.getElementById("nameError").innerHTML = "Your name is too short!";
        flag = false;
    } else {
        document.getElementById("nameError").innerHTML = "";
    }

    // Mobile number
    if (phone.value == "") {
        document.getElementById("numberError").innerHTML = "Mobile Number is Empty!";
        flag = false;
    } else if (phone.value.length < 10) {
        document.getElementById("numberError").innerHTML = "Number Is too short!";
        flag = false;
    } else if (phone.value.length > 10) {
        document.getElementById("numberError").innerHTML = "Number Is too long!";
        flag = false;
    } else {
        document.getElementById("numberError").innerHTML = "";
    }

    // Email address
    if (email.value == "") {
        document.getElementById("emailError").innerHTML = "Please enter your correct email id!";
        flag = false;
    } else {
        document.getElementById("emailError").innerHTML = "";
    }

    // Password
    if (password.value == "") {
        document.getElementById("passwordError").innerHTML = "Please enter your password!";
        flag = false;
    } else {
        document.getElementById("passwordError").innerHTML = "";
    }

    // Confirm Password
    if (confirmPassword.value == "") {
        document.getElementById("confirmPasswordError").innerHTML = "Please enter your confirm your password!";
        flag = false;
    // } else if (confirmPassword.value !== password.value) {
    } else if (confirmPassword.value.trim() !== password.value.trim()) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match!";
        flag = false;
    } else {
        document.getElementById("confirmPasswordError").innerHTML = "";
    }

    return flag;
}
