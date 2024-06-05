function validateForm() {
    var firstName = document.forms["contactForm"]["firstName"].value;
    var lastName = document.forms["contactForm"]["lastName"].value;
    var phoneNumber = document.forms["contactForm"]["phoneNumber"].value;
    var email = document.forms["contactForm"]["email"].value;

    if (firstName == "" || lastName == "" || phoneNumber == "" || email == "") {
        alert("All fields must be filled out");
        return false;
    }
}
