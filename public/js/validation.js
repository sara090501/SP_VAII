function validationOfReview() {
    let nameValidation = document.forms["addReview"]["name"].value;
    if (nameValidation === "") {
        let warning = document.getElementById("name-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Meno musí byť vyplnené.";
    }

    let textValidation = document.forms["addReview"]["text"].value;
    if (textValidation === "") {
        let warning = document.getElementById("text-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Text recenzie musí byť vyplnený.";

        return false;
    }
}

function validationOfRegistration() {
    let firstNameValidation = document.forms["registration"]["firstName"].value;
    if (firstNameValidation === "") {
        let warning = document.getElementById("firstName-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Meno musí byť vyplnené.";
    }

    let lastNameValidation = document.forms["registration"]["lastName"].value;
    if (lastNameValidation === "") {
        let warning = document.getElementById("lastName-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Priezvisko musí byť vyplnené.";
    }

    let emailValidation = document.forms["registration"]["email"].value;
    if (emailValidation === "") {
        let warning = document.getElementById("email-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Email musí byť vyplnené.";
    }

    let loginValidation = document.forms["registration"]["login"].value;
    if (loginValidation === "") {
        let warning = document.getElementById("login-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Prezývka musí byť vyplnené.";
    }

    let passwordValidation = document.forms["registration"]["email"].value;
    if (passwordValidation === "") {
        let warning = document.getElementById("password-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Heslo musí byť vyplnené.";
    }

    let phoneNumberValidation = document.forms["registration"]["phoneNumber"].value;
    if (phoneNumberValidation === "") {
        let warning = document.getElementById("phone-number-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Telefónne číslo musí byť vyplnené.";

        return false;
    }
}